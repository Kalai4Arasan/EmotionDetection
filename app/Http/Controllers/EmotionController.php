<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Emotions;

class EmotionController extends Controller
{
    public function index()
    {
        $data=Emotions::orderBy('id','desc')->limit(1)->get();
        return view('welcome')->with('data',$data);
    }
}
