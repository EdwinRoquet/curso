<?php

namespace App\Http\Controllers;

use App\Models\Exam;
use Illuminate\Http\Request;

class ExamController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $exams = Exam::all();
        return view('exam.index', compact('exams'));
    }


    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Exam  $exam
     * @return \Illuminate\Http\Response
     */
    public function show(Exam $exam)
    {
        return view('exam.show', compact('exam'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Exam  $exam
     * @return \Illuminate\Http\Response
     */
    public function apiexam(Exam $exam)
    {

         return $exam->curso->preguntas;

        // return response()->json($exam->curso->preguntas);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Exam  $exam
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Exam $exam)
    {
        $data = $request->validate([
            'total'          => 'required',
            'pre_acertadas'  => 'required',
            'incorrectas'    => 'required',
            'calificacion'   => 'required',
            'activa'         => 'required',
         ]);


        $exam->total = $data['total'];
        $exam->pre_acertadas = $data['pre_acertadas'];
        $exam->incorrectas = $data['incorrectas'];
        $exam->calificacion = $data['calificacion'];
        $exam->activa = $data['activa'];

        $exam->save();

        return response()->json('correcto');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Exam  $exam
     * @return \Illuminate\Http\Response
     */
    public function destroy(Exam $exam)
    {
        //
    }

    public function estado(Request $request, Exam $exam)
    {
        // dd($request);
        // Leer nuevo exam y asignarlo
        $exam->activa = $request->estado;
        //Guardarlo en la DB
        $exam->save();
       return response()->json(['respuesta' => 'correcto']);
    }

}
