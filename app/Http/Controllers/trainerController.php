<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class trainerController extends Controller
{
    public function trainer(){
        $pageTital="Trainers";
        $data=compact('pageTital');
        return view('trainers')->with($data);
    }
}
