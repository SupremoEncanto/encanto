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
    {

      return view('corista.show', compact('corista'));
    }

    public function create ($id)
    {
      $pessoa = Pessoa::findOrFail($id);

      return view('corista.create', compact('pessoa'));
    }

    public function store (CoristaRequest $requisicao)
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
