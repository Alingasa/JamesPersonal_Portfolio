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

      {{-- <div class="section-title">
        <h2>Resume</h2>
        <p>Check My Resume</p>
      </div>

      <div class="row">
        <div class="col-lg-6">
          <h3 class="resume-title">Summary</h3>
          <div class="resume-item pb-0">
            <h4>Objectives</h4>
            <p><em>Demonstrate capacity to adapt to new technologies, tools, and frameworks. Highlight your willingness to continuously learn and stay updated with the latest trends and advancements in the IT industry.</em></p>
          
          </div>

          <h3 class="resume-title">Education</h3>
          <div class="resume-item">
            <h4>Primary</h4>
            <h5>2014 - 2015</h5>
            <p><em>Cacao Elementary School</em></p>
            <p><em>Brgy. Cacao Hilongos, Leyte</em></p>
          </div>
          <div class="resume-item">
            <h4>Secondary</h4>
            <h5>2020 - 2021</h5>
            <p><em>Hilongos National Vocational School</em></p>
            <p><em>R.V Fulache's St. Hilongos, Leyte</em></p>
          </div>
          <div class="resume-item">
            <h4>Tertiary</h4>
            <h5>3rd year(Ongoing)</h5>
            <p><em>MLG College Of Learning Inc.</em></p>
            <p><em>Brgy. Atabay Hilongos, Leyte</em></p>
          </div>
        </div>
        <div class="col-lg-6">
          <h3 class="resume-title">Work Experience</h3>
          <div class="resume-item">
            
            <h5>None</h5>
            
          </div>
          <div class="col-lg-6">
            <h3 class="resume-title">Skills</h3>
            <div class="resume-item">
              <ul>
                <li>Video Editing (capcut)</li>
                <li>Canva Editing</li>
                <li>Laravel Framework</li>
              </ul>
            </div>

    </div>
     --}}
  </section><!-- End Resume Section -->

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