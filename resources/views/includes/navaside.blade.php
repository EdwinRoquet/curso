<aside class="main-sidebar sidebar-dark-primary  elevation-4">
    <!-- Brand Logo -->
    <a href="../../index3.html" class="brand-link">
      <img src="../../dist/img/AdminLTELogo.png"
           alt="AdminLTE Logo"
           class="brand-image img-circle elevation-3"
           style="opacity: .8">
      <span class="brand-text font-weight-light">CURSOS DC-3</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user (optional) -->


      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->

               <li class="nav-item has-treeview">
                <a href="{{ route('home') }}" class="nav-link">
                  <i class="nav-icon fas fa-home"></i>
                  <p>
                    Inicio
                    {{-- <i class="right fas fa-angle-left"></i> --}}
                  </p>
                </a>
              </li>

          <li class="nav-item">
          <a href="{{route('usuario.index')}}" class="nav-link">
              <i class="nav-icon fas fa-user"></i>
              <p>
                Usuarios
              </p>
            </a>
          </li>

          <li class="nav-item has-treeview">
          <a href="{{route('mi-curso.index')}}" class="nav-link">
                <i class="nav-icon fas fa-cubes"></i>
                <p>
                  Mis Cursos-DC3
                </p>
              </a>
          </li>

          <li class="nav-item has-treeview">
          <a href="{{route('activacion.index')}}" class="nav-link">
                <i class="nav-icon fas fa-cubes"></i>
                <p>
                  Activación Cursos-DC3
                </p>
              </a>
          </li>

          <li class="nav-item has-treeview">
          <a href="{{route('cursos.index')}}" class="nav-link">
                <i class="nav-icon fas fa-cubes"></i>
                <p>
                  Cursos DC3
                </p>
              </a>
          </li>

        <li class="nav-item has-treeview">
            <a href="{{route('question.index')}}" class="nav-link">
            <i class="fas fa-file-invoice-dollar nav-icon"></i>
              <p>
                Cuestionario
              </p>
            </a>
          </li>

          <li class="nav-item has-treeview">
            <a href="{{route('exam.index')}}" class="nav-link">
            <i class="fas fa-file-invoice-dollar nav-icon"></i>
              <p>
                Examen
              </p>
            </a>
          </li>

        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>


