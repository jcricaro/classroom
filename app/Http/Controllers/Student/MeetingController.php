<?php

namespace App\Http\Controllers\Student;

use App\Attendance;
use App\Http\Requests\Student\AttendMeeting;
use App\Meeting;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class MeetingController extends Controller
{
    /**
     * @return \Illuminate\Http\JsonResponse
     */
    public function index()
    {
        return response()->json(Meeting::with('teacher')->paginate());
    }

    /**
     * @param AttendMeeting $request
     * @param Meeting $meeting
     * @return \Illuminate\Http\JsonResponse
     */
    public function store(AttendMeeting $request, Meeting $meeting)
    {
        $late = false;

        $attendance = $meeting->attendances()->create([
            'user_id' => $request->user()->id,
            'is_late' => $late
        ]);

        return response()->json([
            'data' => $attendance,
            'message' => 'created'
        ], 201);
    }
}
