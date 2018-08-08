<?php

namespace App\Http\Controllers\Student;

use App\Lecture;
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
            Lecture::paginate()
        );
    }
}
