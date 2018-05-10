<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Corista;
use App\Pessoa;
use App\Naipe;

class CoristaController extends Controller
{
    public function index ()
    {

      $coristas = Corista::with('pessoas', 'naipes')->get();

      //$naipes = Naipe::all();

      $naipes = Naipe::pluck('naipe', 'id');

      $pessoas = Pessoa::pluck('name', 'id')->where('id', '<>', ['coristas', 'pessoa_id']);

      return view('corista.index', compact('coristas', 'pessoas', 'naipes'));
    }

    public function show (Corista $corista)
    {
      return view('corista.show', compact('corista'));
    }

    public function create ()
    {
      //$naipes = Naipe::pluck('id', 'naipe');
      $naipes = Naipe::all()->toArray();
      $naipe_associativo = [];
      foreach($naipes as $indice => $naipe)
      {
        $naipe_associativo[$naipe['id']] = $naipe['naipe']; 
      }
      //dd($naipes);

      return view('corista.create', compact('naipes'));

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
