<?php

use App\Answer;
use App\Question;
use App\Quiz;
use App\User;
use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::truncate();
        Quiz::truncate();
        Answer::truncate();
        Question::truncate();

        $teacher = User::create([
            'name' => 'John Doe',
            'password' => bcrypt('123456'),
            'email' => 'johndoe@mail.com',
            'user_type' => 'teacher'
        ]);

        $lecture = $teacher->lectures()->create([
            'title' => 'Lecture title',
            'description' => 'Lecture description',
            'filename' => 'filename.pdf'
        ]);

        $meeting = $teacher->meetings()->create([
            'code' => 'test'
        ]);

        $quiz = $teacher->quizzes()->create([
            'title' => 'Test quiz 1',
            'time_limit' => '60',
            'quiz_date' => now()
        ]);

        $quiz->questions()->create([
            'question' => 'Question 1',
            'choices' => [
                'a' => 'choice 1',
                'b' => 'choice 2',
                'c' => 'choice 3',
                'd' => 'choice 4'
            ],
            'answer' => 'a'
        ]);

        $quiz->questions()->create([
            'question' => 'Question 2',
            'choices' => [
                'a' => 'choice 1',
                'b' => 'choice 2',
                'c' => 'choice 3',
                'd' => 'choice 4'
            ],
            'answer' => 'b'
        ]);

        $quiz->questions()->create([
            'question' => 'Question 3',
            'choices' => [
                'a' => 'choice 1',
                'b' => 'choice 2',
                'c' => 'choice 3',
                'd' => 'choice 4'
            ],
            'answer' => 'a'
        ]);

        $student = User::create([
            'name' => 'Student 1',
            'password' => bcrypt('123456'),
            'email' => 'student1@mail.com',
            'user_type' => 'student'
        ]);

        User::create([
            'name' => 'Student 2',
            'password' => bcrypt('123456'),
            'email' => 'student2@mail.com',
            'user_type' => 'student'
        ]);

        User::create([
            'name' => 'Student 3',
            'password' => bcrypt('123456'),
            'email' => 'student3@mail.com',
            'user_type' => 'student'
        ]);


        $score  = 0;

        $answers = [];

        foreach($quiz->questions as $index => $question) {
            $answers[$index]['id'] = $question->id;
            $answers[$index]['answer'] = 'a';
        }

        foreach($answers as $answer) {
            $question = Question::find($answer['id']);

            if($question->answer == $answer['answer']) {
                $score++;
            }
        }

        $quiz->answers()->create([
            'student_id' => $student->id,
            'answers' => $answers,
            'score' => $score,
        ]);
    }
}
