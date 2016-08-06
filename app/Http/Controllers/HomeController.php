<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use Illuminate\Http\Request;
use App\Proyecto;

class HomeController extends Controller
{

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('home');
    }


    public function verProyectos()
    {
    	$proyectos = Proyecto::all();
    	return view('proyectos.index', compact('proyectos'));
    }

    public function contacto()
    {
        return view('contacto.index');
    }
}
