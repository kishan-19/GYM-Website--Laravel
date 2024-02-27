<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class aboutController extends Controller
{
    public function about(){
        $pageTital="About Us";
        $data=compact('pageTital');
       return view('about')->with($data);
    }
}
