<nav class="navbar navbar-expand-lg navbar-dark bg-primary  p-md-3">
    <div class="container">
    
        <a class="navbar-brand text-white" href="/">
           CheapTalk.com
        </a>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav me-auto mb-lg-0">
               
               
            </ul>
            <form class="d-flex">
                <ul class="navbar-nav me-auto mb-lg-0">
                    @if(Auth::check())
                        <li class="nav-item">
                            <a class="nav-link box text-dark" href="/dashboard"><i class=""></i> Dashboard</a>
                        </li>

                        

                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle text-dark" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                <i class=""></i> Category
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                @foreach(App\Models\Category::all() as $c)
                                <li><a class="dropdown-item" href="/categories/{{$c->id}}">{{$c->category}}</a></li>
                                @endforeach
                            </ul>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link box text-dark" href="/authors"><i class=""></i> Users</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link box text-dark" href="/logout"><i class=""></i> Logout</a>
                        </li>
                    @else
                                <li><a class=" nav-link box text-dark " href="/login">Login</a></li>
                                <li><a class=" nav-link box text-dark" href="/register">Register</a></li>
                           
                        </li>
                        
                    @endif
                </ul>
            </form>
        </div>
    </div>
</nav>