<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DesempenhoController extends Controller
{
    public function showAdicao()
    {
        // Mostra a view com os dados da sessão
        return view('desempenho_adicao');
    }

    public function resetAdicao(Request $request)
    {
        // Reseta os dados da sessão para adição
        session([
            'score_adicao' => 0,
            'correct_adicao' => 0,
            'incorrect_adicao' => 0,
        ]);

        return redirect()->route('desempenho.adicao')->with('success', 'Pontuações restauradas!');
    }
}

