
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
                <a href="{{$experiences->experience_link}}" class="bx bx-link"></a>
              </div>
            </div>
          </div>
        </div>
        @endforeach
       
  
        
      </div>
  
    </div>
  </section>