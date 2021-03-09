<?php

namespace App\Http\Controllers;

use App\Models\Exam;
use App\Models\User;
use App\Models\Curso;
use App\Models\Archivo;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use SimpleSoftwareIO\QrCode\Facades\QrCode;

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
    public function store(Request $request)
    {

      dd($request);
    $data = $request->validate([
        'uuid'    => 'required',
        'usuario' => 'required',
        'curso'   => 'required',
        // 'diploma' => 'required',
        // 'dc3' => 'required',
        // 'qr' => 'required',
    ]);
    $user = User::findOrFail($data['usuario']);
    //  return $user;
    $nombreImgaen = $user->slug.'.png';
    $slug = $user->slug;
     return $slug;
    QrCode::format('png')->size(200)->generate("http://127.0.0.1:8000/constancia/user/$slug", 'storage/qrcodes/'.$nombreImgaen);
        $valorAleatorio = uniqid();




    $folio = Str::of('caseipa')->slug("-")->limit(255 - mb_strlen($valorAleatorio) - 1, "")->trim("-")->append("-", $valorAleatorio);

    Archivo::create([
        'folio'    =>  $folio,
        'uuid'    =>  $data['uuid'],
        'slug'    =>  $slug,
        'user_id' =>  $data['usuario'],
        'curso_id'   =>  $data['curso'],
        'ruta_qr' => $nombreImgaen,
    ]);
    Exam::create([
        'user_id' =>  $data['usuario'],
        'curso_id'   =>  $data['curso'],
    ]);



    return redirect()->action([ArchivoController::class, 'index'])->with('mensaje', 'Se guarado con exito');

    }
}
