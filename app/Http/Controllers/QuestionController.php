<?php

namespace App\Http\Controllers;

use App\Models\Curso;
use App\Models\Question;
use Illuminate\Http\Request;

class QuestionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $preguntas = Question::all();
        $cursos = Curso::all();
        return view('question.index')->with('cursos', $cursos)->with('preguntas', $preguntas);
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
            'curso'      => 'required',
            'pregunta'      => 'required',
            'opcion_uno'    => 'required',
            'opcion_dos'    => 'required',
            'opcion_tres'   => 'required',
            'opcion_cuatro' => 'required',
            'respuesta'     => 'required',
         ]);

           $opciones = json_encode([$data['opcion_uno'], $data['opcion_dos'], $data['opcion_tres'], $data['opcion_cuatro'] ]);

         Question::create([
             'curso_id'     => $data['curso'],
             'pregunta'     => $data['pregunta'],
             'opciones'     => $opciones,
             'respuesta'    => $data['respuesta'],
         ]);


         return redirect()->action([QuestionController::class, 'index'])->with('mensaje','Se guardado con exito');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Question  $question
     * @return \Illuminate\Http\Response
     */
    public function show(Question $question)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Question  $question
     * @return \Illuminate\Http\Response
     */
    public function edit(Question $question)
    {
        // dd($question);
        return response()->json($question);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Question  $question
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Question $question)
    {

    //   return  $request;
    //   return  response()->json('hola mundo');

        $data = $request->validate([
            'curso'      => 'required',
            'pregunta'      => 'required',
            'opcion_uno'    => 'required',
            'opcion_dos'    => 'required',
            'opcion_tres'   => 'required',
            'opcion_cuatro' => 'required',
            'respuesta'     => 'required',
         ]);

           $opciones = json_encode([$data['opcion_uno'], $data['opcion_dos'], $data['opcion_tres'], $data['opcion_cuatro'] ]);



         $question->curso_id = $data['curso'];
         $question->pregunta = $data['pregunta'];
         $question->opciones = $opciones;
         $question->respuesta = $data['respuesta'];

         $question->save();

         return response()->json('correcto');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Question  $question
     * @return \Illuminate\Http\Response
     */
    public function destroy(Question $question)
    {
        $question->delete();
        return redirect()->action([QuestionController::class, 'index'])->with('mensaje','Se elimino con exito');
    }
}
