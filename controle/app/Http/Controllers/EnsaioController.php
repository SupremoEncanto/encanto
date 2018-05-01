<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Ensaio;
use App\Chamada;
use App\Corista;
use App\Pessoa;
use DB;

class EnsaioController extends Controller
{
    public function index ()
    {

      $ensaios = Ensaio::with('chamadas')->get();

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
}
