<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Ensaio;
use App\Chamada;

class ChamadaController extends Controller
{
    public function index ()
    {

      $ensaios = Ensaio::with('chamadas')->get();

      return view('chamada.index', compact('ensaios'));
    }

    public function store (ChamadaRequest $requisicao)
    {

      $req = [$requisicao->ensaios->id, $requisicao->pessoas->id, $requisicao->pessoas->coristas->id];
      dd($req);
      Chamada::create($req);

      // $data = Input::all();
      // $data['date'] = date('Y-m-d', strtotime($data['date']));

      return redirect('ensaios');
    }
}
