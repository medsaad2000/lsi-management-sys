<?php

use App\Http\Controllers\NiveauController;
use App\Http\Controllers\EmploiUploadController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('dashboard');
});


Route::resource('niveau', 'NiveauController');

Route::resource('etudiant', 'EtudiantController');

Route::resource('module', 'ModuleController');

Route::resource('Professeur', 'ProfesseurController');

Route::resource('examen', 'ExamenController');

Route::resource('pfe', 'PFEController');

Route::resource('emploi', 'EmploiUploadController');

Route::resource('salle', 'SalleController');

