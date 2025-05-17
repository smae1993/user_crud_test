<?php

use App\Livewire\CreateUser;
use App\Livewire\EditUser;
use App\Livewire\UserManager;
use Illuminate\Support\Facades\Route;

// Route::view('/', 'welcome');

Route::get('/', UserManager::class);
Route::get('/createUser', CreateUser::class)->name('createUser');
Route::get('/editUser/{id}', EditUser::class)->name('editUser');



require __DIR__.'/auth.php';
