    <div class="sidebar pe-4 pb-3">
        <nav class="navbar bg-light navbar-light">
            <a href="{{route('dashboard')}}" class="navbar-brand mx-4 mb-3">
                <h3 class="text-primary"></i>Portfolio</h3>
            </a>
            <div class="d-flex align-items-center ms-4 mb-4">
                <div class="position-relative">
                    @if(Auth::user()->avatar)
                    <img class="rounded-circle" src="{{asset('storage/' . Auth()->user()->avatar)}}" alt="" style="width: 40px; height: 40px;">
                    @else
                    <img class="rounded-circle" src="my_dashboard/img/user.jpg" alt="" style="width: 40px; height: 40px;">
                    @endif
                    <div class="bg-success rounded-circle border border-2 border-white position-absolute end-0 bottom-0 p-1"></div>
                </div>
                <div class="ms-3">
                    <h6 class="mb-0">{{Auth::user()->first_name ." ". Auth::user()->last_name }}</h6>
                    <span>{{ucwords(Auth::user()->role)}}</span>
                </div>
            </div>
            <div class="navbar-nav w-100">
                <a href="{{ route('dashboard')}}" class="nav-item nav-link"><i class="fa fa-tachometer-alt me-2"></i>Dashboard</a>
                <a href="#" class="nav-item nav-link" data-bs-toggle="modal" data-bs-target="#profileModalLabel"><i class="fa fa-user me-2"></i>My Profile</a>
                <a href="{{route('user.index')}}" class="nav-item nav-link"><i class="fa fa-users me-2"></i>Users</a>
                <a href="table.html" class="nav-item nav-link"><i class="fa fa-table me-2"></i>Tables</a>
                <a href="chart.html" class="nav-item nav-link"><i class="fa fa-chart-bar me-2"></i>Charts</a>
                <div class="nav-item dropdown">
                    <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown"><i class="far fa-file-alt me-2"></i>Pages</a>
                    <div class="dropdown-menu bg-transparent border-0">
                        <a href="signin.html" class="dropdown-item">Sign In</a>
                        <a href="signup.html" class="dropdown-item">Sign Up</a>
                        <a href="404.html" class="dropdown-item">404 Error</a>
                        <a href="blank.html" class="dropdown-item">Blank Page</a>
                    </div>
                </div>
            </div>
        </nav>
    </div>
