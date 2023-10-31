<?php

namespace App\Http\Controllers;

use App\Models\Service;
use Illuminate\Http\Request;

class HomeController extends Controller
{
     /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Service::select('services.*')
            ->join('category_service', 'services.service_id', '=', 'category_service.service_id')
            ->where('category_service.category_id', '4')
            ->get() ;
        
        return view('home.index', compact($data, 'data'));
    }
}
