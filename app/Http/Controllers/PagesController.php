<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function home()
    {
        $tasks = [
            'Go to the store',
            'Go to the pharmacy',
            'Go to worrk'
        ];

        return view('welcome', [ 
            'tasks' => $tasks,
            'foo' => 'First' 
        ]);
    }

    public function about()
    {
        return view('about');
    }

    public function contact()
    {
        return view('contact');
    }
}
