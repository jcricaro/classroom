<?php

namespace App\Http\Controllers\Teacher;

use App\Http\Requests\Teacher\AddQuiz;
use App\Quiz;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class QuizController extends Controller
{
    /**
     * @param Request $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function index(Request $request)
    {
        return response()->json($request->user()->quizzes()->paginate());
    }

    /**
     * @param Quiz $quiz
     * @return \Illuminate\Http\JsonResponse
     */
    public function show(Quiz $quiz)
    {
        return response()->json(['data' => $quiz->with('questions')->get()]);
    }

    /**
     * @param AddQuiz $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function store(AddQuiz $request)
    {
        $user = $request->user();

        $quiz = $user->quizzes()->create([
            'title' => $request->get('title'),
            'time_limit' => $request->get('time_limit'),
            'quiz_date' => now()
        ]);

        foreach($request->get('questions') as $question) {
            $quiz->questions()->create([
                'question' => $question['question'],
                'answer' => $question['answer'],
                'choices' => $question['choices']
            ]);
        }

        return response()->json([
            'data' => $quiz,
            'message' => 'created'
        ], 201);
    }
}
