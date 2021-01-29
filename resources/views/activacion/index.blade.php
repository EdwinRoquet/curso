@extends('layouts.admin')


@section('content')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
           <h1> Activacion de  DC3</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Inicio</a></li>
              <li class="breadcrumb-item active">Administrador Certificados DC3</li>
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
          <button type="button" class="btn btn-success mb-4" data-toggle="modal" data-target="#agregarUsuario">
              Agregar Certificado
          </button>

          <!--Tabla Usuario-->


          <table  id="table"class="table table-bordered table-striped dt-responsive tablas" width="100%">
                <thead>
                  <tr>
                    <th style="width: 10px">#</th>
                    <th>Nombre</th>
                    <th>Cursos</th>
                    <th>Ver Cursos</th>
                  </tr>
                </thead>
                <tbody>
                        @foreach($usuarios as $key => $usuario )
                        <tr>
                        <td>{{$key + 1}}</td>
                            <td>{{$usuario->name}}</td>
                            <td>{{$usuario->cursos->count() }}</td>
                            <td>
                                <a href="{{ route('usuario.edit',['user'=> $usuario->id ])}}" class="btn btn-primary"> Detalles</a>
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

               </select>

           </div>
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

  <!-- Modal Editar curso -->
  <div class="modal" id="editarUsuario" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Editar Usuario</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
        </div>
        <div class="modal-body">
          ...
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
          <button type="button" class="btn btn-primary">Guardar Cambios</button>
        </div>
      </div>
    </div>
  </div>


@endsection

