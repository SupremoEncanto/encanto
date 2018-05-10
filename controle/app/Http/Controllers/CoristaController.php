<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Corista;
use App\Pessoa;
use App\Naipe;
use DB;

class CoristaController extends Controller
{
    public function index ()
    {

      $coristas = Corista::with('pessoas', 'naipes')->get();

      $cadastrados = Corista::pluck('pessoa_id');

      $naipes = Naipe::pluck('naipe', 'id');

      //$pessoas = Pessoa::where('id', '!=', Corista::where('pessoa_id', '>', 0))->get();
      $pessoas = Pessoa::whereNotIn('id', $cadastrados)->get();


      //$pessoas = Pessoa::where('id', $id)->where('id', '!=', Corista::pessoa_id())->get();
//       $usersLocation = DB::table(' users' )->where('location', $location)->where('id', '!=', 
//       Auth::id())-> whereNotIn('id', $currentUsers)->get();

//       $pessoas = Pessoa::with('coristas')->whereDoesntHave('id', function($q){
// $q->where('pessoa_id', '=', $coristas);
//       });
      //dd($pessoas);
  //     User::whereDoesntHave('granteeReports',  function($q){
  //       $q->where('year', '=',  2017 );
  //  })->get();

      return view('corista.index', compact('coristas', 'pessoas', 'naipes'));
    }

    public function show (Corista $corista)
    {
      return view('corista.show', compact('corista'));
    }

    public function create ()
    {

      $naipes = Naipe::all()->toArray();
      $naipe_associativo = [];
      foreach($naipes as $indice => $naipe)
      {

        $naipe_associativo[$naipe['id']] = $naipe['naipe']; 

      }

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
