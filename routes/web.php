<?php

use App\Http\Controllers\PrimerControlador;
use Illuminate\Support\Facades\Route; // Importamos la clase Route para definir rutas

// RUTA PRINCIPAL (Inicio)
Route::get('/', function () {
    return view('welcome'); // Muestra la vista welcome.blade.php
});

// RUTA CONTACTO
Route::get('/contact', function () {
    return view('contact', ['name' => 'Mariana']); // Pasa un nombre a la vista contact.blade.php
})->name('contact');

// RUTA CONTACTO 2
Route::get('/contact2', function () {
    return view('contact2'); // Muestra la vista contact2.blade.php
})->name('contact2');


//RUTA CONTROLADOR

Route::get ('test', [PrimerControlador::class, 'index']);
Route::get ('otro/{post}/{otro?}', [PrimerControlador::class, 'otro']); //recibe parametro

// Route::post ('test', [PrimerControlador::class, 'index']);
// Route::get ('test2', [App\Http\Controllers\SegundoControlador::class, 'index']);
//  Route::resource('post', PrimerControlador::class);





// OPCIONES DE REDIRECCIÓN (comentadas como ejemplo)
/*
Opciones de redirección en Laravel:
1. Redirección directa con código de estado (ej. 303):
   return redirect('/contact2', 303);

2. Redirección usando el nombre de la ruta:
   return redirect()->route('contact2');

3. Redirección usando helper to_route (Laravel 9+):
   return to_route('contact2');
*/

// Códigos de estado HTTP (resumen)
/*
100–199: Informativas  
200–299: Respuestas exitosas  
300–399: Redirecciones  
400–499: Errores del cliente  
500–599: Errores del servidor  
*/

// RUTA COMENTADA DE PRUEBA
/*
Route::get('/test', function () {
    return "Welcome";
});
*/

/*
// RUTA TEST CON VISTA
Route::get('/test', function () {
    return view('test');
});
*/

/*
// RUTA CRUD
Route::get('/crud', function () {
    $age = 20;
    $data = ['name' => 'Mariana', 'age' => $age];
    return view('crud/index', $data);
})->name('crud-route'); // Asigna un nombre a la ruta
*/
