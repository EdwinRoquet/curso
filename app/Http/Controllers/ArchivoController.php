<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Curso;
use App\Models\Archivo;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use App\Models\Exam;
use SimpleSoftwareIO\QrCode\Facades\QrCode;

class ArchivoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $usuarios = User::all();
        $cursos = Curso::all();

        return view('activacion.index')->with('usuarios', $usuarios)->with('cursos', $cursos);

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
    //   dd($request);
    $data = $request->validate([
        'uuid'    => 'required',
        'usuario' => 'required',
        'curso'   => 'required',
        // 'diploma' => 'required',
        // 'dc3' => 'required',
        // 'qr' => 'required',
    ]);

    $nombreImgaen = $data['uuid'].'.png';

    QrCode::format('png')->generate('Make me into a QrCode!', 'storage/qrcodes/'.$nombreImgaen);

    Archivo::create([
        'uuid'    =>  $data['uuid'],
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

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Archivo  $archivo
     * @return \Illuminate\Http\Response
     */
    public function show(Archivo $archivo)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Archivo  $archivo
     * @return \Illuminate\Http\Response
     */
    public function edit(Archivo $archivo)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Archivo  $archivo
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {

        $data = $request->validate([
            'temario' => 'required',
            'diploma' => 'required',
            'constancia' => 'required',
            'idArchivo' => 'required',
        ]);

        if ($request->file('temario')) {
            $archivo = $request->file('temario');
            $temario = time() . "tem." . $request->file('temario')->extension();
            $ubicacion = public_path('/storage/temario');
            $archivo->move($ubicacion , $temario);
        }
        if ($request->file('diploma')) {
            $archivo = $request->file('diploma');
            $diploma = time() . "dip." . $request->file('diploma')->extension();
            $ubicacion = public_path('/storage/diploma');
            $archivo->move($ubicacion , $diploma);
        }
        if ($request->file('constancia')) {
            $archivo = $request->file('constancia');
            $constancia = time() . "con." . $request->file('constancia')->extension();
            $ubicacion = public_path('/storage/constancia');
            $archivo->move($ubicacion , $constancia);
        }
        $archivo = Archivo::findOrFail($data['idArchivo']);

        $archivo->ruta_temario = $temario;
        $archivo->ruta_diploma = $diploma;
        $archivo->ruta_dc3     = $constancia;

        $archivo->save();

        return redirect()->back()->with('mensaje','Se actualizado con exito');

    }

    public function estado(Request $request, Archivo $archivo)
    {
        // dd($request);
        // Leer nuevo estado y asignarlo
        $archivo->activa = $request->estado;
        //Guardarlo en la DB
        $archivo->save();
       return response()->json(['respuesta' => 'correcto']);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Archivo  $archivo
     * @return \Illuminate\Http\Response
     */
    public function destroy(Archivo $archivo)
    {

        $imagenTemario = $archivo->ruta_temario;
        if(File::exists('storage/temario/' . $imagenTemario)) {
            // Elimina imagen del servidor
            File::delete('storage/temario/' . $imagenTemario);
        }
        $imagenDiploma = $archivo->ruta_diploma;
        if(File::exists('storage/diploma/' . $imagenDiploma )) {
            // Elimina imagen del servidor
            File::delete('storage/diploma/' . $imagenDiploma );
        }
        $imagenConstancia = $archivo->ruta_dc3;
        if(File::exists('storage/constancia/' . $imagenConstancia )) {
            // Elimina imagen del servidor
            File::delete('storage/constancia/' . $imagenConstancia );
        }


        $archivo->delete();
        return redirect()->back()->with('mensaje','Se eliminado con exito');
    }
}
