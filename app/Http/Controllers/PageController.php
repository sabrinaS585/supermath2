<?php

namespace App\Http\Controllers;

use App\Models\Resolucao;
use Illuminate\Http\Request;
use Psy\Readline\Hoa\Console;

class PageController extends Controller
{
    /**fazer para todas as paginas */
    public function home()
        {
            return view('home');
        }

        public function inicio()
        {
            return view('login.inicio');
        }
        
        public function secondary()
        {
            return view('secondary');
        }

        public function salvarResolucao($type){
            $resolucao = new Resolucao();
            $input = [
                'pontuacao' => (session('score_'.$type)==0) ? 0:session('score_'.$type),
                'tipo' => $type,
                'acertou' => (session('correct_'.$type)==0) ? 0:session('correct_'.$type),
                'errou' => (session('incorrect_'.$type)==0) ? 0:session('incorrect_'.$type),
                'usuario_id' => session('id_usuario')
            ];
            $resolucao->fill($input);
            $resolucao->save();

            session()->put('score_'.$type, 0);
            session()->put('correct_'.$type, 0);
            session()->put('incorrect_'.$type, 0);

            return view('operations.' . $type);

        }

        public function operation($type)
        {
            // Validar o tipo de operação
            $validOperations = ['adicao', 'subtracao', 'multiplicacao', 'divisao'];
    
            if (!in_array($type, $validOperations)) {
                abort(404); // Retorna uma página 404 se o tipo não for válido
            }
                
           
            
            // Retorna a view correspondente
            return view('operations.' . $type);
        }
        
        public function theory($operation)
        {
            $validOperations = ['addition', 'subtraction', 'multiplication', 'division'];
    
            if (!in_array($operation, $validOperations)) {
                abort(404); // Retorna erro 404 se a operação não for válida
            }
    
            return view("operations.theory.$operation");
        }
        
        public function index()
        {
            // Retorna a view para a página inicial
            return view('home');
        }

        public function exercisesAdicao()
        {
            // Gera uma questão de adição
            $num1 = rand(1, 10);
            $num2 = rand(1, 10);
            $correctAnswer = $num1 + $num2;
            $question = "{$num1} + {$num2}";
    
            // Gera opções de resposta
            $options = [$correctAnswer];
            while (count($options) < 4) {
                $randomOption = rand(1, 20);
                if (!in_array($randomOption, $options)) {
                    $options[] = $randomOption;
                }
            }
    
            shuffle($options); // Embaralha as opções
    
            return view('exercises.adicao', compact('question', 'correctAnswer', 'options'));
        }

        public function exercisesMultiplicacao(){
            $num1 = rand(1, 10);
            $num2 = rand(1, 10);
            $correctAnswer = $num1 * $num2;
            $question = "{$num1} * {$num2}";

            // Gera opções de resposta
            $options = [$correctAnswer];
            while (count($options) < 4) {
                $randomOption = rand(1, 20);
                if (!in_array($randomOption, $options)) {
                    $options[] = $randomOption;
                }
            }

            shuffle($options); // Embaralha as opções
    
            return view('exercises.multiplicacao', compact('question', 'correctAnswer', 'options'));

        }

        public function exercicios($type){
            $num1 = rand(1, 10);
            $num2 = rand(1, 10);
            if($type == 'multiplicacao'){
                $correctAnswer = $num1 * $num2;
                $question = "{$num1} * {$num2}";
            } else if($type == 'adicao'){
                $correctAnswer = $num1 + $num2;
                $question = "{$num1} + {$num2}";
            } else if($type == 'subtracao'){
                $correctAnswer = $num1 - $num2;
                $question = "{$num1} - {$num2}";
            } else if($type == 'divisao'){
                $correctAnswer = $num1 / $num2;
                $question = "{$num1} / {$num2}";
            }


            // Gera opções de resposta
            $options = [$correctAnswer];
            while (count($options) < 4) {
                $randomOption = rand(1, 20);
                if (!in_array($randomOption, $options)) {
                    $options[] = $randomOption;
                }
            }

            shuffle($options); // Embaralha as opções
    
            return view('exercises.'.$type, compact('question', 'correctAnswer', 'options'));

        }


