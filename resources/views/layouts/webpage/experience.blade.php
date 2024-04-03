{{-- 
<section id="experience" class="services">
    <div class="container">

      <div class="section-title">
        <h2>Experiences</h2>
        <p>My Experiences</p>
      </div>

      <div class="row">
       
        @foreach($experience as $experiences)
        <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4 mt-md-0">
          <div class="icon-box">
            <div>
              @if($experiences->experience_image)
              <img src={{ asset("storage/". $experiences->experience_image) }} alt="Default Profile Picture" style="width: 100px; height:100px;" class="img-profile rounded-square">
              @else
              <img src={{ asset("my_dashboard/img/user.jpg") }} alt="Default Profile Picture" style="width: 100px; height:100px;" class="img-profile rounded-square">
              @endif
            </div>
            <h4><a href="">{{$experiences->experience_name}}</a></h4>
            <p>{{$experiences->description}}</p>
          </div>
        </div>
       @endforeach

      
      </div>

    </div>
  </section><!-- End Services Section --> --}}
  <section id="experience" class="portfolio">
    <div class="container">
  
      <div class="section-title">
        <h2>Experience</h2>
      </div>
  
      <div class="row">
        <div class="col-lg-12 d-flex justify-content-center">
          <ul id="portfolio-flters">
            <li data-filter="*" class="filter-active">Experiences/PastWorks</li>
          </ul>
        </div>
      </div>
  
      <div class="row portfolio-container">
  
      @foreach($experience as $experiences)
        <div class="col-lg-4 col-md-6 portfolio-item filter-app">
          <div class="portfolio-wrap">
            @if($experiences->experience_image)
            <img src="{{'storage/'. $experiences->experience_image}}" class="img-fluid" alt="" >
            @else
            <img src="porfolio/assets/img/portfolio/sis.png" class="img-fluid" alt="">
          @endif
            <div class="portfolio-info">
              <h4>{{$experiences->experience_name}}</h4>
              <div class="portfolio-links">
                <a href="{{$experiences->description}}" class="bx bx-link"></a>
              </div>
            </div>
          </div>
        </div>
        @endforeach
       
  
        
      </div>
  
    </div>
  </section>