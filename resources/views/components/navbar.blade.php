<nav class="navbar navbar-custom navbar-expand-lg sticky-top">
    <div class="container-fluid">
        <a class="navbar-brand ms-3" href="/">
            <img src="./media/Color logo - no background.png" class="logo" alt="">
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav d-flex justify-content-around w-100 mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link" aria-current="page" href="/">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Blog Posts</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" href="#">About</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Category</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Contact</a>
                </li>
            </ul>
            <div class="m-profile">
                <ul class="navbar-nav mb-2 mb-lg-0">
                    <li class="nav-item dropdown">
                        @auth
                            <h6 class="nav-item d-inline">Ciao, {{Auth::user()->name}}</h6>
                            <a class="nav-link d-inline" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                <i class="fa-regular fa-user fa-2xl" style="color: #8100ff;"></i>
                            </a>
                            <ul class="dropdown-menu dropdown-menu-end">
                                <li><a class="dropdown-item" href="#">Profilo</a></li>
                                <li><a class="dropdown-item" href="#">Another action</a></li>
                                <li><hr class="dropdown-divider"></li>
                                <li><a href="" class="dropdown-item" onclick="event.preventDefault();document.querySelector('#form-logout').submit();">Logout</a></li>
                            </ul>
                            <form id="form-logout" action="{{route('logout')}}" method="POST">
                                @csrf
                            </form>
                        @else
                            <h6 class="nav-item d-inline">Ciao, User</h6>
                            <a class="nav-link d-inline" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                <i class="fa-regular fa-user fa-2xl" style="color: #8100ff;"></i>
                            </a>
                            <ul class="dropdown-menu dropdown-menu-end">
                                <li><a class="dropdown-item" href="{{route('login')}}">Accedi</a></li>
                                <li><a class="dropdown-item" href="{{route('register')}}">Registrati</a></li>
                                <li><hr class="dropdown-divider"></li>
                                <li><a class="dropdown-item" href="#">Something else here</a></li>
                            </ul>
                        @endauth
                    </li>
                </ul>
            </div>
        </div>
    </div>
</nav>