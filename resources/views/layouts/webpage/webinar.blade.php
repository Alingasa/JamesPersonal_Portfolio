
  <div class="testimonials container">

    <div class="section-title">
      <h2>Webinars/Seminars</h2>
    </div>

    <div class="testimonials-slider swiper" data-aos="fade-up" data-aos-delay="100">
      <div class="swiper-wrapper">

        @foreach ($webinar as $webinars)
        <div class="swiper-slide webinar-slide">
          <div class="testimonial-item">
            <div class="webinar-info">
              <h3 class="webinar-title text-danger">Agenda: {{$webinars->agenda}}</h3>
              <p class="webinar-date">Date: {{ $webinars->date}}</p>
              <p class="webinar-host">Hosted by {{$webinars->host_name}}</p>
            </div>
            @if($webinars->webinar_image)
            <div class="webinar-image">
              <img src="{{'storage/'. $webinars->webinar_image}}" class="testimonial-img" alt="Webinar Image" style="width: 80px; height:80px;">
            </div>
            @endif
          </div><!-- End testimonial item -->
        </div>
        @endforeach

      </div>
    </div>
  </div>

