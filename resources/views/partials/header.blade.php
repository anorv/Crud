<h2 class="navbar-brand">Projektų valdymas</h2>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarText">
      <ul class="navbar-nav mr-auto">
          <li class="nav-item {{ Request::routeIs('employees.index') ? 'active' : '' }}">
            <a class="nav-link" href="{{ route('employees.index')}}">Darbuotojai</a>
          </li>
    
          <li class="nav-item {{ Request::routeIs('projects.index') ? 'active' : '' }}">
            <a class="nav-link" href="{{ route('projects.index')}}">Projektai</a>
          </li>
      </ul>
      
      
      {{-- <span class="navbar-text {{Request::routeIs('logout') ? 'active' : '' }}">
        <a class="nav-link" href="href="{{ route('logout') }}">Logout</a>
      </span> --}}
    </div>
  </nav>