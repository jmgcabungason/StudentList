<?php

use App\Http\Controllers\StudentsController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/students', [StudentsController::class, 'index'])->name('students.index');
Route::get('/students/register', [StudentsController::class, 'register'])->name('students.register');
Route::post('/students', [StudentsController::class, 'registerStudent'])->name('students.registerStudent');
Route::get('/students/{student}/edit', [StudentsController::class, 'edit'])->name('students.edit');
Route::put('/students/{student}/update', [StudentsController::class, 'update'])->name('students.update');
Route::delete('/students/{student}/delete', [StudentsController::class, 'delete'])->name('students.delete');