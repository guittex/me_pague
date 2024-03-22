<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pessoa;
use Illuminate\Validation\Rule;

class PessoasController extends Controller
{
    public function index()
    {
        $pessoas = Pessoa::all();
       
        return view('pessoas/index',[
            'pessoas' => $pessoas
        ]);

        return view('pessoas.index');
    }

    public function add(Request $request)
    {
        if($request->method() == 'POST'){
            $request->validate([
                'cpf' => ['required', 'unique:pessoas', 'max:255'],
                'email' => ['nullable', 'unique:pessoas', 'max:255'],
            ],[
                'cpf.unique' => 'Este CPF já existe',
                'email.unique' => 'Este e-mail já existe'
            ]);

            $pessoa = new Pessoa;
            
            $pessoa->nome     = $request->nome;
            $pessoa->email    = $request->email;
            $pessoa->cpf      = $request->cpf;
            $pessoa->celular  = $request->celular;
            $pessoa->status   = 'ativo';
            
            $pessoa->save();

            return redirect('/pessoas')->with('msg', 'Pessoa adicionada com sucesso');
        }

        return view('pessoas/add', [

        ]);
    }

    /**
     * Método que edita a pessoa
     *
     * @param Pessoa|int $id
     * @param Request $request
     * @return void
     */
    public function edit(int $id, Request $request)
    {
        $pessoa = Pessoa::findOrFail($id);

        if($request->method() == "POST") {
            $request->validate([
                'cpf' => ['required', 'unique:pessoas,cpf,' . $pessoa->id , 'max:255'],
                'email' => ['nullable', 'unique:pessoas,email,' . $pessoa->id],
            ],[
                'cpf.unique' => 'Este CPF já existe',
                'email.unique' => 'Este e-mail já existe'
            ]);

            $pessoa->nome     = $request->nome;
            $pessoa->email    = $request->email;
            $pessoa->cpf      = $request->cpf;
            $pessoa->celular  = $request->celular;
            $pessoa->status   = 'ativo';
            
            $pessoa->save();

            return redirect('/pessoas')->with('msg', 'Pessoa editado com sucesso');
        }


        return view('pessoas/edit', [
            'pessoa' => $pessoa,
        ]);
    }
}
