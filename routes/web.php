<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/tut', function () {
    return view('tuts.home');
});

Route::get('/tut/ninjas', function () {
    $ninjas = [
        ['name' => 'mario', 'skill' => 75, 'id' => '1'],
        ['name' => 'luigi', 'skill' => 45, 'id' => '2'],
    ];

    return view('tuts.ninjas.ninjas', ['greeting' => 'hello', 'ninjas'=> $ninjas]);
});

Route::get('/tut/ninjas/{id}', function ($id) {
    $newId = $id . '0';

    return view('tuts.ninjas.show', ['id' => $newId]);
});
