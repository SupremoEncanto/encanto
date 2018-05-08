<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\PessoaRequest;

use App\Pessoa;
use App\Corista;
use App\Naipe;

class PessoaController extends Controller
{
    public function index ()
    {

      $pessoas = Pessoa::all();

      return view('pessoa.index', compact('pessoas'));
    }

    public function show ($id)
    {
        $pessoa = Pessoa::findOrFail($id);
        $corista = Corista::with('pessoas')->where('pessoa_id', $pessoa->id)->first();
        
        if($corista) 
        {
            $pessoa = Pessoa::with('coristas', 'coristas.naipes')->where('id', $id)->first();

            $corista = Corista::with('pessoas')->where('pessoa_id', $pessoa->id)->first();

            $naipes = Naipe::with('coristas', 'coristas.pessoas')
                ->join('coristas', 'naipes.id', '=', 'coristas.naipe_id')
                ->join('pessoas', 'pessoas.id', '=', 'coristas.pessoa_id')
                ->select('naipes.*')
                ->where('pessoas.id', $id)
                ->get();

            return view('pessoa.show', compact('pessoa', 'naipes', 'corista'));
        }

        else
        
        return view('pessoa.show', compact('pessoa', 'corista'));
    }

    public function create ()
    {
      return view('pessoa.create');
    }

    public function store (PessoaRequest $requisicao)
    {
      Pessoa::create($requisicao->all());

      return redirect('pessoas');
    }

    public function edit ($id)
    {
      $pessoa = Pessoa::findOrFail($id);
    
      return view('pessoa.edit', compact('pessoa'));
    }

    public function update ($id, PessoaRequest $requisicao) 
    {
        $pessoa = Pessoa::findOrFail($id);

        $pessoa->update($requisicao->all());

        return redirect('pessoas');
    }
}
