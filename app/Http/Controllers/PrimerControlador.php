<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PrimerControlador extends Controller
{
    function index() {
        $posts = ['post1', 'post2']; 
        // return view('contact', ['posts' => $posts]); 
        return view('contact', compact('posts')); 
    }
    function otro ($post=40, $otro=50){
        echo $post;
        echo $otro;
    }
}

//Migraciones en laravel, archivos existentes por defecto (algunos), 
//permiten definir un esquema o estrcutrua que se definiran en la base de datos 
//estrcutura para las columnas que se quieran crear 