<section id="experience" class="services">
  <div class="container">
      <div class="section-title">
          <h2>Experience</h2>
          <p>My Experience</p>
      </div>

      <div class="row">
          @foreach($experience as $experiences)
          <div class="col-lg-4 col-md-6 d-flex align-items-stretch">
              <div class="icon-box">
                  <div class="icon"><i class="bi bi-pen"></i></div>
                  <h4><a href="#">{{ $experiences->experience_name }}</a></h4>
                  <p>{{ $experiences->description }}</p>
              </div>
          </div>
          @endforeach
      </div>
  </div>
</section>
