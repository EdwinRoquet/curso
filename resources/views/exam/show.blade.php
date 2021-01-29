@extends('layouts.admin')


@section('content')
<style>

.contenido {
    margin-top: 20px;
}



.caja{
    background-color: white;
    padding: 50px;
    border-radius: 20px;
}


div.marcador{
    font-size: 40px!important;
    font-weight: 600;
    color: black;
    text-align: center;
    margin: auto;
    padding-right: 15px;
}
.text{
    font-size: 18px;
    color: black;
}

div.text>span{
    font-weight: 600;
}
.cajaPreguntas{
    font-size: 20px;
    color: black;
    text-align: center;
}

/* #screen {
	font-family: Calibri,Arial;
	font-weight: 300;
	font-size: 35px;
	width: 330px;
	height: 50px;
	color: gray;
	letter-spacing: 3px;
} */
div.resultadoFinal{
    border:solid 1px cornflowerblue ;
    border-radius: 10px;
    padding: 30px;
    margin: 10px;
}
</style>
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
          Curso:  {{$exam->curso->nombre}}
         <br> Nombre: {{$exam->usuario->name}}


           <input type="hidden" value="{{$exam->id}}" id="idExamen" name="idExamen">
           <input type="hidden" value="{{$exam->curso->preguntas}}" id="Examen" name="idExamen">
            <div class="contenido ">
                <div class="row d-flex  justify-content-center ">
                    <div class="col-md-12 caja ">
                              <!-- Caja Marcador -->

                        <div class="row cajaMarcador d-flex  justify-content-center mb-3">
                            <div id="screen" class=" text-center"> </div>

                        </div>
                        <hr class="mt-2">



                         <div class="col-md-12 Resultados">
                             <div class="row eliminarCaja d-flex justify-content-center">
                               <div class="text col-md-4 ">Respuesta correctas: <span id="resCorrecta">0</span></div>
                               <div class="text col-md-4 ">Respuesta Incorrectas: <span id="resIncorrecta">0</span></div>
                               <div class="text col-md-4 ">Numero de Preguntas: <span  id="numPregunta">0</span></div>
                             </div>
                        </div>


                        <hr >

                       <div class="appexamen">

                         <div class="cajaPrincipal">

                             <div class="row mt-2">

                                   <!-- Div de preguntas -->
                                 <div class=" col-md-12 p-2 cajaPreguntas" id="pregunta"></div>

                             </div>


                              <div class="container mt-3  d-flex justify-content-center " id="iniciar">

                                         <!-- Div de opciones -->
                                       <div class="col-md-8  d-flex flex-wrap justify-content-center  cajaOpciones  " style="display: none;" >
                                          <div class="col-md-5 m-1 p-1  d-flex  justify-content-center"><button class="btn btn-primary btn-block" " id="btn0" type="button"> <span id="opcion0">Respuesta</span> </button></div>
                                          <div class="col-md-5 m-1 p-1  d-flex  justify-content-center"><button class="btn btn-primary btn-block" " id="btn1" type="button"> <span id="opcion1">Respuesta</span> </button></div>
                                         <div class="col-md-5 m-1 p-1  d-flex  justify-content-center"><button class="btn btn-primary  btn-block"" id="btn2" type="button"> <span id="opcion2">Respuesta</span> </button></div>
                                         <div class="col-md-5 m-1 p-1  d-flex  justify-content-center"><button class="btn btn-primary  btn-block"" id="btn3" type="button"> <span id="opcion3">Respuesta</span> </button></div>
                                     </div>

                              </div>

                          </div>

                       </div>

                    </div>
                </div>

            </div>

        <!-- /.card-body -->
      </div>
      <!-- /.card -->
    </section>
    <!-- /.content -->
  </div>










@endsection

