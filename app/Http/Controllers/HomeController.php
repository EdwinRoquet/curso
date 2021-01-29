<?php

namespace App\Http\Controllers;

use App\Models\Archivo;
use App\Models\Curso;
use App\Models\User;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $cursos = Curso::all()->count();
        $usuarios = User::all()->count();
        $archivos = Archivo::all()->count();

        return view('home')->with('cursos', $cursos)->with('usuarios', $usuarios)->with('archivos', $archivos);
    }
}
