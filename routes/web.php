<?php

use Illuminate\Support\Facades\Route;

//Tipos de peticiones

//GET - Leer un registro
//POST - Envío de información
//PUT - Crear un registro
//PATCH - Actualizar un registro
//DELETE - Eliminar un registro

Route::get('/', function () {
    return "<h1>Bienvenido a mi aplicación de Laravel</h1>";
});

Route::get("/posts", function () {
    return "<h2>Aquí se mostrarán los posts</h2>";
});

Route::get("/posts/create", function () {
    return "<h2>Aquí se mostrará un formulario para crear un post create</h2>";
});

Route::get("/posts/{post}", function ($post) {
    return "<h2>Este es el post {$post}</h2>";
});