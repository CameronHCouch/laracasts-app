<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    $tasks = [
        'Go to the store',
        'Go to the pharmacy',
        'Go to worrk'
    ];

    return view('welcome', [ 
        'tasks' => $tasks,
        'foo' => 'First' 
    ]);
});

// ^ equally acceptable:  return view('welcome')->withTasks($tasks)->withFoo('First ')
// OR
// return view('welcome')->with([
//   'foo' => 'bar',
//   'tasks' => ['some task']
// ])

Route::get('/contact', function() {
    return view('contact');
});

Route::get('/about', function() {
    return view('about');
});