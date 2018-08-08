<?php

namespace App\Http\Controllers\Teacher;

use App\Http\Requests\Teacher\AddLecture;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class LectureController extends Controller
{
    /**
     * @param Request $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function index(Request $request)
    {
        return response()->json(
            $request->user()->lectures()->paginate()
        );
    }

    /**
     * @param AddLecture $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function store(AddLecture $request)
    {
        $path = $request->file('file')->store('lectures');

        $lecture = $request->user()->lectures()->create([
            'title' => $request->get('title'),
            'description' => $request->get('description'),
            'filename' => $path
        ]);

        return response()->json([
            'message' => 'created',
            'data' => $lecture
        ], 201);
    }
}
