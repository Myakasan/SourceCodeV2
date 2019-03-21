<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Arr;




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
        $validate = [];

       if (isset($badge1)) {


       }

       else {
           $badge = "";

       }



        for ($i = 1; $i <= 5; $i++) {

            $code = "code".$i;

            if ($quizRep["q".$i] == $quizData->rep->$code) {
                $q1 = 1;
                $badge = <<<EOD
<span class="badge badge-pill badge-success">o</span>
EOD;
                $validate = Arr::add(['q'.$i => 'Valid', 'state' => null], 'state', 1);


            } elseif ($quizRep["q1"] !== $quizData->rep->code1 and $quizRep["q1"] == $quizData->rep->code2 || $quizRep["q1"] == $quizData->rep->code3 || $quizRep["q1"] == $quizData->rep->code4 || $quizRep["q1"] == $quizData->rep->code5) {

                $validate = Arr::add(['q'.$i => 'Valid', 'state' => null], 'state', 2);


            } else {

                $validate = Arr::add(['q'.$i => 'Valid', 'state' => null], 'state', 3);

            }



        }
        return view('index');
    }
}
