<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class quizcontroller extends Controller
{
    public function quizInit() {
        $badgeWin1 = "";


        return view('index', compact('badgeWin1'));

    }

    public function quizJson() {
        $quizJson = file_get_contents(__DIR__."/data.json");
        $quizData = json_decode($quizJson);
        $quizRep = $_POST;

        $echec = 0;
        $win = 0;

        $q1 = 0;
        $q2 = 0;
        $q3 = 0;
        $q4 = 0;
        $q5 = 0;

        if ($quizRep["q1"] == $quizData->rep->code1) {
            $q1 = 1;
            $badgeWin1 = <<<EOD
<span class="badge badge-pill badge-success">o</span>
EOD;


            return view('index', compact('badgeWin1'));

        }
        else  {
            echo "merde";
        }


        /*foreach ($quizRep as $quizReps){
            echo "<br>",$quizReps,"<br>";
        }*/
    }
}
