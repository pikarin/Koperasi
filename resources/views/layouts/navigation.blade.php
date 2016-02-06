@if (Auth::guest())
<!-- Right Side Of Navbar -->
<ul class="nav navbar-nav navbar-right">
    <!-- Authentication Links -->
        <li><a href="{{ url('/login') }}">Login</a></li>
        <li><a href="{{ url('/register') }}">Register</a></li>
</ul>
    @elseif (Auth::user()->role_id === 1)
    <!-- Left Side Of Navbar -->
    <ul class="nav navbar-nav">
        <li><a href="{{ url('/superadmin/home') }}">Beranda</a></li>
        <li><a href="{{ url('/superadmin/anggota') }}">Users</a></li>
        <li><a href="{{ url('/superadmin/anggota') }}">Anggota</a></li>
        <li><a href="{{ url('/superadmin/anggota') }}">Simpanan</a></li>
        <li><a href="{{ url('/superadmin/anggota') }}">Pinjaman</a></li>
    </ul>
    <ul class="nav navbar-nav navbar-right">
        <li class="dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                {{ Auth::user()->name }} <span class="caret"></span>
            </a>

            <ul class="dropdown-menu" role="menu">
                <li><a href="{{ url('/logout') }}"><i class="fa fa-btn fa-sign-out"></i>Logout</a></li>
            </ul>
        </li>
      </ul>
      @else
      <ul class="nav navbar-nav">
          <li><a href="{{ url('/administrator/home') }}">Beranda</a></li>
          <li><a href="{{ url('/administrator/anggota') }}">Anggota</a></li>
          <li><a href="{{ url('/administrator/simpanan') }}">Simpanan</a></li>
          <li><a href="{{ url('/administrator/simpanan') }}">Pinjaman</a></li>
      </ul>
      <ul class="nav navbar-nav navbar-right">
          <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                  {{ Auth::user()->name }} <span class="caret"></span>
              </a>

              <ul class="dropdown-menu" role="menu">
                  <li><a href="{{ url('/logout') }}"><i class="fa fa-btn fa-sign-out"></i>Logout</a></li>
              </ul>
          </li>
        </ul>
    @endif
