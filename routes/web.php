<?php

use Illuminate\Support\Facades\Route; // route clase para manejar las rutas

//rutas 
Route::get('/', function () {
});

// Route::get('/test', function (){
// return "Welcome";
// });

Route::get('/test', function (){
    return  view( 'test' ); 
    });

    // Route::get('/crud', function (){
    //     return  view( 'crud/index' ); 
    //     });


Route::get('/crud', function (){
    $age=20;

    $data =['name' => 'Mariana', 'age' => $age];

         return view( 'crud/index', $data ); 
 })-> name('crud-route'); //nombre de la ruta

 


