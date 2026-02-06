<?php

use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });


Route::get('/', function(){
    return 'Hello from Laravel';
});

Route::get('about', function(){
    return 'About Us Page';
});




Route::prefix('details')-> group(function(){
    Route::get('students', function(){
    return 'Students Details Page';     
})->name('students-details');

    Route::get('teachers', function(){
        return 'Teachers Details Page';     
    })->name('teachers-details');
});


Route::get('student/{id}/{reg}', function($id, $reg){
    return "Student ID: $id" . " and Registration Number: $reg";
});

// Creating a fall back route to handle undefined routes

Route::fallback(function(){
    return 'Page Not Found. Please check the URL and try again.';
});