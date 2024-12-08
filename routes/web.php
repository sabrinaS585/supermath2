<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\AdicaoController;
use App\Http\Controllers\DesempenhoController;
use App\Http\Controllers\LoginController;

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
//     return view('welcome');
// });
Route::get('/sair', [LoginController::class, 'sair'])->name('sair');
Route::get('/remover-usuario', [LoginController::class, 'removerUsuario'])->name('removerUsuario');
Route::get('/home', [PageController::class, 'home'])->name('home');
Route::get('/', [PageController::class, 'inicio'])->name('inicio');
Route::get('/secondary', [PageController::class, 'secondary'])->name('secondary');
Route::get('/register', [PageController::class, 'register'])->name('register');
Route::get('/login', [PageController::class, 'login'])->name('login');

Route::get('/calculator', [PageController::class, 'calculator'])->name('calculator');

Route::get('/operations/{type}/theory', [PageController::class, 'theory'])->name('theory');
//Route::get('/operations/{type}/exercises', [PageController::class, 'exercises'])->name('exercises');


/////////////////////MOALLYSSON/////////////////////////////////
// ROTA PARA O MENU DA OPERAÇÃO DESEJADA
//Route::get('/operations/{type}', [PageController::class, 'operation'])->name('operation');
Route::get('/operation/{type}', [PageController::class, 'operation'])->name('operation');


Route::get('/operations/{type}/', [PageController::class, 'salvarResolucao'])->name('salvarResolucao');


//PERFORMANCE////////////////////////////MOALLYSSON//////////////
Route::get('/operations/{type}/performance', [PageController::class, 'performance'])->name('performance');
Route::post('/desempenho/{type}/resetar', [PageController::class, 'resetarPerformance'])->name('resetar');

Route::get('/desempenho/{type}/performance', [PageController::class, 'desempenhoDireto'])->name('desempenhoDireto');

////////////////MOALLYSSON/////////////////////////////////////////////////////////////
// ROTA PARA PÁGINA DE EXERCICIOS
Route::get('/exercicios/{type}', [PageController::class, 'exercicios'])->name('exercicios');

//Route::get('/exercicios/multiplicacao', [PageController::class, 'exercisesMultiplicacao'])->name('exercicios.multiplicacao');




////////////////MOALLYSSON/////////////////////////////////////////////////////////////////
//LOGIN
Route::view('/login', 'login.login')->name('login.login');

Route::post('/auth', [LoginController::class, 'auth'])->name('login.auth');

Route::view('/cadastro', 'login.cadastro')->name('login.cadastrar');
Route::post('/cadastro/completo', [LoginController::class, 'cadastro'])->name('login.cadastro');

Route::view('/atualizar-usuario', 'login.atualizar')->name('login.atualizar');
Route::post('/atualizar-usuario/completo', [LoginController::class, 'atualizar'])->name('login.atualizarCompleto');


//////////////////////////////////////////////////


// Operação: Multiplicação
Route::get('/operations/multiplication/theory', [PageController::class, 'theory'])->name('theory');
//Route::get('/operations/multiplication/exercises', [PageController::class, 'exercises'])->name('exercises');
//Route::get('/operations/multiplication/performance', [PageController::class, 'performance'])->name('performance');

// Calculadora
Route::get('/calculator', [PageController::class, 'calculator'])->name('calculator');



// Operação: Divisão
Route::get('/operations/division/theory', [PageController::class, 'theory'])->name('theory');
//Route::get('/operations/division/exercises', [PageController::class, 'exercises'])->name('exercises');
//Route::get('/operations/division/performance', [PageController::class, 'performance'])->name('performance');

// Calculadora
Route::get('/calculator', [PageController::class, 'calculator'])->name('calculator');

// Página Secundária
Route::get('/secondary', [PageController::class, 'secondary'])->name('secondary');

// Página Inicial
//Route::get('/', [PageController::class, 'home'])->name('home');

Route::get('/operations/addition', [PageController::class, 'showAdditionTheory'])->name('operation');

Route::get('/theory/{operation}', [PageController::class, 'theory'])->name('theory');

Route::get('/subtraction', function () {
    return view('subtraction');
})->name('operation', 'subtraction');


//TESTE PARA SALVAR DESEMPENHO NO BANCO
//Essa rota manda para
Route::get('/operation/{operation}', [PageController::class, 'theory'])->name('operation');
/////////////////////////////////////////////////////////////

// Route::get('/telasecundaria', [SeuController::class, 'metodo'])->name('telasecundaria');
// Route::get('/teoriadivisao', [SeuController::class, 'teoriaDivisao'])->name('teoriadivisao');
// Route::get('/jogodiv', [SeuController::class, 'jogoDiv'])->name('jogodiv');
// Route::get('/calculadora', [SeuController::class, 'calculadora'])->name('calculadora');
// Route::get('/desempenhodiv', [SeuController::class, 'desempenhoDiv'])->name('desempenhodiv');
Route::get('/home', [PageController::class, 'index'])->name('home');




// Rota para exibir os exercícios (deve chamar o método exercises())
//Route::get('/exercicios', [PageController::class, 'exercises'])->name('exercicios.index');


// Rota para processar a resposta do exercício de adição
//Route::post('/exercicio/adicao', [PageController::class, 'checkAnswerAdicao']);

Route::post('/exercicios/{type}', [PageController::class, 'checkAnswer'])->name('conferirResposta');
////////////////////////////////////////////////////////////////////////////

Route::get('/calculadora', function () {
    return view('calculadora');
});

Route::get('/calculadora', [PageController::class, 'calculator'])->name('calculadora');







