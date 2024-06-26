@foreach ($users as $user)
<section id="about" class="about">
<div class="about-me container">

  <div class="section-title">
    <h2>About</h2>
    <p>Learn more about me</p>
  </div>

  <div class="row">
    <div class="col-lg-4" data-aos="fade-right">
      
      @if($user->avatar)
      <img src={{ asset('storage/'. $user->avatar) }} class="img-fluid" style="width: 100%; height:100%;">
      @else
      <img src={{ asset("my_dashboard/img/user.jpg") }} class="img-fluid" style="width: 100%; height: 100%;"></td>
      @endif
    </div>
    
    <div class="col-lg-8 pt-4 pt-lg-0 content" data-aos="fade-left">
      <h3>Profile</h3>
    <p>

    </p>
      <div class="row">
        <div class="col-lg-6">
          <ul>
            <li><i class="bi bi-chevron-right"></i> <strong>Birthday:</strong> <span>{{$user->birth_date}}</span></li>
            <li><i class="bi bi-chevron-right"></i> <strong>Phone:</strong> <span>{{$user->phone_number}}</span></li>
            <li><i class="bi bi-chevron-right"></i> <strong>Address:</strong> <span>{{$user->address}}</span></li>
            <li><i class="bi bi-chevron-right"></i> <strong>Municipality:</strong> <span>{{$user->municipality}}</span></li>
            <li><i class="bi bi-chevron-right"></i> <strong>Province:</strong> <span>{{$user->province}}</span></li>
          </ul>
        </div>
        <div class="col-lg-6">
          <ul>
            <li><i class="bi bi-chevron-right"></i> <strong>Age:</strong> <span>{{$user->age}}</span></li>
            <li><i class="bi bi-chevron-right"></i> <strong>Zip Code:</strong> <span>{{$user->zip_code}}</span></li>
            <li><i class="bi bi-chevron-right"></i> <strong>Email:</strong> <span>{{$user->email}}</span></li>
            <li><i class="bi bi-chevron-right"></i> <strong>Status:</strong> <span>{{$user->status}}</span></li>
            <li><i class="bi bi-chevron-right"></i> <strong>Religion:</strong> <span>{{$user->religion}}</span></li>
          </ul>
        </div>
      </div>
      <p>
      "{{$user->description}}"
      </p>
    </div>
  </div>
</div>
@endforeach