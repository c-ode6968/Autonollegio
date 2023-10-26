<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PublicController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\AutoController;
use App\Http\Controllers\FaqController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\StaffController;
use App\Http\Controllers\ProfileController;
use App\Models\Admin;

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

Route::get('/viewcatalogo', [AutoController::class, 'index'])->name('catalogo');

//Aceso Publico
Route::get('/', [PublicController::class, 'home'])->name('home');
Route::get('/viewchisiamo', [PublicController::class, 'Chisiamo'])->name('chisiamo');
Route::get('/viewcontatti', [PublicController::class, 'Contatti'])->name('contatti');
Route::get('/viewfaq', [PublicController::class, 'faq'])->name('faq'); //accesso publico
Route::get('/detauto/{idAuto}', [PublicController::class,'showAuto'])->name('auto');
Route::post('/{auto}/prenotazione', [AutoController::class, 'prenotazioneAuto'])->middleware('can:isUser')->name('auto.prenota');

//Accesso User
Route::get('/viewcatalogo', [AutoController::class, 'index'])->name('catalogo');
Route::get('/cliente', [UserController::class, 'index'])->middleware('can:isUser')->name('cliente');
Route::get('/cliente/profilocliente', [UserController::class, 'viewprofilo'])->middleware('can:isUser')->name('cliente.profilocliente');
Route::get('/cliente/edit', [UserController::class, 'viewmodifprofilo'])->middleware('can:isUser')->name('cliente.edit');
Route::put('/cliente/update', [UserController::class, 'updateProfile'])->middleware('can:isUser')->name('cliente.update');

// Route::post('prenotazione/{idAuto}/aquista', [UserController::class ,'prenotaAuto'] )->middleware('can:isUser')->name('prenota');
// Route::get('prenotazione/{idAuto}/prenota/{id}', [UserController::class,'showPrenotazione'] )-> middleware('can:isUser')->name('vediprenotazione');

Route::post('/{auto}/prenotazione', [AutoController::class, 'prenotazioneAuto'])->middleware('can:isUser')->name('auto.prenota');


//Accesso Staff
Route::get('/staff', [StaffController::class, 'index'])->middleware('can:isStaff')->name('staff');

//Profilo Staff
Route::get('/staff/profilostaff', [StaffController::class, 'viewprofilo'])->middleware('can:isStaff')->name('profilostaff');

//CRUD auto dal membro dello Staff
Route::get('/staff/auto/listaauto', [AutoController::class, 'listaAuto'])->middleware('can:isStaff')->name('auto.listaauto');
Route::get('/staff/auto/create', [AutoController::class, 'create'])->middleware('can:isStaff')->name('auto.create');
Route::post('/staff/auto/store', [AutoController::class, 'store'])->middleware('can:isStaff')->name('auto.store');
Route::get('/staff/auto/{idAuto}', [AutoController::class, 'show'])->middleware('can:isStaff')->name('auto.show');
Route::delete('/staff/auto/{idAuto}/delete', [AutoController::class, 'delete'])->middleware('can:isStaff')->name('auto.delete');
Route::get('/staff/auto/{idAuto}/edit', [AutoController::class, 'edit'])->middleware('can:isStaff')->name('auto.edit');
Route::put('/staff/auto/{idAuto}/update', [AutoController::class, 'update'])->middleware('can:isStaff')->name('auto.update');

//Lista auto noleggiate
Route::get('/staff/autonoleggiato', [AutoController::class, 'elencoAuto'])->middleware('can:isStaff')->name('auto.autonoleggiato');



//Accesso Admin, ok

Route::get('/admin', [AdminController::class, 'index'])->middleware('can:isAdmin')->name('admin');
Route::get('/admin/profiloadmin', [AdminController::class, 'viewprofilo'])->middleware('can:isAdmin')->name('profiloadmin');

//Lista Clienti, ok
Route::get('/admin/listaclienti', [AdminController::class, 'listaClienti'])->middleware('can:isAdmin')->name('admin.clienti');
Route::delete('/admin/eliminacliente', [AdminController::class, 'eliminaCliente'])->name('admin.elimina');

//Filtro Auto noleggiate per ciascun mese , ok
Route::get('/admin/autonoleggiatopermese', [AdminController::class, 'statisticheAuto'])->middleware('can:isAdmin')->name('admin.filtroauto');

//Admin Faq
Route::get('/adminfaq/listafaq', [FaqController::class, 'listaFaq'])->middleware('can:isAdmin')->name('admin.listafaq');
Route::get('/adminfaq/creafaq', [FaqController::class, 'creaFaq'])->middleware('can:isAdmin')->name('admin.nuovafaq');
Route::post('/store', [FaqController::class, 'store'])->middleware('can:isAdmin')->name('faq.store');
Route::get('/adminfaq/{id}/modificafaq', [FaqController::class, 'modificaFaq'])->middleware('can:isAdmin')->name('faq.edit');
Route::put('/adminfaq/{id}', [FaqController::class, 'updateFaq'])->middleware('can:isAdmin')->name('faq.update');
Route::delete('/adminfaq/{id}', [FaqController::class, 'destroyFaq'])->middleware('can:isAdmin')->name('faq.delete');


//admin Staff, ok
Route::get('/adminstaff/listastaff' ,[AdminController::class, 'listastaff'])->middleware('can:isAdmin')->name('adminstaff.list');
Route::get('/adminstaff/crea', [AdminController::class, 'createstaff'])->middleware('can:isAdmin')->name('adminstaff.crea');
Route::post('/adminstaff/store', [AdminController::class, 'storestaff'])->middleware('can:isAdmin')->name('adminstaff.store');
Route::get('/adminstaff/{id}', [AdminController::class, 'modificastaff'])->middleware('can:isAdmin')->name('adminstaff.modifica');
Route::put('/adminstaff/{id}', [AdminController::class, 'updatestaff'])->middleware('can:isAdmin')->name('adminstaff.update');
Route::delete('/adminstaff/delete{id}', [AdminController::class, 'deletestaff'])->middleware('can:isAdmin')->name('adminstaff.delete');





//DOCUMENTAZIONE
Route::get('/Documentazione', [PublicController::class, 'docFiles'])->name('document');

require __DIR__.'/auth.php';

