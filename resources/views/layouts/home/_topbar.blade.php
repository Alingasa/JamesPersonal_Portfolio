
  <!-- Navbar -->
  <nav class="navbar navbar-expand bg-light navbar-light sticky-top px-4 py-0">
    <a href="#" class="sidebar-toggler flex-shrink-0">
      <i class="fa fa-bars"></i>
    </a>
    <form class="d-none d-md-flex ms-4">
      <input class="form-control border-0" type="search" placeholder="Search">
    </form>
    <div class="navbar-nav align-items-center ms-auto">
      <div class="nav-item dropdown">
        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">
          <i class="fa fa-bell me-lg-2"></i>
          <span class="d-none d-lg-inline-flex">Notification</span>
        </a>
        <!-- Notification Dropdown Menu -->
        <!-- Notification Dropdown Menu Ends -->
      </div>
      <div class="nav-item dropdown">
        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">
          @if(Auth::user()->avatar)
          <img class="rounded-circle me-lg-2" src={{asset('storage/' . Auth()->user()->avatar)}} alt="" style="width: 40px; height: 40px;">
          @else
          <img class="rounded-circle me-lg-2" src={{asset("my_dashboard/img/user.jpg")}} alt="" style="width: 40px; height: 40px;">
          @endif
          
          <span class="d-none d-lg-inline-flex">{{Auth::user()->first_name. " ".Auth::user()->middle_name . " ". Auth::user()->last_name}}</span>
        </a>
        <!-- User Dropdown Menu -->
        <div class="dropdown-menu dropdown-menu-end bg-light border-0 rounded-0 rounded-bottom m-0">
          <a href="#" class="dropdown-item" data-bs-toggle="modal" data-bs-target="#profileModalLabel">My Profile</a>
          <a href="#" class="dropdown-item">Settings</a>
          <a href="#" class="dropdown-item" onclick="logoutWithSweetAlert()">Log Out</a>

          <!-- Form for logout -->
          <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
              @csrf
          </form>
        </div>
        <!-- User Dropdown Menu Ends -->
      </div>
    </div>
  </nav>
