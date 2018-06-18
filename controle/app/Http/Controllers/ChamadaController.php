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

    public function destroy(Request $request)
    {

        $chamada = Chamada::where('corista_id', $request->corista_id)
        ->where('ensaio_id', $request->ensaio_id);
        $chamada->delete();

        return redirect()->action(
          'EnsaioController@show', ['id' => $request->ensaio_id]
        );

        //return redirect('ensaios');
    }
}
