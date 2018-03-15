<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\TipoPlato;
use App\Semana;


class MosaicoController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }


    public function index()
    { 
      $platos  = TipoPlato::orderBy('name', 'ASC')->get();
      $semana  = Semana::first();
      return view('admin.mosaico.index', compact('platos','semana'));  
    }
}
