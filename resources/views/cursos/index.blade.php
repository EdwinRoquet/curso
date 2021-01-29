@extends('layouts.admin')
@section('styles')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/trix/1.2.3/trix.css" integrity="sha256-scOSmTNhvwKJmV7JQCuR7e6SQ3U9PcJ5rM/OMgL78X8=" crossorigin="anonymous" />
@endsection

@section('content')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1> Administrar Curso DC3</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Inicio</a></li>
              <li class="breadcrumb-item active">Administrador Cursos</li>
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


          <a href="{{route('cursos.create')}}" class="btn btn-success mb-4">
            Agregar Curso
          </a>

          <!--Tabla Usuario-->


          <table  id="table"class="table table-bordered table-striped dt-responsive tablas" width="100%">
                <thead>
                  <tr>
                    <th style="width: 10px">#</th>
                    <th>Nombre</th>
                    <th>Descripcion</th>
                    <th>Imagens</th>
                    <th style="width: 40px">Acciones</th>
                  </tr>
                </thead>
                <tbody>
                        @foreach($cursos as $key => $curso )
                        <tr>

                        <td>{{$key + 1}}</td>
                            <td>{{$curso->nombre}}</td>
                            <td>{{$curso->descripcion}}</td>
                            {{-- <td>{!!$curso->temario!!}</td> --}}
                            <td>
                                <img class="img-thumbnail"  src="storage/{{$curso->ruta_imagen}}" width="100px" alt="">
                            </td>

                        </td>

                            <td>
                              <div class="btn-group" role="group" aria-label="Vertical button group">

                                 <a class="btn btn-warning text-white " href="{{route('cursos.edit', ['curso'=> $curso->id ])}}"><i class="fas fa-pencil-alt"></i></a>

                               <form action="{{route('cursos.destroy',['curso'=> $curso->id])}}" method="POST">
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






  <!-- Modal Agregar Usuario -->
  <div class="modal " id="agregarUsuario" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Agregar Curso DC3</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
        </div>
    <form action="{{route('cursos.store')}}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="modal-body">







          </div>
          <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>


          </div>
        </form>
      </div>
    </div>
  </div>

  <!-- Modal Editar Usuario -->
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

@section('scripts')
   <script src="https://cdnjs.cloudflare.com/ajax/libs/trix/1.2.3/trix.js" integrity="sha256-b2QKiCv0BXIIuoHBOxol1XbUcNjWqOcZixymQn9CQDE=" crossorigin="anonymous" defer></script>
@endsection
