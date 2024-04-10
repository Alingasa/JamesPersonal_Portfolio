@include('layouts.webpage.header')

<body>

  <!-- ======= Header ======= -->
  <header id="header">
    <div class="container">
      @foreach ($users as $user)
          
      @include('layouts.webpage.navbar')
     

  <!-- ======= About Section ======= -->


    <!-- ======= About Me ======= -->
     @include('layouts.webpage.about')
    <!-- End About Me -->

    @endforeach

    <!-- ======= Skills  ======= -->
   {{-- @include('layouts.webpage.skills') --}}
    <!-- End Skills -->

    <!-- ======= Interests ======= -->
    <div class="interests container">

      <div class="section-title">
        <h2>Interests</h2>
      </div>
    
      <div class="row">
        
    @foreach($interest as $interests)
    @include('layouts.webpage.interest')
  
    @endforeach
    </div>
    <!-- End Interests -->

 


  </section><!-- End About Section -->

  <!-- ======= Resume Section ======= -->
  <section id="skills" class="resume">
    <div class="counts container">
    <div class="skills container">
  
      <div class="section-title">
        <h2>Skills</h2>
      </div>
      <div class="row skills-content">
          
  @foreach ($skill as $skills)
     @include('layouts.webpage.skills')
     
     @endforeach
    </div>

  </div>
</div>
  </section>
  <!-- End Resume Section -->

  <!-- ======= Experiences Section ======= -->
 
   @include('layouts.webpage.experience')
 
  <!-- End Experiences Section -->

  <!-- ======= Webinar Section ======= -->
   @include('layouts.webpage.webinar')
  <!-- End Webinar Section -->

   <!-- ======= Blog Section ======= -->
   @include('layouts.webpage.blog')
<!-- End Blog Section -->

  <!-- ======= Contact Section ======= -->
   @include('layouts.webpage.contact')
  <!-- End Contact Section -->
  @include('layouts.webpage.education')

  <div class="credits">
    <!-- All the links in the footer should remain intact. -->
    <!-- You can delete the links only if you purchased the pro version. -->
    <!-- Licensing information: https://bootstrapmade.com/license/ -->
    <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/personal-free-resume-bootstrap-template/ -->
    Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
  </div>

  <!-- Vendor JS Files -->
  
  @include('layouts.webpage.footer')