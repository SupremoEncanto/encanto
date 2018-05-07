<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\PessoaRequest;

use App\Pessoa;
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
        $pessoa = Pessoa::with('coristas', 'coristas.naipes')->where('id', $id)->first();

        $naipes = Naipe::with('coristas', 'coristas.pessoas')
            ->join('coristas', 'naipes.id', '=', 'coristas.naipe_id')
            ->join('pessoas', 'pessoas.id', '=', 'coristas.pessoa_id')
            ->select('naipes.*')
            ->where('pessoas.id', $id)
            ->get();

        return view('pessoa.show', compact('pessoa', 'naipes'));
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

    public function update ($id, PessoaRequest $requisicao) 
    {
        $pessoa = Pessoa::findOrFail($id);

        $pessoa->update($requisicao->all());

        return redirect('pessoas');
    }
}
