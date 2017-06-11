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

use Illuminate\Support\Facades\Mail;

Route::get('/', function () {
//    return view('welcome');

    $data = [


        'title'=>'hi how are you?',
        'content'=> 'fine'
    ];

    mail::send('emails.test', $data, function ($message){

        $message->to('mkhsojib@gmail.com', 'mkhsojib')->subject('how are you sojib?');


    });

});
