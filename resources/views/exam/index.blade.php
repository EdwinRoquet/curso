@extends('layouts.admin')


@section('content')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
           <h1> Modulo Examen</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Inicio</a></li>
              <li class="breadcrumb-item active">Administrador de Examen</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">

      <!-- Default box -->
      <div class="card">

        <div class="card-body">



          <table  id="table"class="table table-bordered table-striped dt-responsive tablas" width="100%">
                <thead>
                  <tr>
                    <th style="width: 10px">#</th>
                    <th>examso</th>
                    <th>Nombre Usuario</th>
                    <th>Calificación</th>
                    <th>Correctas</th>
                    <th>Incorrectas</th>
                    <th>Estado</th>
                    <th>Acción</th>
                  </tr>
                </thead>
                <tbody class="modulopre">
                        @foreach( $exams as $key =>  $exam )
                        <tr>
                        <td>{{$key + 1}}</td>
                            <td>{{$exam->curso->nombre}}</td>
                            <td>{{$exam->usuario->name}}</td>
                            <td>
                                {{$exam->calificacion  == 0 ? ' No hay datos aun': $exam->calificacion  }}
                            </td>
                            <td>
                                {{$exam->pre_acertadas == 0 ? ' No hay datos aun': $exam->pre_acertadas   }}
                            </td>
                            <td>{{$exam->incorrectas  == 0 ? ' No hay datos aun': $exam->incorrectas }}</td>
                            <td>{{$exam->activa == 1 ? 'Examen Realizado' : 'Aun no ha hecho el examen' }}</td>
                            <td>

                                <button  class=" bnt-estadoExam text-white btn  @if($exam->activa == 1) btn-success @else btn-danger @endif" id="bnt-estadoExam" idExam="{{$exam->id}}" estado="{{$exam->activa}}" type="button" > @if($exam->activa == 1) Activo @else Desactivado @endif </button>
                            </td>
                        </tr>
                        @endforeach

                </tbody>
              </table>


        </div>
        <!-- /.card-body -->
      </div>
      <!-- /.card -->
    </section>
    <!-- /.content -->
  </div>










@endsection

