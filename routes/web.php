<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\TodoController;

Route::get('/', function () {
    return view('todo');
});

Route::get('/addtodo', [TodoControlller::class, 'create']);

