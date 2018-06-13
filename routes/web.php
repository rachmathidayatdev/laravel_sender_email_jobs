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

//pake jobs
Route::get('/jobs-send-queue-email', function(){
    $post = [
        'email' => 'rachmathidayat.dev@gmail.com'
    ];

    $ch = curl_init('http://localhost:8100/jobs-send-queue-email');
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_POSTFIELDS, $post);
    $response = curl_exec($ch);
    curl_close($ch);

    return response()->json($response);
});
//sampai sini
