<?php

use Illuminate\Http\Request;
Route::get('/', function () {
    return view('welcome');
});

Route::get('/home', function (){
    return view('submit');
});


Route::middleware('auth')->get('/submit', function() {
    return view('submit');
});

Auth::routes();

Route::get('/', function() {
    $links = \App\Link::all();

    return view('welcome', [
        'links' => $links
    ]);
});

Route::post('/submit', function (Request $request){
    $data = $request->validate([
        'title' => 'required|max:255',
        'url' => 'required|url|max:255',
        'description' => 'required|max:255'
    ]);

    $link = new \App\Link($data);
    $link->save();
    return redirect('/');
});
