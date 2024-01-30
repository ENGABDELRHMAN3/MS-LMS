<?php

namespace App\Http\Controllers\Teatcher;
use App\Http\Controllers\Controller;


class TutorialController extends Controller
{
   public function index() {
        return view('teacher.index');
        
    }

  public  function add() {
        return view('teacher.tutorial.add');

        
    }
}
