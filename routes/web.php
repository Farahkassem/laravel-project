<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\MainController;

Route :: get('/about',[MainController::class,'about']);
Route :: get('/contact',[MainController::class,'contact']);
Route :: get('/',[MainController::class,'index']);
Route :: get('/post',[MainController::class,'post']);