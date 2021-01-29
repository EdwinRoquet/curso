@extends('layouts.admin')


@section('content')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
           <h1> Modulo para agregar archivos</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Inicio</a></li>
              <li class="breadcrumb-item active">Administración de constancia / usuario</li>
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

            Nombre:  <h3> {{$usuario->name}}</h3>
            Folio:



          <!-- Button Agregar Modal Usuario-->
          {{-- <button type="button" class="btn btn-success mb-4" data-toggle="modal" data-target="#agregarUsuario">
              Agregar Constancia
          </button> --}}

          <!--Tabla Usuario-->


          <table  id="table"class="table table-bordered table-striped dt-responsive tablas" width="100%">
                <thead>
                  <tr>
                    <th>Nombre Curso</th>
                    <th>Estado</th>
                    <th>QR</th>
                    <th>Diploma</th>
                    <th>Constancia DC3</th>
                    <th>Temario</th>
                    <th>Acciones</th>
                  </tr>
                </thead>
                <tbody>


                            @foreach($usuario->cursos as $key => $cur)

                            <tr>
                                <td>
                                    {{$cur->curso->nombre}}
                                </td>
                                <td>
                                  <button  class=" bnt-estado text-white btn  @if($cur->activa == 1) btn-success @else btn-danger @endif" id="bnt-estado" idconstancia="{{$cur->id}}" estado="{{$cur->activa}}" type="button" > @if($cur->activa == 1) Activo @else Desactivado @endif </button>
                                </td>
                                <td>
                                     @if($cur->ruta_qr === ' ')
                                       <img class="img-fluid" src="storage/{{$cur->ruta_qr}}" alt="">
                                     @else
                                          No hay nada
                                     @endif

                                </td>
                                <td>
                                     @if($cur->ruta_diploma)
                                     <iframe width="200" height="200" src="{{asset('storage/diploma/'.$cur->ruta_diploma)}}" frameborder="0"></iframe>
                                     @else
                                          No hay diploma
                                     @endif
                                </td>
                                <td>
                                     @if($cur->ruta_dc3)
                                     <iframe width="200" height="200" src="{{asset('storage/constancia/'.$cur->ruta_dc3)}}" frameborder="0"></iframe>
                                     @else
                                     No hay  Constancia
                                     @endif

                                </td>
                                <td>
                                     @if($cur->ruta_temario)
                                     <iframe width="200" height="200" src="{{asset('storage/temario/'.$cur->ruta_temario)}}" frameborder="0"></iframe>
                                     @else
                                     No hay  Temario
                                     @endif

                                </td>

                                <td>
                                    <div class="btn-group caja" role="group" aria-label="Vertical button group">


                                         <!-- Button trigger modal -->
                                        <button type="button" idArchivo="{{$cur->id}}" class="btn-s btn btn-warning text-white" data-toggle="modal" data-target="#modalEditar">
                                          Archivos
                                        </button>

                                     <form action="{{route('activacion.destroy',['archivo'=> $cur->id])}}" method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <button class="btn btn-danger  text-white" type="submit"><i class="fas fa-trash-alt"></i></button>
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



  <!-- Modal -->
  <div class="modal" id="modalEditar" tabindex="-1" role="dialog" aria-labelledby="exampleModalScrollableLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-scrollable" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalCenteredLabel">Agregar Documentos</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
        </div>

        <form action="{{ route('activacion.update')}}"  method="POST" enctype="multipart/form-data">
            @method('put')
            @csrf

        <div class="modal-body">
           <div class="form-group">
               <label for="temario">Temario</label>
               <input id="temario" class="form-control-file" type="file" name="temario" id="temario">
           </div>
           <div class="form-group">
               <label for="diploma">Diploma</label>
               <input id="diploma" class="form-control-file" type="file" name="diploma" id="diploma">
           </div>
           <div class="form-group">
               <label for="constancia">Constancia</label>
               <input id="constancia" class="form-control-file" type="file" name="constancia" id="constancia">
           </div>

           <input type="hidden" name="idArchivo" id="idArchivo">
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
          <button type="submit" class="btn btn-success btnEnviar" >Guardar</button>
        </div>
    </form>
      </div>
    </div>
  </div>







  <!-- Modal Agregar Usuario -->
  <div class="modal" id="agregarUsuario" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Agregar Curso DC3</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
        </div>
    <form action="{{route('activacion.store')}}" method="POST" enctype="multipart/form-data">
        @csrf
          <div class="modal-body">

            <div class="form-group">

               <label for="usuario">Usuario: </label>
{{--
               <select id="usuario" class="form-control" name="usuario">
                   <option > -Seleciona a un usuario- </option>
                      @foreach($usuarios as $key => $usuario)
                         <option value="{{ $usuario->id  }}" {{old('usuario') == $usuario->id ? 'selected' : ''}}> {{ $usuario->name  }} </option>
                      @endforeach

                      @error('usuario')
                      <span class="invalid-feedback d-block" role="alert">
                      <strong>{{$message}}</strong>
                      </span>
                      @enderror

               </select> --}}

           </div>
           <div class="form-group">

               <label for="curso">Curso: </label>

               {{-- <select id="curso" class="form-control" name="curso">
                   <option > -Seleciona a un curso- </option>
                      @foreach($cursos as $key => $curso)
                         <option value="{{ $curso->id  }}" {{old('curso') == $curso->id ? 'selected' : ''}}> {{ $curso->nombre }} </option>
                      @endforeach

                      @error('curso')
                      <span class="invalid-feedback d-block" role="alert">
                      <strong>{{$message}}</strong>
                      </span>
                      @enderror

               </select> --}}

               <input type="hidden" name="uuid" value="{{Str::uuid()->toString()}}">

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



@endsection

@section('scripts')
    <script src="{{ asset('js/subirArchivos.js') }}" ></script>
@endsection

