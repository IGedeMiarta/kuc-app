<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StarterController extends Controller
{
    public function blank(){
        return view('pages.blank',['title'=>'title']);
    }
}
