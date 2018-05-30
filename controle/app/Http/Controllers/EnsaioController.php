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
        
        
        $sql = 'SELECT pessoa.*, corista.id corista_id '
             . 'FROM pessoas pessoa ' 
             . 'INNER JOIN coristas corista ON pessoa.id = corista.pessoa_id '
             . 'WHERE corista.id NOT IN ( '
             . 'SELECT chamada.corista_id '
             . 'FROM  chamadas chamada '
             . 'INNER JOIN ensaios ensaio ON ensaio.id = chamada.ensaio_id '
             . 'WHERE ensaio.id = :id '
             . ')';
        // $adicionaveis = Pessoa::with('coristas', 'coristas.chamadas', 'coristas.chamadas.ensaios')
        //     ->join('coristas', 'pessoas.id', '=', 'coristas.pessoa_id')
        //     ->select('pessoas.*')
        //     ->whereNotIn('pessoas.id', $pessoas)
        //     ->get();
        $adicionaveis = DB::select($sql, ['id' => $id]);
        //dd($adicionaveis);
          // ->join('coristas', 'pessoas.id', '=', 'coristas.pessoa_id')
          // ->select('pessoas.*')
          // ->whereNotIn()
          // ->get();

        //$adicionaveis = $pessoas->id;
        // $coristas_adicionaveis = Pessoa::with('coristas')
        // ->join('coristas', 'pessoas.id', '=', 'coristas.pessoa_id')
        // ->select('pessoas.name', 'coristas.id')
        // ->whereNotIn('pessoas.id', $pessoas)->get();
        //$coristas_adicionaveis = Pessoa::whereNotIn('id', $adicionaveis)->get();
        //dd($pessoas);
        //dd($coristas_adicionaveis);
        //dd($adicionaveis);

        return view('ensaio.show', compact('ensaio', 'coristas', 'adicionaveis', 'pessoas', 'naipes'));

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
