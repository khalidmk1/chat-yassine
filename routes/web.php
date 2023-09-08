<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\MessagesController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/chat', function () {
    return view('chat');
})->name('chat');

Route::get('/detail/{id}', [ProfileController::class, 'profile_detail'])->middleware(['auth'])->name('profile.detail');
Route::get('/',[ProfileController::class, 'show'] )->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    /* Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy'); */
    Route::get('/chat/{id}' , [MessagesController::class , 'startConversation'])->name('chat.create');
    
});

require __DIR__.'/auth.php';
