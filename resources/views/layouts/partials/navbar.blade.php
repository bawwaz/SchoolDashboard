<nav class="navbar navbar-expand-lg bg-body-tertiary navbar bg-dark border-bottom border-body" data-bs-theme="light">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">Navbar</a>
            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                <div class="navbar-nav">
                    <a class="nav-link" href="/home">Home</a>
                    <a class="nav-link" href="/about">About</a>
                    <a class="nav-link" href="/students/all">Students</a>
                    <a class="nav-link" href="/kelas/all">Kelas</a>
                </div>
            </div>
             <div class="ms-auto">
            <div class="dropdown">
                @if (Auth::check())
                <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-bs-toggle="dropdown" aria-expanded="false">
               <i class="fas fa-user-circle me-1"></i>{{ Auth::user()->name }}
                </button>
                <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                    <li><a class="dropdown-item" href="/home">Home</a></li>
                    <li><a class="dropdown-item" href="{{ route('dashboard.all') }}">Dashboard</a></li>
                        </ul>
                    </li>
                
                @else
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a href="{{ route('login') }}" class="nav-link">Login</a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ route('register') }}" class="nav-link">Register</a>
                    </li>
                @endif
                </ul>
            
        </div>
        </div>
    </nav>