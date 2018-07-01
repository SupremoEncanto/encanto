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

    public function __construct()
      {
          $this->middleware('auth');
      }
      
    public function index ()
    {

      $coristas = Corista::with('pessoas', 'naipes')->paginate(5);

      $cadastrados = Corista::pluck('pessoa_id');

      $voz = Naipe::pluck('naipe', 'id');

      $pessoas = Pessoa::whereNotIn('id', $cadastrados)->get();

      return view('corista.index', compact('coristas', 'pessoas', 'voz'));
    }

    public function show (Corista $corista)
    {
      return view('corista.show', compact('corista'));
    }

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