        /*
        public function checkAnswerAdicao(Request $request)
        {
            dd($request);
            $userAnswer = $request->input('userAnswer');
            $correctAnswer = $request->input('correctAnswer');
    
            // Lógica para pontuação
            if ($userAnswer == $correctAnswer) {
                session()->increment('score_adicao', 10);
                session()->increment('correct_adicao');
            } else {
                if (session('score_addition', 0) > 0) {
                    session()->decrement('score_adicao', 10);
                }
                session()->increment('incorrect_adicao');
            }
    
            // Redireciona de volta para a página de exercícios
            return redirect()->route('exercicios', 'adicao');
        }*/

        public function checkAnswer(Request $request, $type)
        {
            $userAnswer = $request->input('userAnswer');
            $correctAnswer = $request->input('correctAnswer');
    
            // Lógica para pontuação
            if ($userAnswer == $correctAnswer) {
                session()->increment('score_'.$type, 10);
                session()->increment('correct_'.$type);
            } else {
                if (session('score_'.$type, 0) > 0) {
                    session()->decrement('score_'.$type, 10);
                }
                session()->increment('incorrect_'.$type);
            }
    
            // Redireciona de volta para a página de exercícios
            return redirect()->route('exercicios', $type);
        }


        public function calculator()
        {
            return view('calculadora');
        }
        
        public function performance($type)
        {

            if($type == 'multiplicacao'){
                $texto = 'Multiplicação';
            } else if($type == 'adicao'){
                $texto = 'Adição';
            } else if($type == 'subtracao'){
                $texto = 'Subtração';
            } else if($type == 'divisao'){
                $texto = 'Divisão';
            }


            $valores = [
                'acertos' => 0,
                'erros' => 0,
                'pontuacao' => 0,
                'tipo' => $type,
                'texto' => $texto
            ];
            // Lógica para carregar os dados do desempenho (opcional)
            $questoes = Resolucao::all()->where('usuario_id', session('id_usuario'))->where('tipo', $type);
            
                foreach ($questoes as $q) {
                    $valores['acertos'] += $q->acertou;
                    $valores['erros'] += $q->errou;
                    $valores['pontuacao'] += $q->pontuacao;
                }
            
            return view('performance', compact('valores')); 
        }

        public function resetarPerformance($type){
            $questoes = Resolucao::all()->where('usuario_id', session('id_usuario'))->where('tipo', $type);

            foreach($questoes as $q){
                $q->delete();
            }

            if($type == 'multiplicacao'){
                $texto = 'Multiplicação';
            } else if($type == 'adicao'){
                $texto = 'Adição';
            } else if($type == 'subtracao'){
                $texto = 'Subtração';
            } else if($type == 'divisao'){
                $texto = 'Divisão';
            }


            $valores = [
                'acertos' => 0,
                'erros' => 0,
                'pontuacao' => 0,
                'tipo' => $type,
                'texto' => $texto
            ];
            return view('performance', compact('valores')); 

        }

        public function desempenhoDireto($type){
            $resolucao = new Resolucao();
            $input = [
                'pontuacao' => (session('score_'.$type)==0) ? 0:session('score_'.$type),
                'tipo' => $type,
                'acertou' => (session('correct_'.$type)==0) ? 0:session('correct_'.$type),
                'errou' => (session('incorrect_'.$type)==0) ? 0:session('incorrect_'.$type),
                'usuario_id' => session('id_usuario')
            ];
            $resolucao->fill($input);
            $resolucao->save();

            session()->put('score_'.$type, 0);
            session()->put('correct_'.$type, 0);
            session()->put('incorrect_'.$type, 0);



            if($type == 'multiplicacao'){
                $texto = 'Multiplicação';
            } else if($type == 'adicao'){
                $texto = 'Adição';
            } else if($type == 'subtracao'){
                $texto = 'Subtração';
            } else if($type == 'divisao'){
                $texto = 'Divisão';
            }


            $valores = [
                'acertos' => 0,
                'erros' => 0,
                'pontuacao' => 0,
                'tipo' => $type,
                'texto' => $texto
            ];
            // Lógica para carregar os dados do desempenho (opcional)
            $questoes = Resolucao::all()->where('usuario_id', session('id_usuario'))->where('tipo', $type);
            
                foreach ($questoes as $q) {
                    $valores['acertos'] += $q->acertou;
                    $valores['erros'] += $q->errou;
                    $valores['pontuacao'] += $q->pontuacao;
                }
            
            return view('performance', compact('valores')); 

        }


        
    }

