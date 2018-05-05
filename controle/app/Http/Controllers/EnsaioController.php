<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Ensaio;
use App\Chamada;
use App\Corista;
use App\Pessoa;
use DB;
use App\Http\Requests\EnsaioRequest;
use Illuminate\Support\Facades\Input;

class EnsaioController extends Controller
{
    public function index ()
    {

      $ensaios = Ensaio::with('chamadas')->latest()->get();

      return view('ensaio.index', compact('ensaios'));
    }

    public function show($id) 
    {

        $ensaio = Ensaio::where('id', $id)->with('chamadas')->firstOrFail();

        $pessoas = Pessoa::with('coristas', 'coristas.naipes', 'coristas.chamadas', 'coristas.chamadas.ensaios')
            ->join('coristas', 'pessoas.id', '=', 'coristas.pessoa_id')
            ->join('chamadas', 'coristas.id', '=', 'chamadas.corista_id')
            ->join('naipes', 'coristas.naipe_id', '=', 'naipes.id')
            ->join('ensaios', 'chamadas.ensaio_id', '=', 'ensaios.id')
            ->select('pessoas.*', 'naipes.naipe')
            ->where('ensaios.id', $id)
            ->get();

        return view('ensaio.show', compact('ensaio', 'coristas', 'pessoas', 'naipes'));

    }

    public function create ()
    {
      return view('ensaio.create');
    }

    public function store (EnsaioRequest $requisicao)
    {
      Ensaio::create($requisicao->all());

      $data = Input::all();
      $data['date'] = date('Y-m-d', strtotime($data['date']));

      return redirect('ensaios');
    }

    public function edit ($id)
    {
      $ensaio = Ensaio::findOrFail($id);
    
      return view('ensaio.edit', compact('ensaio'));
    }

    public function update ($id, EnsaioRequest $requisicao)
      {
        $ensaio = Ensaio::findOrFail($id);

        $data = Input::all();
        $data['date'] = date('Y-m-d', strtotime($data['date']));

        $ensaio->update($requisicao->all());

        return redirect('ensaios');
      }

      public function destroy($id)
    {
        // delete
        $ensaio = Ensaio::find($id);
        $ensaio->delete();

        // redirect
        //Session::flash('message', 'Ensaio deletado com sucesso!');
        return redirect('ensaios');
    }
}
