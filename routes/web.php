<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});


Route::get('/ninjas', function () {

    $ninjas=[
        ["name"=>"Naruto" , "skills"=> 85, "id"=> "1"],
        ["name"=>"Minato" , "skills"=> 87, "id"=> "2"],
    ];



    return view('ninjas.index', ["grettings"=>"hello" , "ninjas"=>$ninjas]);
});



Route::get('/ninjas/create', function () {
    return view('ninjas.create');
});



Route::get('/ninjas/{id}', function ($id) {
    return view('ninjas.show', ["id"=>$id]);
});

