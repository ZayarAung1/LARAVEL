<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class IntroController extends Controller
{ 
    public function show() 
    {
        $todos = [
            'learn Laravel',
            'learn Vue',
            'learn Inertia',
        ];

         $title = 'Hello Laravel';

        return view('showui', compact ('title', 'todos'));
    }   

    

    public function testfun() 
    {
        return view('test.testui');
    }
}
