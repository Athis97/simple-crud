<?php

use App\Http\Controllers\StudentController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return redirect()->to(route('students.index'));
})->name('index');

Route::resource('students', StudentController::class);