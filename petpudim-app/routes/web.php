<?php

use App\Http\Controllers\PetsController;
use App\Http\Controllers\WelcomeController;
use App\Http\Controllers\API\UserControllerUser;
use App\Models\User;
use Illuminate\Support\Facades\Route;

Route::get('/hello', [WelcomeController::class, 'index']);

Route::resource('pets', PetsController::class);
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
Route::middleware(['auth'])->group(function(){

Route::get('/pets', [PetsController::class, 'index'])->name('pets.index');

Route::post('/pets', [PetsController::class, 'store']);

Route::get('/pets/adicionar', [PetsController::class, 'create'])->name('pets.adicionar');

Route::Post('/pets/adicionar', [PetsController::class, 'createPet'])->name('pets.createPet');

//Route::get('/pets/editar/{id}', [PetsController::class, 'update']);

Route::get('/pets/{id}', [PetsController::class, 'show'])->name('pets.show');

Route::get('/pets/{id}/editar', [PetsController::class, 'editPets'])->name('pets.editar');
Route::put('/pets/{id}/editar', [PetsController::class, 'update'])->name('pets.update');

Route::get('/pets/{id}', [PetsController::class, 'show']);

Route::get('/usuario/{id}', [UserControllerUser::class, 'show'])->name('usuario.users');

Route::get('/pets/delete/{id}', [PetsController::class, 'delete'])->name('pets.delete');
// Route::get('/usuario/usuarios', [UserControllerUser::class, 'showAllUsers'])->name('usuario.usuarios');

//Limite de Usuário
Route::get('/usuario', [UserControllerUser::class, 'showUser'])->name('usuario.showUser');//Perfil Usuário

Route::get('/usuario/{id}/editUser', [UserControllerUser::class, 'editUser'])->name('usuario.editUser'); //Retorna a view para editar o Usuário
Route::put('/usuario/{id}/editUser', [UserControllerUser::class, 'update'])->name('usuario.update');//Edita o usuário

});

//Registro de Usuário

Route::get('/usuario/registerUser', [UserControllerUser::class, 'create'])->name('usuario.create');//Chama view de registro
Route::post('/usuario/registerUser', [UserControllerUser::class, 'registerUser'])->name('usuario.register'); // Registra o usuário


// Route::get('/editprofile', [UserControllerUser::class, 'editUser'])->name('usuario.editUser');

require __DIR__.'/auth.php';
