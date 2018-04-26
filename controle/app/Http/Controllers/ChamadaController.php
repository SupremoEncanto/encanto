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
}
