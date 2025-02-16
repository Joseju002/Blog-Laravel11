<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index() {
        return "<h2>Aquí se mostrarán los posts</h2>";
    }

    public function create() {
        return "<h2>Aquí se mostrará un formulario para crear un post create</h2>";
    }

    public function show($post) {
        return "<h2>Este es el post {$post}</h2>";
    }
}
