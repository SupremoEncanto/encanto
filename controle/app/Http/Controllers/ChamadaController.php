<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Ensaio;
use App\Chamada;
use App\Http\Requests\ChamadaRequest;

class ChamadaController extends Controller
{
    public function index ()
    {

      $ensaios = Ensaio::with('chamadas')->get();

      return view('chamada.index', compact('ensaios'));
    }

    public function store (ChamadaRequest $requisicao)
    {

      Chamada::create($requisicao->all());
      
      $id = $requisicao->ensaio_id;

      return redirect()->action(
        'EnsaioController@show', ['id' => $id]
      );
    }

    public function destroy($id, $ensaio_id)
    {

        $chamada = Chamada::find($id);
        $chamada->delete();

        // return redirect()->action(
        //   'EnsaioController@show', ['id' => $ensaio_id]
        // );

        return redirect('ensaios');
    }
}
