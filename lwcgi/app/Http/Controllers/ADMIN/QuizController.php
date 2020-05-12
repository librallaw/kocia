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
    public function showAllQuiz()
    {
        $data['quizzes'] = Quiz::orderBy("id","desc")->paginate(5);
        return view("admin.quiz.all",$data);
    }

    public function showViewQuiz($code)
    {
        $data['quiz'] = Quiz::where("quiz_code",$code)->first();
        return view("admin.quiz.view",$data);
    }

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
        $quiz -> title       = $request ->name;
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
            $new_quiz_question -> correct   = $question['correct'];
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


    public function doEditQuiz(Request $request)
    {
        $request -> validate([
            'question' => "required",
            'opt1' => "required",
            'opt2' => "required",
            'opt3' => "required",
            'opt4' => "required",
            'quiz_code' => "required",
            'question_code' => "required"

        ]);

        $new_quiz_question = Quiz_questions::where("quiz_code",$request->quiz_code)->where('question_code',$request->question_code)
            ->first();

        $new_quiz_question -> question  = $request->question;
        $new_quiz_question -> opt1      = $request->opt1;
        $new_quiz_question -> opt2      = $request-> opt2;
        $new_quiz_question -> opt3      = $request-> opt3;
        $new_quiz_question -> opt4      = $request-> opt4;
        $new_quiz_question -> correct   = $request-> correct;

        $new_quiz_question->save();

        return redirect()->back()->with("message","Question successfully Updated")->with("type","success");

    }


    public function doEditQuizTitle(Request $request)
    {
        $request -> validate([
            'title' => "required",
            'quiz_code' => "required"

        ]);

        $quiz = Quiz::where("quiz_code",$request->quiz_code)->first();

        $quiz->title  = $request->title;

        $quiz->save();

        return redirect()->back()->with("message","Question successfully Updated")->with("type","success");

    }
}
