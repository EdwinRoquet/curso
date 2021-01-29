<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta http-equiv="x-ua-compatible" content="ie=edge">

  <title>CASEIPA | CONSTANCIA</title>

  <!-- Font Awesome Icons -->
  <link rel="stylesheet" href="{{asset('plugins/fontawesome-free/css/all.min.css')}}">
  <!-- Theme style -->
  <link rel="stylesheet" href="{{asset('dist/css/adminlte.min.css')}}">
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
</head>
<style>
#the-canvas {
  border: 1px solid black;
  direction: ltr;
  width: 400px;
  height: 500px;
  align-content: center
}
#the-canvasdos {
  border: 1px solid black;
  direction: ltr;
  width: 500px;
  height: 400px;
  align-content: center
}
</style>



<body class="hold-transition layout-top-nav">
<div class="wrapper">

  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand-md navbar-light navbar-white">
    <div class="container">
      <a href="../../index3.html" class="navbar-brand">
        <img src="../../dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
             style="opacity: .8">
        <span class="brand-text font-weight-light">CASEIPA</span>
      </a>

      <button class="navbar-toggler order-1" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse order-3" id="navbarCollapse">
        <!-- Left navbar links -->
        <ul class="navbar-nav">
          <li class="nav-item">
            <a href="{{route('mi-curso.index')}}" class="nav-link">Mis Constancias</a>
          </li>
        </ul>
      </div>

    </div>
  </nav>
  <!-- /.navbar -->

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container">
        <div class="row mb-1">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark"> CASEIPA  <small>Certifica que estas constancias estan validas y son originales del usuario</small></h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <div class="content">
      <div class="container">
        <div class="row">
          <div class="col-lg-12">

            <div class="card card-primary card-outline">
                <h5 class="card-title text-center mt-2">{{$constancia->usuario->name}}</h5>
              <div class="card-body">



                <div class="row">
                    <div class="col-md-6 d-flex flex-column  align-items-center ">
                        @if($constancia->ruta_dc3)
                        <h4 class=" text-center mt-2">Constancia</h4>
                        <canvas id="the-canvas" ></canvas>
                         <div id="pdf" class="row d-flex  " data="{{$constancia->ruta_dc3}}">

                            <button class="btn btn-primary m-2" id="prev">Previo</button>
                            <button class="btn btn-primary m-2" id="next">Siguiente</button>
                            &nbsp; &nbsp;
                            <span class=" m-2" >Pagina: <span id="page_num"></span> / <span id="page_count"></span></span>
                          </div>



                        @else
                             No hay constancia
                        @endif
                    </div>
                    <div class="col-md-6 d-flex flex-column align-items-center">
                        @if($constancia->ruta_diploma)
                        <h4 class=" text-center mt-2">Diploma</h4>
                        <canvas id="the-canvasdos" ></canvas>
                        <div id="pdfDos" class="row d-flex  " datados="{{$constancia->ruta_diploma}}">

                            <button class="btn btn-primary m-2" id="prevDos">Previo</button>
                            <button class="btn btn-primary m-2" id="nextDos">Siguiente</button>
                            &nbsp; &nbsp;
                            <span class=" m-2" >Pagina: <span id="page_numDos"></span> / <span id="page_countDos"></span></span>
                          </div>




                        @else
                        No hay  Constancia
                        @endif
                    </div>
                </div>

              </div>
            </div><!-- /.card -->
          </div>
          <!-- /.col-md-6 -->

          <!-- /.col-md-6 -->
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->




       @include('includes.footer')
</div>

<script src="//mozilla.github.io/pdf.js/build/pdf.js"></script>
<!-- jQuery -->
<script src="{{asset('plugins/jquery/jquery.min.js')}}" defer></script>
<!-- Bootstrap 4 -->
<script src="{{asset('plugins/bootstrap/js/bootstrap.bundle.min.js')}}" defer></script>
<!-- AdminLTE App -->
<script src="{{asset('dist/js/adminlte.min.js')}}" defer></script>

<script>
// If absolute URL from the remote server is provided, configure the CORS
// header on that server.


// Loaded via <script> tag, create shortcut to access PDF.js exports.
var pdfjsLib = window['pdfjs-dist/build/pdf'];

// The workerSrc property shall be specified.
pdfjsLib.GlobalWorkerOptions.workerSrc = '//mozilla.github.io/pdf.js/build/pdf.worker.js';

var nombre = document.querySelector('#pdf').getAttribute('data');

var nombreDos = document.querySelector('#pdfDos').getAttribute('datados');

visualizarPdf(nombre ,1 ,'constancia', document.getElementById('the-canvas'), 'next', 'prev', 'page_count', 'page_num' );

visualizarPdf(nombreDos ,1 ,'diploma', document.getElementById('the-canvasdos'), 'nextDos', 'prevDos', 'page_countDos', 'page_numDos' );







function visualizarPdf(nombrePdf,zoomPDf,url,canvas, next, preview, pagina, totalPagina ){

    var url = 'http://127.0.0.1:8000/storage/'+ url +'/'+ nombrePdf;

    var pdfDoc = null,
    pageNum = 1,
    pageRendering = false,
    pageNumPending = null,
    scale = zoomPDf,
    canvas = canvas,
    ctx = canvas.getContext('2d');

function renderPage(num) {
  pageRendering = true;
  // Using promise to fetch the page
  pdfDoc.getPage(num).then(function(page) {
    var viewport = page.getViewport({scale: scale});
    canvas.height = viewport.height;
    canvas.width = viewport.width;

    // Render PDF page into canvas context
    var renderContext = {
      canvasContext: ctx,
      viewport: viewport
    };
    var renderTask = page.render(renderContext);

    // Wait for rendering to finish
    renderTask.promise.then(function() {
      pageRendering = false;
      if (pageNumPending !== null) {
        // New page rendering is pending
        renderPage(pageNumPending);
        pageNumPending = null;
      }
    });
  });

  // Update page counters
  document.getElementById(totalPagina).textContent = num;
}

/**
 * If another page rendering in progress, waits until the rendering is
 * finised. Otherwise, executes rendering immediately.
 */
function queueRenderPage(num) {
  if (pageRendering) {
    pageNumPending = num;
  } else {
    renderPage(num);
  }
}

/**
 * Displays previous page.
 */
function onPrevPage() {
  if (pageNum <= 1) {
    return;
  }
  pageNum--;
  queueRenderPage(pageNum);
}
document.getElementById(preview).addEventListener('click', onPrevPage);

/**
 * Displays next page.
 */
function onNextPage() {
  if (pageNum >= pdfDoc.numPages) {
    return;
  }
  pageNum++;
  queueRenderPage(pageNum);
}
document.getElementById(next).addEventListener('click', onNextPage);

/**
 * Asynchronously downloads PDF.
 */
pdfjsLib.getDocument(url).promise.then(function(pdfDoc_) {
  pdfDoc = pdfDoc_;
  document.getElementById(pagina).textContent = pdfDoc.numPages;

  // Initial/first page rendering
  renderPage(pageNum);
})


}

</script>

<source>
</body>
</html>
