<?php

use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\EmployeController;
use App\Http\Controllers\Admin\ProductController;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', [Controller::class, 'index'])->name('homePage');

// admin
// autentification
Route::middleware(['auth', 'isAdmin'])->group(function () {
    Route::prefix('cp-admin')->group(function (){
        Route::get('/', [AdminController::class, 'index'])->name('cp-admin');

        // employés
        Route::get('/liste-des-emplyés', [EmployeController::class, 'employes'])->name('list-employes');
        Route::get('/ajout-employé', [EmployeController::class, 'add_employe'])->name('ajout-employe');
        Route::post('/store-employé', [EmployeController::class, 'store'])->name('store-employe');
        Route::get('/employé/{id}', [EmployeController::class, 'show'])->name('show-employe');
        Route::get('/modifier-un-employé/{id}', [EmployeController::class, 'edit'])->name('edit-employe');
        Route::post('/update-employé/{id}', [EmployeController::class, 'update'])->name('update-employe');
        Route::post('/delete-employé/{id}', [EmployeController::class, 'destroy'])->name('delete-employe');
        // Catégory
        Route::resource('categories', CategoryController::class);
        // produits
        Route::resource('produits', ProductController::class);


    });
});







Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
