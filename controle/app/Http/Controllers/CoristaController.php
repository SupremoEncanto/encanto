<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Corista;
use App\Pessoa;

class CoristaController extends Controller
{
    public function index ()
    {

      $coristas = Corista::with('pessoas', 'naipes')->get();

      return view('corista.index', compact('coristas'));
    }

    public function show (Corista $corista)
    //public function show ($nome)
    {
      //$pessoa = Pessoa::where('name', $nome)->get();

      //$pessoa = Pessoa::first();
      
      //$corista = Corista::where('pessoa_id', $pessoa->id)->get();

      return view('corista.show', compact('corista'));
    }

    public function create ()
    {
      return view('corista.create');
    }

    public function store (CVoristaRequest $requisicao)
    {
      Corista::create($requisicao->all());

      return redirect('coristas');
    }

    public function edit ($id)
    {
      $corista = Corista::findOrFail($id);
    
      return view('corista.edit', compact('corista'));
    }

    public function update ($id, CoristaRequest $requisicao)
      {
        $corista = Corista::findOrFail($id);

        $corista->update($requisicao->all());
      
        return redirect('coristas');
      }      

}
