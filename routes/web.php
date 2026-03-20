<?php


use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\StudentController;

Route::controller(UserController::class)->group(function(){
    Route::get('/' , 'showUsers')->name('home');

    Route::get('/user/{id}',  'singleUser')->name('view.user');

    Route::post('/add', 'insertUser')->name('add.user');

    Route::get('/updatepage/{id}','updatePage')->name('update.page');
    Route::post('/update/{id}', 'updateUser')->name('update.user');

    Route::get('/delete/{id}' , 'deleteUser')->name('delete.user');
});



Route::view('newuser' , 'addUser');

Route::get('/students' , [StudentController::class , 'showStudents']);