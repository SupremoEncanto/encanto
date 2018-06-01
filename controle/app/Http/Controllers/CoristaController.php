<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\CoristaRequest;
use App\Corista;
use App\Pessoa;
use App\Naipe;
use DB;
use Illuminate\Support\Facades\Input;

class CoristaController extends Controller
{
    public function index ()
    {

      $coristas = Corista::with('pessoas', 'naipes')->get();

      $cadastrados = Corista::pluck('pessoa_id');

      $voz = Naipe::pluck('naipe', 'id');

      $pessoas = Pessoa::whereNotIn('id', $cadastrados)->get();

      return view('corista.index', compact('coristas', 'pessoas', 'voz'));
    }

    public function show (Corista $corista)
    {
      return view('corista.show', compact('corista'));
    }

    // public function create ()
    // {

    //   $naipes = Naipe::all()->toArray();
    //   $naipe_associativo = [];
    //   foreach($naipes as $indice => $naipe)
    //   {

    //     $naipe_associativo[$naipe['id']] = $naipe['naipe']; 

    //   }

    //   return view('corista.create', compact('naipes'));

    // }

    public function store (CoristaRequest $requisicao)
    {
      
      Corista::create($requisicao->all());
      
      $data = Input::all();
      
      $data['joined_at'] = date('Y-m-d', strtotime($data['joined_at']));

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
