<?php

use Illuminate\Support\Facades\Route;
use App\Models\Student;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\ProfileController;


Route::get('/', function () {
    return view('welcome');
});


Route::get('/dashboard', function () {

    $totalStudents = Student::count();
    $latestStudents = Student::latest()->take(5)->get();

    return view('dashboard', compact('totalStudents', 'latestStudents'));

})->middleware(['auth'])->name('dashboard');


// Profile routes (Breeze)
Route::middleware('auth')->group(function () {

    Route::get('/profile', [ProfileController::class, 'edit'])
        ->name('profile.edit');

});


// Admin only routes
Route::middleware(['auth', 'role:admin'])->group(function () {

    Route::get('/students', [StudentController::class, 'index']);

    Route::get('/students/create', [StudentController::class, 'create']);

    Route::post('/students', [StudentController::class, 'store']);

    Route::get('/students/{id}/edit', [StudentController::class, 'edit']);

    Route::put('/students/{id}', [StudentController::class, 'update']);

    Route::delete('/students/{id}', [StudentController::class, 'destroy']);

});


require __DIR__.'/auth.php';