<?php

namespace App\Http\Controllers\Teacher;

use App\Http\Requests\Teacher\AddMeeting;
use App\Meeting;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class MeetingController extends Controller
{

    /**
     * @param AddMeeting $meetingRequest
     */
    public function store(AddMeeting $meetingRequest)
    {
        $user = $meetingRequest->user();

        $user->meetings()->create([
            'code' => $meetingRequest->get('code')
        ]);
    }
}
