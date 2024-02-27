<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class classesController extends Controller
{
    public function classes(){
        $pageTital="Classes";
        $data=compact('pageTital');
        return view('classes')->with($data);
    }
}
