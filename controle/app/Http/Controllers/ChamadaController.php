<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ChamadaController extends Controller
{
    public function index ()
    {

      $coristas = Corista::with('pessoas', 'naipes', 'chamadas')->get();

      return view('chamada.index', compact('coristas'));
    }
}
