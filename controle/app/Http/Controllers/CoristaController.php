<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Corista;
use App\Pessoa;
//use catalogo\Http\Requests\AreaRequest;

class CoristaController extends Controller
{
    public function index ()
    {

      $coristas = Corista::with('pessoas')->get();

      return view('corista.index', compact('coristas'));
    }

    public function show (Corista $corista)
    {
      //$corista = Corista::where('id', $id)->firstOrFail();

      return view('coristas.show', compact('corista'));
    }

    public function create ()
    {
      return view('corista.create');
    }

    public function store (CVoristaRequest $requisicao)
    {
      Corista::create($requisicao->all());

      return redirect('cosristas');
    }

    public function edit ($id)
    {
      $corista = Corista::findOrFail($id);
    
      return view('coristas.edit', compact('corista'));
    }

    public function update ($id, CoristaRequest $requisicao)
      {
        $corista = Corista::findOrFail($id);

        $corista->update($requisicao->all());
      
        return redirect('coristas');
      }      

}
