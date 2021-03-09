@extends('layouts.admin')

@section('content')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Inicio</a></li>
              <li class="breadcrumb-item active">Administrador Usuarios</li>
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
                  <h3 class="text-center">Mis Constancias</h3>

 <table  id="table"class="table examIniciar table-bordered table-striped dt-responsive tablas" width="100%">
            <thead>
              <tr>
                <th>Nombre Curso</th>
                <th>Temario</th>
                <th>Examen</th>
                <th>Diploma</th>
                <th>Constancia DC3</th>
                <th>Temario</th>
                <th>Acción</th>
              </tr>
            </thead>
            <tbody>


                        @foreach($archivos as $key => $cur)

                        <tr>
                            <td>
                                {{$cur->curso->nombre}}
                            </td>
                            <td>
                                {!!$cur->curso->temario!!}
                            </td>

                            <td >

                                @if($cur->curso->examen->activa  == 0)
                                <a href="{{ route('exam.show', ['exam'=>$cur->curso->examen->id ])}}" class="btn text-white btn-block bg-gradient-warning linkExamen"> Examen </a>


                                @else
                                 <h5>Los resultados de tu evaluación</h5>
                                     <ul style="width: 200px">
                                         <li>Tu calificación: {{$cur->curso->examen->calificacion}}</li>
                                         <li>Total de preguntas  : {{$cur->curso->examen->total}}</li>
                                         <li>Preguntas correctas  : {{$cur->curso->examen->pre_acertadas}}</li>
                                         <li>Preguntas incorrectas  : {{$cur->curso->examen->incorrectas}}</li>
                                     </ul>
                                @endif




                                 {{-- @if($cur->ruta_qr === ' ')
                                   <img class="img-fluid" src="storage/{{$cur->ruta_qr}}" alt="">

                                 @else
                                      No hay nada
                                 @endif --}}

                            </td>
                            <td>
                                 @if($cur->ruta_diploma)
                                 <a class="btn btn-success" href="{{asset('storage/diploma/'.$cur->ruta_diploma)}}">Descargar</a>
                                 @else
                                      No hay diploma
                                 @endif
                            </td>
                            <td>
                                 @if($cur->ruta_dc3)

                                 <a  class="btn btn-success" href="{{asset('storage/constancia/'.$cur->ruta_dc3)}}">Descargar</a>
                                 @else
                                 No hay  Constancia
                                 @endif

                            </td>
                            <td>
                                 @if($cur->ruta_temario)

                                 <a  class="btn btn-success" href="{{asset('storage/temario/'.$cur->ruta_temario)}}">Descargar</a>
                                 @else
                                 No hay  Temario
                                 @endif

                            </td>
                            <td>
                                <a class="btn btn-primary text-white" href="{{ route('micurso.show', ['archivo' => $cur->slug])  }}">Ver</a>
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
