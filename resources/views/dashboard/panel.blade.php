@extends("layouts.app")


@section("content")
   <div class="row">
    <div class="col-md-3">
             <!-- Menú Vertical -->
        <nav class="navbar navbar-expand-md navbar-light bg-light flex-md-column">
            <div class="container-fluid">
              <!-- Logo o Título -->
  
              <!-- Botón para dispositivos pequeños -->
              <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
  
              <!-- Enlaces del menú -->
              <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav flex-column">
                  <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="/dashboard">Inicio</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="#">Forums</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="#">My Posts</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="#">Create Category</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="#">Create Statistics</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="#">Transfer content form reddit</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="/dashboard/settings">Settings</a>
                  </li>
                </ul>
              </div>
            </div>
          </nav>

    </div>
   
    @yield('control-mode')


   </div>

   

@endsection

