<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class homeController extends Controller
{
    public function home(){
        $pageTital="Home";
        $data=compact('pageTital');
        return view('index')->with($data);
    }
}
