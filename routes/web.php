<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return "Welcome to the homepage";
});

Route::get('/posts', function() {
    return "Aquí se mostrarán todos los posts";
});

Route::get('/posts/create', function() {
    return "Aquí se mostrará un formulario para crear un post";
});

Route::get('/posts/{post}', function($post){
    return "Este es el post {$post}";
});


// Route::get('/posts/{post}/{category}', function($post, $category){
//     return "Este es el post {$post} de la categoría {$category}";
// });

//Get
//Post
//Put
//Patch
//Delete