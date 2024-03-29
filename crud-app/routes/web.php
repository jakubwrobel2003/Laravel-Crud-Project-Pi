<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PeopleController;
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
Route::get('/wrobel/313080/people/index',[PeopleController::class,'index'])->name('people.index');
Route::get('/wrobel/313080/people/create',[PeopleController::class,'create'])->name('people.create');
Route::post('/wrobel/313080/people/create',[PeopleController::class,'add'])->name('people.add');
Route::get('/wrobel/313080/people/{people}/edit',[PeopleController::class,'edit'])->name('people.edit');
Route::put('/wrobel/313080/people/{people}/update', [PeopleController::class, 'u'])->name('people.u');
Route::delete('/wrobel/313080/people/{people}/delete', [PeopleController::class, 'delete'])->name('people.delete');

Route::get('/wrobel/313080/people/showById', [PeopleController::class, 'showById'])->name('people.showById');