<?php

use App\Livewire\About;
use App\Livewire\Contact;
use App\Livewire\Home;
use Illuminate\Support\Facades\Route;

Route::get('/', Home::class);
Route::get('/contact', Contact::class);
Route::get('/about', About::class);
