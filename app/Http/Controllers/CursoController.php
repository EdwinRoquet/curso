<?php

namespace App\Http\Controllers;

use App\Models\Curso;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Intervention\Image\Facades\Image;

class CursoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */


    public function index()
    {
        $cursos = Curso::all();
        return view('cursos.index', compact('cursos'));
    }

    public function create()
    {
        return view('cursos.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $data = $request->validate([
           'nombre'      => 'required',
        //    'temario'     => 'required',
           'imagen' => 'required|image',
           'descripcion' => 'required',
        ]);

          //obtener la ruta de la imagen
          $ruta_imagen = $request['imagen']->store('img-cursos', 'public');
          //Resize de la imagen
          $img = Image::make( public_path("storage/${ruta_imagen}"))->fit(1000,500);


          $img->save();

        Curso::create([
            'nombre'     => $data['nombre'],
            'temario'    => $request->input('temario'),
            'ruta_imagen'=> $ruta_imagen,
            'descripcion'=> $data['descripcion'],
        ]);


        return redirect()->action([CursoController::class, 'index'])->with('mensaje','Se guardado con exito');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Curso  $curso
     * @return \Illuminate\Http\Response
     */
    public function show(Curso $curso)
    {
     return view('cursos.show', compact('curso'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Curso  $curso
     * @return \Illuminate\Http\Response
     */
    public function edit(Curso $curso)
    {
        return view('cursos.edit', compact('curso'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Curso  $curso
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Curso $curso)
    {

        $data = $request->validate([
            'nombre'      => 'required',
            'temario'     => 'required',
            'descripcion' => 'required',
         ]);


         $curso->nombre = $data['nombre'];
         $curso->temario = $data['temario'];
         $curso->descripcion = $data['descripcion'];
         $imagen = request('imagen_actual');

         if(request('imagen')){

             // Elimina imagen del servidor
             File::delete('storage/' . $imagen);

            //obtener la ruta de la imagen
            $ruta_imagen = $request['imagen']->store('img-cursos', 'public');
            //Resize de la imagen
            $img = Image::make( public_path("storage/${ruta_imagen}"))->fit(1000,500);
            $img->save();
            //Asignar al objeto
            $curso->ruta_imagen = $ruta_imagen;
        }



         $curso->save();

         return redirect()->action([CursoController::class, 'index'])->with('mensaje','Se actualizado con exito');
    }
    public function curso(Curso $curso)
    {
    //  return view('exam.index', compact('curso'));
    }



    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Curso  $curso
     * @return \Illuminate\Http\Response
     */
    public function destroy(Curso $curso)
    {
        $imagen = $curso->ruta_imagen;
        if(File::exists('storage/' . $imagen)) {
            // Elimina imagen del servidor
            File::delete('storage/' . $imagen);
        }
        $curso->delete();
        return redirect()->action([CursoController::class, 'index'])->with('mensaje','Se eliminado con exito');
    }
}
