@extends('layouts.admin')


@section('content')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
           <h1> Agregar Pregunta</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Inicio</a></li>
              <li class="breadcrumb-item active">Administrador de Preguntas</li>
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

          <!-- Button Agregar Modal Usuario-->
          <button type="button" class="btn btn-success mb-4" data-toggle="modal" data-target="#agregarQuestion">
              Agregar Pregunta
          </button>

          <!--Tabla Usuario-->


          <table  id="table"class="table table-bordered table-striped dt-responsive tablas" width="100%">
                <thead>
                  <tr>
                    <th style="width: 10px">#</th>
                    <th>Curso</th>
                    <th>Pregunta</th>
                    <th>Opciopnes</th>
                    <th>Respuesta</th>
                    <th>Acciones</th>
                  </tr>
                </thead>
                <tbody class="modulopre">
                        @foreach($preguntas as $key => $pregunta )
                        <tr>
                        <td>{{$key + 1}}</td>
                            <td>{{$pregunta->curso->nombre}}</td>
                            <td>{{$pregunta->pregunta}}</td>
                            <td><ul>
                                @foreach(  json_decode($pregunta->opciones)  as $key => $opciones)
                               <li> Opcion  {{$key + 1}} -  {{$opciones}}</li>
                                @endforeach
                            </ul>
                            </td>
                            <td>{{$pregunta->respuesta  }}</td>
                            <td>
                                 <div class="btn-group" role="group" aria-label="Button group">
                                    <button type="button" dada-id="{{$pregunta->id  }}"  class="btnQuestion   btn btn-success " data-toggle="modal" data-target="#agregarQuestionEditar">
                                        Editar </button>
                                        <form action="{{route('question.destroy',['question'=> $pregunta->id])}}" method="POST">
                                            @csrf
                                            @method('delete')
                                            <button  type="submit" class="btn btn-danger">Eliminar</button>
                                        </form>

                                 </div>
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






  <!-- Modal Agregar Usuario -->
  <div class="modal" id="agregarQuestion" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog  modal-lg" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Agregar Curso DC3</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
        </div>
    <form action="{{route('question.store')}}" method="POST" enctype="multipart/form-data">
        @csrf
          <div class="modal-body">
           <div class="form-group">

               <label for="curso">Curso: </label>

               <select id="curso" class="form-control" name="curso">
                   <option > -Seleciona a un curso- </option>
                      @foreach($cursos as $key => $curso)
                         <option value="{{ $curso->id  }}" {{old('curso') == $curso->id ? 'selected' : ''}}> {{ $curso->nombre }} </option>
                      @endforeach

                      @error('curso')
                      <span class="invalid-feedback d-block" role="alert">
                      <strong>{{$message}}</strong>
                      </span>
                      @enderror

               </select>

               <div class="form-group">

                <label for="pregunta">Pregunta</label>
                <input type="text" class="form-control" id="pregunta" placeholder="Escribe tu pregunta" name="pregunta" value="{{old('pregunta')}}">

                @error('pregunta')
                      <span class="invalid-feedback d-block" role="alert">
                      <strong>{{$message}}</strong>
                      </span>
                @enderror

              </div>

               <div class="row">

                  <div class="col-md-6">
                    <label for="opcion_uno">Opcion 1</label>
                    <input type="text" class="form-control" id="opcion_uno" placeholder="Opcion uno" name="opcion_uno" value="{{old('opcion_uno')}}">

                    @error('opcion_uno')
                       <span class="invalid-feedback d-block" role="alert">
                       <strong>{{$message}}</strong>
                       </span>
                    @enderror

                  </div>

                  <div class="col-md-6">
                    <label for="opcion_dos">Opcion 2</label>
                    <input type="text" class="form-control" id="opcion_dos" placeholder="Opcion dos" name="opcion_dos" value="{{old('opcion_dos')}}">

                    @error('opcion_dos')
                      <span class="invalid-feedback d-block" role="alert">
                      <strong>{{$message}}</strong>
                      </span>
                    @enderror
                  </div>

                  <div class="col-md-6">
                    <label for="opcion_tres">Opcion 3</label>
                    <input type="text" class="form-control" id="opcion_tres" placeholder="Opcion tres" name="opcion_tres" value="{{old('opcion_tres')}}">

                    @error('opcion_tres')
                    <span class="invalid-feedback d-block" role="alert">
                      <strong>{{$message}}</strong>
                      </span>
                    @enderror
                  </div>

                   <div class="col-md-6">
                    <label for="opcion_cuatro">Opcion 4</label>
                    <input type="text" class="form-control" id="opcion_cuatro" placeholder="Opcion cuatro" name="opcion_cuatro" value="{{old('opcion_cuatro')}}">

                    @error('opcion_cuatro')
                    <span class="invalid-feedback d-block" role="alert">
                      <strong>{{$message}}</strong>
                      </span>
                    @enderror
                  </div>

               </div>

               <div class="form-group">
                <label for="Respuesta">Respuesta</label>
                <input type="text" class="form-control" id="Respuesta" placeholder="Opcion uno" name="respuesta" value="{{old('respuesta')}}">

                @error('respuesta')
                <span class="invalid-feedback d-block" role="alert">
                  <strong>{{$message}}</strong>
                  </span>
                @enderror
              </div>

           </div>



          </div>

          <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>

              <button type="submit" class="btn btn-primary">Guardar Cambios</button>
          </div>
        </form>
      </div>
    </div>
  </div>

  <!-- Modal Editar curso -->
  <div class="modal" id="agregarQuestionEditar" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Editar Usuario</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
        </div>

        <form action="">
        <div class="modal-body">


                <div class="form-group">

                    <input type="hidden" id="idquestionEditar" name="idquestionEditar">

                    <input type="hidden" id="cursoEditar" name="cursoEditar">

                    <label for="pregunta">Pregunta</label>
                    <input type="text" class="form-control" id="preguntaEditar" placeholder="Escribe tu pregunta" name="preguntaEditar" value="{{old('pregunta')}}">

                    @error('pregunta')
                          <span class="invalid-feedback d-block" role="alert">
                          <strong>{{$message}}</strong>
                          </span>
                    @enderror

                  </div>

                   <div class="row">

                      <div class="col-md-6">
                        <label for="opcion_uno">Opcion 1</label>
                        <input type="text" class="form-control" id="opcion_unoEditar" placeholder="Opcion uno" name="opcion_unoEditar" value="{{old('opcion_uno')}}">

                        @error('opcion_uno')
                           <span class="invalid-feedback d-block" role="alert">
                           <strong>{{$message}}</strong>
                           </span>
                        @enderror

                      </div>

                      <div class="col-md-6">
                        <label for="opcion_dos">Opcion 2</label>
                        <input type="text" class="form-control" id="opcion_dosEditar" placeholder="Opcion dos" name="opcion_dosEditar" value="{{old('opcion_dos')}}">

                        @error('opcion_dos')
                          <span class="invalid-feedback d-block" role="alert">
                          <strong>{{$message}}</strong>
                          </span>
                        @enderror
                      </div>

                      <div class="col-md-6">
                        <label for="opcion_tres">Opcion 3</label>
                        <input type="text" class="form-control" id="opcion_tresEditar" placeholder="Opcion tres" name="opcion_tresEditar" value="{{old('opcion_tres')}}">

                        @error('opcion_tres')
                        <span class="invalid-feedback d-block" role="alert">
                          <strong>{{$message}}</strong>
                          </span>
                        @enderror
                      </div>

                       <div class="col-md-6">
                        <label for="opcion_cuatro">Opcion 4</label>
                        <input type="text" class="form-control" id="opcion_cuatroEditar" placeholder="Opcion cuatro" name="opcion_cuatroEditar" value="{{old('opcion_cuatro')}}">

                        @error('opcion_cuatro')
                        <span class="invalid-feedback d-block" role="alert">
                          <strong>{{$message}}</strong>
                          </span>
                        @enderror
                      </div>

                   </div>

                   <div class="form-group">
                    <label for="Respuesta">Respuesta</label>
                    <input type="text" class="form-control" id="respuestaEditar" placeholder="Opcion uno" name="respuestaEditar" value="{{old('respuesta')}}">

                    @error('respuesta')
                    <span class="invalid-feedback d-block" role="alert">
                      <strong>{{$message}}</strong>
                      </span>
                    @enderror
                  </div>


        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
          <button type="button" class="btn btn-primary   btnEnviarQuestion">Guardar Cambios</button>
        </div>
        </form>
      </div>
    </div>
  </div>


@endsection

