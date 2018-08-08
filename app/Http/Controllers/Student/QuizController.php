<?php

namespace App\Http\Controllers\Student;

use App\Http\Requests\Student\AnswerQuiz;
use App\Question;
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
        // get today's quizzes
        return response()->json(
            Quiz::paginate()
        );
    }

    /**
     * @param Quiz $quiz
     * @return \Illuminate\Http\JsonResponse
     */
    public function show(Quiz $quiz)
    {
        return response()->json(['data' => $quiz->with('questions')->first()]);
    }

    /**
     * @param Quiz $quiz
     * @param AnswerQuiz $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function update(Quiz $quiz, AnswerQuiz $request)
    {
        $score = 0;

        $quiz->answers()->create([
            'student_id' => $request->user()->id,
            'answers' => $request->get('answers'),
            'score' => $score
        ]);

        foreach($request->get('answers') as $answer) {
            $question = Question::find($answer['id']);

            if($question->answer == $answer['answer']) {
                $score++;
            }
        }

        return response()->json([
            'message' => 'Quiz Submitted',
            'data' => ['score' => $score]
        ]);
    }
}