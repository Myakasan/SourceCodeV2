<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;




class quizcontroller extends Controller
{
    public function quizInit() {
        $badge = "";


        return view('index', compact('badge'));

    }
/*    i=1
while i<6
quizJson('q'+i)
    i++*/
    public function quizJson()
    {
        $quizJson = file_get_contents(__DIR__ . "/data.json");
        $quizData = json_decode($quizJson);
        $quizRep = $_POST;


        $echec = 0;
        $win = 0;

       if (isset($badge1)) {


       }

       else {
           $badge = "";

       }

        $q1 = 0;
        $q2 = 0;
        $q3 = 0;
        $q4 = 0;
        $q5 = 0;

        for ($i = 1; $i <= 5; $i++) {

            $code = "code".$i;

            if ($quizRep["q".$i] == $quizData->rep->$code) {
                $q1 = 1;
                $badge = <<<EOD
<span class="badge badge-pill badge-success">o</span>
EOD;


            } elseif ($quizRep["q1"] !== $quizData->rep->code1 and $quizRep["q1"] == $quizData->rep->code2 || $quizRep["q1"] == $quizData->rep->code3 || $quizRep["q1"] == $quizData->rep->code4 || $quizRep["q1"] == $quizData->rep->code5) {
                $badge = <<<EOD
<span class="badge badge-pill badge-warning">o</span>
EOD;


            } else {
                $badge = <<<EOD
<span class="badge badge-pill badge-danger">o</span>
EOD;


            }



        }
        return view('index', compact('badge'));
    }
}
