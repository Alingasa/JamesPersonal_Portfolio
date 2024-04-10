<h1><a href="{{ url('/') }}">{{$user->first_name." ". $user->last_name}}</a></h1>
<!-- Uncomment below if you prefer to use an image logo -->
<!-- <a href="index.html" class="mr-auto"><img src="assets/img/logo.png" alt="" class="img-fluid"></a> -->
<h2>I'm a passionate to be a <span>{{$user->passion}}</span> someday.</h2>

<nav id="navbar" class="navbar">
  <ul>
    <li><a class="nav-link active" href="#header">Home</a></li>
    <li><a class="nav-link" href="#about">About</a></li>
    <li><a class="nav-link" href="#education">Education</a></li>
    <li><a class="nav-link" href="#skills">Skills</a></li>
    <li><a class="nav-link" href="#experience">Experience</a></li>
    <li><a class="nav-link" href="#blog">Blog</a></li>
    <li><a class="nav-link" href="#contact">Contact</a></li>
    <li><a href="{{ route('login') }}" class="nav-link text-danger">Log In</a></li>
    <li><a href="{{ route('register') }}" class="nav-link text-primary">Sign Up</a></li>
    
  </ul>
  <i class="bi bi-list mobile-nav-toggle"></i>
</nav><!-- .navbar -->

<div class="social-links">
  <a href="{{$user->fb_url}}" class="facebook"><i class="bi bi-facebook"></i></a>
  <a href="{{$user->instagram_url}}" class="instagram"><i class="bi bi-instagram"></i></a>
  <a href="{{$user->linkedin_url}}" class="linkedin"><i class="bi bi-linkedin"></i></a>
  <a href="{{$user->youtube_url}}" class="twitter"><i class="bi bi-youtube"></i></a>
</div>
<div>

</div>
</div>
</header><!-- End Header -->