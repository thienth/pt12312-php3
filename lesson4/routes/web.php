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
use Illuminate\Http\Request;
Route::get('/', function () {

    return view('welcome', ['name' => 'thienth fpt', 'age' => 50]);
});


Route::view('register', 'register');


// use App\Http\Requests\RegisterRequest;
// Route::post('register', function(RegisterRequest $rq){
// 	$rq->tenfield
// 	$rq->input('tenfield')
// 	$rq->hasFile('tenfield')
// 	$rq->file('tenfield')
// 	$rq->only([])
// 	$rq->except([])
// 	$rq->all()
// 	dd($rq->all());
// });







