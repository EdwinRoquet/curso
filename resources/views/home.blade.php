@extends('layouts.admin')

@section('content')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1> Panel de datos</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Inicio</a></li>
              <li class="breadcrumb-item active">Dashboard</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
       <div class="container-fluid">


        <div class="row">

            <div class="col-lg-4 col-6">
                <!-- small box -->
                <div class="small-box bg-info">
                  <div class="inner">
                  <h3>{{$cursos}}</h3>

                    <p> Total de Cursos</p>
                  </div>
                  <div class="icon">
                    <i class="fas fa-university"></i>
                  </div>
                  <a href="{{route('cursos.index')}}" class="small-box-footer">Más info <i class="fas fa-arrow-circle-right"></i></a>
                </div>
              </div>

            <div class="col-lg-4 col-6">
                <!-- small box -->
                <div class="small-box  bg-success">
                  <div class="inner">
                    <h3>{{$usuarios}}</h3>

                    <p>Total de Usuarios</p>
                  </div>
                  <div class="icon">
                    <i class="fas fa-users"></i>
                  </div>
                  <a href="{{route('usuario.index')}}" class="small-box-footer">Más info <i class="fas fa-arrow-circle-right"></i></a>
                </div>
              </div>

            <div class="col-lg-4 col-6">
                <!-- small box -->
                <div class="small-box  bg-warning">
                  <div class="inner">
                    <h3>{{$archivos}}</h3>

                    <p>Total de Archivos</p>
                  </div>
                  <div class="icon">
                    <i class="ion ion-bag"></i>
                  </div>
                  <a href="{{route('activacion.index')}}" class="small-box-footer">Más info <i class="fas fa-arrow-circle-right"></i></a>
                </div>
              </div>


        </div>




    </div>
    </section>
    <!-- /.content -->
  </div>
@endsection
