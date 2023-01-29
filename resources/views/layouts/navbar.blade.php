 <!-- Navbar -->
 <nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
    </ul>

    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
      <li class="nav-item dropdown">
        <a href="{{ URL('/') }}" class="nav-link">Accueil</a>
      </li>
      <li class="nav-item dropdown">
        <a href="{{ URL('profil/show') }}" class="nav-link">Profil</a>
      </li>
      <li class="nav-item dropdown">
        <a href="{{ route('deconnectUser') }}" class="nav-link"><i class="fas fa-log"></i> Déconnexion</a>
      </li>
    </ul>
  </nav>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <h2 class="brand-link">
      <span class="brand-text font-weight-light">AESIT APP Dashboard</span>
    </h2>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="{{ asset('img/dist/img/user2-160x160.jpg')}}" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block">{{auth()->user()->lastname}} {{auth()->user()->firstname}}</a>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item menu-open">
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{ URL('dashboard/index') }}" class="nav-link">
                  <i class="nav-icon fas fa-home"></i>
                  <p>Home</p>
                </a>
              </li>
            </ul>
          </li>

          <li class="nav-item">
              <a href="{{ URL('dashboard/members/show') }}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Membres</p>
              </a>
          </li>

          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-edit"></i>
              <p>
                Cours
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{ URL('dashboard/cours/fsm/cours') }}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>FSM</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ URL('dashboard/cours/enim/cours') }}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>ENIM</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ URL('dashboard/cours/esprim/cours') }}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>ESPRIM</p>
                </a>
              </li>
            </ul>
          </li>

          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-edit"></i>
              <p>
                Devoirs surveillés
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{ URL('dashboard/ds/fsm/devoirs') }}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>FSM</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ URL('dashboard/ds/enim/devoirs') }}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>ENIM</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ URL('dashboard/ds/esprim/devoirs') }}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>ESPRIM</p>
                </a>
              </li>
            </ul>
          </li>

          
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-edit"></i>
              <p>
                TD
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{ URL('dashboard/td/fsm/td') }}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>FSM</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ URL('dashboard/td/enim/td') }}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>ENIM</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ URL('dashboard/td/esprim/td') }}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>ESPRIM</p>
                </a>
              </li>
            </ul>
          </li>

          
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-edit"></i>
              <p>
                TP
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{ URL('dashboard/tp/fsm/tp') }}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>FSM</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ URL('dashboard/tp/enim/tp') }}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>ENIM</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ URL('dashboard/tp/esprim/tp') }}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>ESPRIM</p>
                </a>
              </li>
            </ul>
          </li>

          
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-edit"></i>
              <p>
                Examens
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{ URL('dashboard/examens/fsm/exam') }}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>FSM</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ URL('dashboard/examens/enim/exam') }}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>ENIM</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ URL('dashboard/examens/esprim/exam') }}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>ESPRIM</p>
                </a>
              </li>
            </ul>
          </li>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>