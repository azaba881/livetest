<?php

use App\Livewire\Counter;
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
 
Route::get('/', function () {  
    return view('welcome');
}); 
  
Route::get('/projet-1', function () {  return view('projet-1'); });
Route::get('/projet-2', function () {  return view('projet-2'); }); 
Route::get('/projet-3', function () {  return view('projet-3'); });
Route::get('/projet-4', function () {  return view('projet-4'); });

Route::get('/counter',Counter::class); 

