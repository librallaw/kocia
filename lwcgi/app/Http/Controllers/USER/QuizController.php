<?php

namespace App\Http\Controllers\USER;

use App\Quiz;
use App\Quiz_questions;
use App\Quiz_report;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class QuizController extends Controller
{
    //
    public function showAllUserQuiz()
    {
        $data['quizzes'] = Quiz::orderBy("id","desc") -> get();

        return view("user.quiz.all",$data);

    }

    public function showViewUserQuiz($quiz_code)
    {
        $report =  Quiz_report::where("user_id",Auth::user()->id)
            -> where("quiz_code",$quiz_code)
            -> first();


        if(!empty($report)){

            $data['report'] = $report;

        }

        $data['quiz'] = Quiz::where("quiz_code",$quiz_code) -> first();

        return view("user.quiz.view",$data);
    }


    public function markQuiz(Request $request)
    {
        $request->validate(['quiz_code' => 'required']);

        $correct     = 0;
        $wrong       = 0;

        $user_report = array();

        $questions = Quiz_questions::where("quiz_code",$request -> quiz_code) -> get();

        foreach ($questions as $question){

            $code = $question->question_code;

            //check if user submitted an answer for that question

            if(isset($request -> $code)){

                if($request -> $code  == $question -> correct){
                    $correct ++;

                    $user_report[$question -> question_code] = [
                        'user_answer'    => $request  -> $code,
                        'correct_answer' => $question -> correct,
                        'status'=> 1,
                    ];

                }else{
                    $wrong ++;

                    $user_report[$question -> question_code] = [
                        'user_answer'    => $request  -> $code,
                        'correct_answer' => $question -> correct,
                        'status'=> 0,
                    ];
                }

            }else{

                $user_report[$question -> question_code] = [

                    'user_answer'    => "",
                    'correct_answer' => $question -> correct,
                    'status'         => 0,
                ];
            }

        }

        $check =  Quiz_report::where("user_id",Auth::user()->id)
            -> where("quiz_code",$request -> quiz_code)
            -> first();

        if(!empty($check)){

            $report = $check;

            $report -> total      = count($questions);
            $report -> wrong      = $wrong;
            $report -> correct    = $correct;
            $report -> score      = ($correct/count($questions) * 100)."%";
            $report -> report     = json_encode($user_report);
            $report -> user_id    = Auth::user()->id;
            $report -> quiz_code  = $request -> quiz_code;
            $report -> attempt  = $check -> attempt + 1;
            $report -> save();

        }else{

            $report = new Quiz_report();

            $report -> total      = count($questions);
            $report -> wrong      = $wrong;
            $report -> correct    = $correct;
            $report -> score      = ($correct/count($questions) * 100)."%";
            $report -> report     = json_encode($user_report);
            $report -> user_id    = Auth::user()->id;
            $report -> quiz_code  = $request -> quiz_code;
            $report -> attempt  = 1;
            $report -> save();
        }



        return redirect() -> to(route("showQuizScore",['quiz_code' => $request -> quiz_code]));

    }

    public function showQuizScore(Request $request, $quiz_code)
    {

        $report = Quiz_report::where("user_id",Auth::user()->id)
                -> where("quiz_code",$quiz_code)
                -> first();

        if(!empty($report)){

            $data['report'] = $report;

            return view("user.quiz.score",$data);

        }else{

            return redirect()
                -> to(route("showAllUserQuiz"))
                -> with("message", "You have no report on the selected quiz")
                -> with("type","danger");

        }

    }

    public function reviewQuiz($quiz_code)
    {
        $report =  Quiz_report::where("user_id",Auth::user()->id)
                     -> where("quiz_code",$quiz_code)
                     -> first();

        if(!empty($report)){

            $data['report'] = json_decode($report->report);
            $data['result'] = $report;
            $data['quiz']   = Quiz::where("quiz_code",$quiz_code) -> first();

            return view("user.quiz.review",$data);

        }else{

            return redirect()
                -> to(route("showAllUserQuiz"))
                -> with("message", "You have no report on the selected quiz")
                -> with("type","danger");

        }


    }




}
