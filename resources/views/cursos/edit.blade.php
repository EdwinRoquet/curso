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
              <li class="breadcrumb-item"><a href="#">Administrar Curso DC3</a></li>
              <li class="breadcrumb-item active">Edicion</li>
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

            <form action="{{route('cursos.update', ['curso' => $curso->id])}}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')

                <div class="input-group  mb-3">

                    <div class="input-group-prepend">

                      <span class="input-group-text" id=""><i class="fas fa-user"></i></span>

                    </div>

                    <input id="nombre" placeholder="Su nombre" class="form-control @error('nombre') is-invalid @enderror" type="text" name="nombre" value="{{$curso->nombre}}" >

                    @error('nombre')

                         <div class="invalid-feedback">
                             {{$message}}
                         </div>

                    @enderror

                </div>

                 <div class="input-group  mb-3">

                    <div class="input-group-prepend">

                      <span class="input-group-text" id=""><i class="fas fa-user"></i></span>

                    </div>

                    <input id="descripcion" placeholder="Su descripcion" class="form-control @error('descripcion') is-invalid @enderror" type="text" name="descripcion" value="{{$curso->descripcion}}" >

                    @error('descripcion')

                         <div class="invalid-feedback">
                             {{$message}}
                         </div>

                    @enderror

                </div>


                <div class="form-group mt-3">

                  <label for="temario">Temario</label>

                  <input type="hidden" name="temario" id="temario" value=" {{$curso->temario}} ">

                  <trix-editor class="form-control @error('temario') is-invalid @enderror" input="temario"></trix-editor>

                  @error('temario')
                       <span class="invalid-feedback d-block" role="alert">
                       <strong>{{$message}}</strong>
                       </span>
                       @enderror
              </div>

              <div class="  mt-4">
                <p>Imagen Actual:</p>
              <img src="/storage/{{$curso->ruta_imagen}}"style="width:300px" >
              <input type="hidden" name="imagen_actual" value="{{$curso->ruta_imagen}}">
              </div>

              <div class="form-group">
                  <label for="imagen">Imagen: </label>
                  <input id="imagen" class="form-control-file  @error('imagen') is-invalid @enderror" type="file" name="imagen" value="{{old('imagen')}}">

                  @error('imagen')

                         <div class="invalid-feedback">
                             {{$message}}
                         </div>

                    @enderror

              </div>

              <div class="form-group">
                  <label for="imagen2">Imagen del Temario: </label>
                  <input id="imagen2" class="form-control-file  @error('imagen2') is-invalid @enderror" type="file" name="imagen2" value="{{old('imagen2')}}">

                  @error('imagen2')

                         <div class="invalid-feedback">
                             {{$message}}
                         </div>

                    @enderror

              </div>


              <button type="submit" class="btn btn-primary">Guardar Cambios</button>
            </form>


        </div>
        <!-- /.card-body -->
      </div>
      <!-- /.card -->
    </section>
    <!-- /.content -->
  </div>






@endsection

@section('scripts')
   <script src="https://cdnjs.cloudflare.com/ajax/libs/trix/1.2.3/trix.js" integrity="sha256-b2QKiCv0BXIIuoHBOxol1XbUcNjWqOcZixymQn9CQDE=" crossorigin="anonymous" defer></script>
@endsection
