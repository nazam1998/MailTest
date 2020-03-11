<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/',function(){
    $to_name='Thomas';
    $to_email='nazam90-be@mail.com';
    $data=array('name'=>'Thomas','body'=>'Give me your money');
    Mail::send('mail',$data,function($message) use ($to_name,$to_email){
        $message->to($to_email)->subject('Mon Cobbaye');
    });
    return 'Hello World';
});
