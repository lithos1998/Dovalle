<?php

namespace App\Http\Controllers;

use App\Models\Service;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        // main services
        $idNames = ['ley_257', 'puesta_a_tierra', 'subdivision', 'avisos_obra', 'solicitud_planos', 'informe_dominio', 'fachadas', 'municipales', 'planos_evacuacion'];
        
        // select
        $data = Service::whereIn('id_name', $idNames)->get();
        
        return view('home.index', compact('data'));
    }
}
