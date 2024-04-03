<section id="education" class="resume">
  <div class="container">

    <div class="section-title"> <!-- Added text-center class -->
      <h2>Education</h2>
    </div>

    <div class="row justify-content-center"> <!-- Added justify-content-center class -->
      <div class="col-lg-6">
        <h3 class="resume-title text-center">Education</h3> <!-- Added text-center class -->
        @php $totalItems = count($education); @endphp
        @if ($totalItems >= 3)
        <div class="row">
          <div class="col-lg-6">
            @foreach($education as $index => $educations)
              @if ($index < ($totalItems / 2))
                <div class="resume-item">
                  <h4>{{$educations->grade_level}}</h4>
                  <h5>{{$educations->school_year}}</h5>
                  <p><em>{{$educations->school_name}}</em></p>
                  <p>{{$educations->address}}</p>
                </div>
              @endif
            @endforeach
          </div>
          <div class="col-lg-6">
            @foreach($education as $index => $educations)
              @if ($index >= ($totalItems / 2))
                <div class="resume-item">
                  <h4>{{$educations->grade_level}}</h4>
                  <h5>{{$educations->school_year}}</h5>
                  <p><em>{{$educations->school_name}}</em></p>
                  <p>{{$educations->address}}</p>
                </div>
              @endif
            @endforeach
          </div>
        </div>
        @else
          @foreach($education as $educations)
            <div class="resume-item">
              <h4>{{$educations->grade_level}}</h4>
              <h5>{{$educations->school_year}}</h5>
              <p><em>{{$educations->school_name}}</em></p>
              <p>{{$educations->address}}</p>
            </div>
          @endforeach
        @endif
      </div>
    </div>

  </div>
</section><!-- End Resume Section -->
