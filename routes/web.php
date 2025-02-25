<?php

//Imports
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PostController;
use App\Models\Post;

//Rutas GET
Route::get('/', HomeController::class);
Route::get('/posts', [PostController::class, 'index']);
Route::get('/posts/create', [PostController::class, 'create']);
Route::get('/posts/{post}', [PostController::class, 'show']);

Route::get('/prueba', function() {
    
    //Crear un nuevo post
    /* $post = new Post;

    $post -> title = "TíTuLo DE prueBA 4";
    $post -> content = "Contenido de prueba 4";
    $post -> categoria = "Categoría de prueba 4";

    $post -> save();
    return $post; */
    $post = Post::find(4);
    return $post;

    /* $post = Post::where('title', 'Título de prueba 1')->first();

    $post->categoria = "Desarrollo Web";

    $post -> save();
    return $post; */

    /* $posts = Post::take(2)->get();
    return $posts; */

    /* $post = Post::find(3);
    $post->delete();
    return "Eliminado"; */
});