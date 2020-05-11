<?php

namespace App\Http\Controllers\ADMIN;

use App\Libraries\Messenger;
use App\Quiz;
use App\Quiz_questions;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Validator;

class QuizController extends Controller
{
    //
    public function showCreateQuiz()
    {
        return view("admin.quiz.create");
    }

    public function doCreateQuiz(Request $request,Messenger $messenger)
    {

        $validator = Validator::make($request->all(), [
            'questions'     => 'required',
            'name'          => 'required',

        ]);

        if ($validator->fails()) {

            return response()->json([
                'status'=>false,
                'message' => 'Sorry All fields are required',
                'errors'  => $validator->errors()->all() ,
            ]);

        }

        $quiz_code = "LW-".$messenger->randomId('4','quiz_code','quiz')."-QZ" ;

        $quiz = new Quiz();
        $quiz -> name       = $request ->name;
        $quiz -> quiz_code  = $quiz_code;
        $quiz -> save();

        $questions = $request -> questions;

        foreach ($questions as $question){

            $new_quiz_question =  new Quiz_questions();
            $new_quiz_question -> question  = $question['question'];
            $new_quiz_question -> opt1      = $question['op1'];
            $new_quiz_question -> opt2      = $question['op2'];
            $new_quiz_question -> opt3      = $question['op3'];
            $new_quiz_question -> opt4      = $question['op4'];
            $new_quiz_question -> correct   = $question['op4'];
            $new_quiz_question -> quiz_code = $quiz_code;
            $new_quiz_question -> question_code = "LW-".$messenger->randomId('4','question_code','quiz_questions')
                ."-QQ";
            $new_quiz_question -> save();

        }

        return response()->json([
            'status'=>true,
            'message' => 'Quiz Successfully created',
            'errors'  => $validator->errors()->all() ,
        ]);
    }
}
