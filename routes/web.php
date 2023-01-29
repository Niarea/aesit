<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\FaculteController;
use App\Http\Controllers\FichierController;


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



Route::get('/', [UserController::class, 'Home']); 

Route::post('/create', [UserController::class, 'Create'])->name('saveUser'); 
Route::post('/login', [UserController::class, 'Login'])->name('connectUser');
Route::get('/logout', [UserController::class, 'logout'])->name('deconnectUser'); 

Route::get('/dashbord/members/show', [UserController::class, 'show'])->name('showProfil'); 


 Route::get('/profil/show', function () {
    return view('profil.show');
 });

Route::post('/update', [UserController::class, 'UpdateProfil'])->name('update-profil'); 


//Dashboard
Route::get('/dashboard/index', function () {
    return view('dashboard.index');
});

Route::get('/dashboard/members/show', function () {
    return view('dashboard.members.show');
});

Route::get('/dashboard/members/create', function () {
    return view('dashboard.members.create');
});

Route::get('/dashboard/cours/fsm/cours', function () {
    return view('dashboard.cours.fsm.cours');
});

Route::get('/dashboard/cours/enim/cours', function () {
    return view('dashboard.cours.enim.cours');
});

Route::get('/dashboard/cours/esprim/cours', function () {
    return view('dashboard.cours.esprim.cours');
});

Route::get('/dashboard/ds/fsm/devoirs', function () {
    return view('dashboard.ds.fsm.devoirs');
});

Route::get('/dashboard/ds/enim/devoirs', function () {
    return view('dashboard.ds.enim.devoirs');
});

Route::get('/dashboard/ds/esprim/devoirs', function () {
    return view('dashboard.ds.esprim.devoirs');
});

Route::get('/dashboard/td/fsm/td', function () {
    return view('dashboard.td.fsm.td');
});

Route::get('/dashboard/td/enim/td', function () {
    return view('dashboard.td.enim.td');
});

Route::get('/dashboard/td/esprim/td', function () {
    return view('dashboard.td.esprim.td');
});

Route::get('/dashboard/tp/fsm/tp', function () {
    return view('dashboard.tp.fsm.tp');
});

Route::get('/dashboard/tp/enim/tp', function () {
    return view('dashboard.tp.enim.tp');
});

Route::get('/dashboard/tp/esprim/tp', function () {
    return view('dashboard.tp.esprim.tp');
});

Route::get('/dashboard/examens/fsm/exam', function () {
    return view('dashboard.examens.fsm.exam');
});

Route::get('/dashboard/examens/enim/exam', function () {
    return view('dashboard.examens.enim.exam');
});

Route::get('/dashboard/examens/esprim/exam', function () {
    return view('dashboard.examens.esprim.exam');
});

//contact
Route::get('/contact', function () {
    return view('contact');
});

//fsm
Route::get('/fsm/licence1', function () {
    return view('fsm.licence1');
});

Route::get('/fsm/licence2', function () {
    return view('fsm.licence2');
});

Route::get('/fsm/licence3', function () {
    return view('fsm.licence3');
});

Route::get('/fsm/master1', function () {
    return view('fsm.master1');
});

Route::get('/fsm/master2', function () {
    return view('fsm.master2');
});


//enim
Route::get('/enim/ing1', function () {
    return view('enim.ing1');
});

Route::get('/enim/ing2', function () {
    return view('enim.ing2');
});

Route::get('/enim/master1', function () {
    return view('enim.master1');
});

Route::get('/enim/master2', function () {
    return view('enim.master2');
});


//esprim
Route::get('/esprim/prepa1', function () {
    return view('esprim.prepa1');
});

Route::get('/esprim/prepa2', function () {
    return view('esprim.prepa2');
});

Route::get('/esprim/ing1', function () {
    return view('esprim.ing1');
});

Route::get('/esprim/ing2', function () {
    return view('esprim.ing2');
});

Route::get('/esprim/ing3', function () {
    return view('esprim.ing3');
});

Route::get('/master/mrecherche', function () {
    return view('master.mrecherche');
});

Route::get('/master/mpro', function () {
    return view('master.mpro');
});


//Sujets
Route::get('/sujets/cours', function () {
    return view('sujets.cours');
});

Route::get('/sujets/td', function () {
    return view('sujets.td');
});

Route::get('/sujets/tp', function () {
    return view('sujets.tp');
});

Route::get('/sujets/ds', function () {
    return view('sujets.ds');
});

Route::get('/sujets/examen', function () {
    return view('sujets.examen');
});



Route::get('/login', function () {
    return view('login');
});


// Pour les fichiers
Route::get('/profil/show', [FichierController::class, 'index']);
Route::post('/profil/show', [FichierController::class, 'store'])->name('addFichier');