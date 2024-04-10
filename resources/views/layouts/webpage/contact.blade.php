<section id="contact" class="contact">
  <div class="container">

    <div class="section-title">
      <h2>Contact</h2>
      <p>Contact Me</p>
    </div>

    <div class="row mt-2">

      <div class="col-md-6 d-flex align-items-stretch">
        <div class="info-box">
          <i class="bx bx-map"></i>
         
          <h3>My Address</h3>
          @foreach($users as $userContact)
          <p>{{$userContact->address. " ". $userContact->municipality . ",". $userContact->province }}</p>
        </div>
        @endforeach
      </div>

      <div class="col-md-6 mt-4 mt-md-0 d-flex align-items-stretch">
        <div class="info-box">
          <i class="bx bx-share-alt"></i>
          <h3>Social Profiles</h3>
          <div class="social-links">
            @foreach($users as $links)
            <a href="{{$links->fb_url}}" class="facebook"><i class="bi bi-facebook"></i></a>
            <a href="{{$links->instagram_url}}" class="instagram"><i class="bi bi-instagram"></i></a>
            <a href="{{$links->linkedin_url}}" class="linkedin"><i class="bi bi-linkedin"></i></a>
            <a href="{{$links->youtube_url}}" class="twitter"><i class="bi bi-youtube"></i></a>
            @endforeach
          </div>
        </div>
      </div>

      <div class="col-md-6 mt-4 d-flex align-items-stretch">
        <div class="info-box">
          <i class="bx bx-envelope"></i>
          @foreach($users as $email)
          <h3>Email Me</h3>
          <p>{{$email->email}}</p>
        </div>
        @endforeach
      </div>
      <div class="col-md-6 mt-4 d-flex align-items-stretch">
        <div class="info-box">
          <i class="bx bx-phone-call"></i>
          <h3>Call Me</h3>
          @foreach($users as $callme)
          <p>{{$callme->phone_number}}</p>
          @endforeach
        </div>
      </div>
    </div>

    <form action="{{route('messages.store')}}" method="POST" class="php-email-form mt-4">
      @csrf
      <div class="row">
        @if($errors->any())
        @include('layouts.sweetalert.error')
        @endif
        <div class="col-md-6 form-group">
          <input type="text" name="name" class="form-control" id="name" value="{{old('name')}}" placeholder="Your Name" required>
        </div>
        <div class="col-md-6 form-group mt-3 mt-md-0">
          <input type="email" class="form-control @error('email') is-invalid @enderror" name="email" id="email" value="{{old('email')}}" placeholder="Your Email" required>
          @error('email')
          <p class="text-danger">{{$message}}</p>
          @enderror
        </div>
      </div>
      <div class="form-group mt-3">
        <input type="text" class="form-control" name="subject" id="subject" value="{{old('subject')}}" placeholder="Subject" required>
      </div>
      <div class="form-group mt-3">
        <textarea class="form-control" name="message"  rows="5" placeholder="Message" value="{{old('message')}}"  required></textarea>
      </div>
      <div class="my-3">
        <div class="loading">Loading</div>
        <div class="error-message"></div>
        <div class="sent-message">Your message has been sent. Thank you!</div>
      </div>
      <div class="text-center"><button type="submit">Send Message</button></div>
    </form>

  </div>
</section>