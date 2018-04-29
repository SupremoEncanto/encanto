<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Pessoa;

class PessoaController extends Controller
{
    public function index ()
    {

      $pessoas = Pessoa::all();

      return view('pessoa.index', compact('pessoas'));
    }

    public function show (Pessoa $pessoa)
    {

      return view('pessoa.show', compact('pessoa'));
    }
}
