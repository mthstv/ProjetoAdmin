<ul class="sidebar navbar-nav">
        <li class="nav-item {{ (request()->routeIs('home')) ? 'active' : '' }}">
          <a class="nav-link "  href="{{route('home')}}">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Home</span>
          </a>
        </li>
        @can('admin')
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="pagesDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <i class="fas fa-fw fa-folder"></i>
            <span>Administrador</span>
          </a>
          <div class="dropdown-menu" aria-labelledby="pagesDropdown">
            <h6 class="dropdown-header">Cadastros</h6>
            <a class="dropdown-item {{ (request()->routeIs('lista_usuarios')) ? 'active' : '' }}" href="{{route('lista_usuarios')}}">Usuários</a>
        </li>
        @endcan
      </ul>