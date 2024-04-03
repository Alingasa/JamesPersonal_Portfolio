<div class="sidebar pe-4 pb-3">
    <nav class="navbar bg-light navbar-light">
        <a href="{{route('dashboard')}}" class="navbar-brand mx-4 mb-3">
            <h3 class="text-primary">Portfolio</h3>
        </a>
        <div class="d-flex align-items-center ms-4 mb-4">
            <div class="position-relative">
                <!-- Ensure FontAwesome and Bootstrap icons are properly linked -->
                @if(Auth::user()->avatar)
                <img class="rounded-circle" src={{asset('storage/' . Auth()->user()->avatar)}} alt="" style="width: 40px; height: 40px;">
                @else
                <img class="rounded-circle" src={{asset("my_dashboard/img/user.jpg")}} alt="" style="width: 40px; height: 40px;">
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
            <a href="{{route('user.create')}}" class="nav-item nav-link"><i class="fas fa-lock me-2"></i>Password</a>
            <hr class="my-2">
            <a href="{{ route('education.index') }}" class="nav-item nav-link"><i class="bi bi-award me-2"></i>Education</a>
            <a href="{{ route('interests.index') }}" class="nav-item nav-link"><i class="fas fa-heart me-2"></i>Interests</a>
            <a href="{{ route('skills.index') }}" class="nav-item nav-link"><i class="fas fa-cogs me-2"></i>Skills</a>
            <a href="{{ route('experiences.index')}}" class="nav-item nav-link"><i class="fas fa-briefcase me-2"></i>Experiences</a>
            <a href="{{route('webinars.index')}}" class="nav-item nav-link"><i class="fas fa-calendar-alt me-2"></i>Webinar</a>
            <a href="{{route('contacts.index')}}" class="nav-item nav-link"><i class="fas fa-address-book me-2"></i>Contacts</a>
            <hr class="my-2">
            <a href="{{ route('blogs.index') }}" class="nav-item nav-link"><i class="fas fa-book me-2"></i>My Blog</a>
            <hr class="my-2">
        </div>
    </nav>
</div>


