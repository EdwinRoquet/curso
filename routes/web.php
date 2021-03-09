<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ExamController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\CursoController;
use App\Http\Controllers\InicioController;
use App\Http\Controllers\ArchivoController;
use App\Http\Controllers\MiCursoController;
use App\Http\Controllers\QuestionController;

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

// Route::get('/', function () {
//     return view('inicio');
// });
Route::get('/', [InicioController::class, 'index'])->name('inicio');





Auth::routes();

Route::get('/home', [HomeController::class, 'index'])->name('home');
Route::get('/constancia/user/{archivo}', [MiCursoController::class, 'show'] )->name('micurso.show');


Route::group(['middleware' => ['auth']], function () {

//Rutas para usuarios del sistema
Route::get('/usuario', [UserController::class, 'index'])->name('usuario.index');
Route::post('/usuario', [UserController::class, 'store'])->name('usuario.store');
Route::delete('/usuario/{user}',[UserController::class, 'destroy'])->name('usuario.destroy');
//Rutas para registrar cursos
Route::get('/cursos', [CursoController::class, 'index'])->name('cursos.index');
Route::get('/cursos/create', [CursoController::class, 'create'])->name('cursos.create');
Route::get('/cursos/{curso}', [CursoController::class, 'show'])->name('cursos.show');
Route::post('/cursos', [CursoController::class, 'store'])->name('cursos.store');
Route::get('/cursos/{curso}/edit', [CursoController::class, 'edit'])->name('cursos.edit');
Route::put('/cursos/{curso}', [CursoController::class, 'update'])->name('cursos.update');
Route::delete('/cursos/{curso}', [CursoController::class, 'destroy'])->name('cursos.destroy');

Route::get('/activacion', [ArchivoController::class, 'index'])->name('activacion.index');
Route::get('/activacion/{archivo}', [ArchivoController::class, 'show'])->name('activacion.show');
//Ruta para cambiar estado
Route::post('/activacion/create', [ArchivoController::class, 'store'])->name('activacion.store');
Route::get('/activacion/{archivo}/edit', [ArchivoController::class, 'edit'])->name('activacion.edit');
Route::put('/activacion/update', [ArchivoController::class, 'update'])->name('activacion.update');
Route::delete('/activacion/{archivo}', [ArchivoController::class, 'destroy'])->name('activacion.destroy');
Route::post('/activacion/{archivo}', [ArchivoController::class,'estado'])->name('activacion.estado');


//Ruta para cursos de un solo usuario
Route::get('/usuario/{user}/edit', [UserController::class, 'edit'])->name('usuario.edit');
//Ruta para cursos de un solo usuario
Route::get('/curso/exam/{curso}', [CursoController::class, 'curso'])->name('exam.usuario');

//Ruta para que los usarios puedan ver sus constancias
Route::get('/mi-curso', [MiCursoController::class, 'index'])->name('mi-curso.index');


//Modulo de Preguntas
Route::get('/question', [QuestionController::class, 'index'])->name('question.index');
Route::get('/question/create', [QuestionController::class, 'create'])->name('question.create');
Route::get('/question/{question}', [QuestionController::class, 'show'])->name('question.show');
Route::post('/question', [QuestionController::class, 'store'])->name('question.store');
Route::get('/question/edit/{question}', [QuestionController::class, 'edit'])->name('question.edit');
Route::put('/question/put/{question}', [QuestionController::class, 'update'])->name('question.update');
Route::delete('/question/{question}', [QuestionController::class, 'destroy'])->name('question.destroy');

//Modulo de Examen
Route::get('/exam', [ExamController::class, 'index'])->name('exam.index');
Route::post('/exam', [ExamController::class, 'store'])->name('exam.store');
Route::post('/exam/estado/{exam}', [ExamController::class,'estado'])->name('exam.estado');
Route::get('/exam/{exam}', [ExamController::class, 'show'])->name('exam.show');
Route::get('/api/exam/{exam}', [ExamController::class,'apiexam'])->name('api.show');
Route::put('/exam/put/{exam}', [ExamController::class, 'update'])->name('exam.update');

});
