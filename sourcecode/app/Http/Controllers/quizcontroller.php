<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Arr;




class quizcontroller extends Controller
{
    public function quizInit() {



        return view('index');

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




        for ($i = 1; $i <= 5; $i++) {

            $code = "code".$i;

            if ($quizRep["q".$i] == $quizData->rep->$code) {

                $array = ['q'.$i => '1'];
                $validate[] = $array;


            } elseif ($quizRep["q1"] !== $quizData->rep->code1 and $quizRep["q1"] == $quizData->rep->code2 || $quizRep["q1"] == $quizData->rep->code3 || $quizRep["q1"] == $quizData->rep->code4 || $quizRep["q1"] == $quizData->rep->code5) {

                $array = ['q'.$i => '2'];
                $validate[] = $array;


            } else {

                $array = ['q'.$i => '3'];
                $validate[] = $array;

            }



        }
        $validateJson = json_encode($validate);
        $file = __DIR__ ."datajsonvalidate.json";


        file_put_contents($file, $validateJson);

        return view('index');


    }
}
