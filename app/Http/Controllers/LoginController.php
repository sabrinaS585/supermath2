<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class LoginController extends Controller
{
    public function auth(Request $request){

        // $credenciais = $request->validate([
        //     'email' => ['required', 'email'],
        //     'password' => ['required'],
        // ]);

        $user = User::where('email', $request->input('email'))->first();

        if(!$user){
            return redirect()->route('login.login')->with('erro', 'Email ou senha incorretos.');
        }
        
        if(!password_verify($request->input('password'), $user->password)){
            return redirect()->route('login.login')->with('erro', 'Email ou senha incorretos.');

        }

        session()->put("id_usuario", $user->id);
        session()->put("nome_usuario", $user->name);


        return redirect()->route('home');

    }

    public function sair(){
        session()->put("id_usuario", null);
        return redirect()->route('inicio');

    }

    public function cadastro(Request $request){
        $user = new User();
        $user->email = $request->email;
        $user->name = $request->name;
        //$user->password = $request->password;
        $user->password = Hash::make($request->password);
        $user->save();

        return redirect()->intended('login');
    }

    public function removerUsuario(){
        $user = User::find(session('id_usuario'));
        $user->delete();

        session()->put('id_usuario', null);
        session()->put('nome_usuario', null);

        return redirect()->route('inicio');
    }

    public function atualizar(Request $request) {
        $user = User::find(session('id_usuario'));

        $input = [
            'name' => $request->name,
            'password' => Hash::make($request->password),
        ];

        $user->fill($input);
        $user->save();

        session()->put('nome_usuario', $user->name);
        return redirect()->route('home');
    }
}
