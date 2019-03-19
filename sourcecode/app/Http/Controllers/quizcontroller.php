<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class quizcontroller extends Controller
{
    public function quizJson() {
        $quizJson = file_get_contents(__DIR__."/data.json");
        $quizData = json_decode($quizJson);
        $test = $_POST;

        foreach ($test as $tests){
            echo $tests,"<br>";
        }
    }
}
