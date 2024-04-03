@extends('home')
@section('table')
<div class="col-sm-6 col-xl-3">
  <div class="bg-light rounded d-flex align-items-center justify-content-between p-4">
      <i class="fa fa-user fa-3x text-primary"></i>
      <div class="ms-3">
          <p class="mb-2">Admin</p>
          <h6 class="mb-0">{{$totalAdmins}}</h6>
      </div>
  </div>
</div>
<div class="col-sm-6 col-xl-3">
  <div class="bg-light rounded d-flex align-items-center justify-content-between p-4">
      <i class="fa fa-users fa-3x text-primary"></i>
      <div class="ms-3">
          <p class="mb-2">Spectators</p>
          <h6 class="mb-0">{{$totalSpectators}}</h6>
      </div>
  </div>
</div>
<div class="col-sm-6 col-xl-3">
  <div class="bg-light rounded d-flex align-items-center justify-content-between p-4">
      <i class="fa fa-award fa-3x text-primary"></i>
      <div class="ms-3">
          <p class="mb-2">Education</p>
          <h6 class="mb-0">{{$totalEducation}}</h6>
      </div>
  </div>
</div>
<div class="col-sm-6 col-xl-3">
  <div class="bg-light rounded d-flex align-items-center justify-content-between p-4">
      <i class="fa fa-heart fa-3x text-primary"></i>
      <div class="ms-3">
          <p class="mb-2">Interest</p>
          <h6 class="mb-0">{{$totalInterests}}</h6>
      </div>
  </div>
</div>
<div class="col-sm-6 col-xl-3">
  <div class="bg-light rounded d-flex align-items-center justify-content-between p-4">
      <i class="fa fa-cogs fa-3x text-primary"></i>
      <div class="ms-3">
          <p class="mb-2">Skills</p>
          <h6 class="mb-0">{{$totalSkills}}</h6>
      </div>
  </div>
</div>
<div class="col-sm-6 col-xl-3">
  <div class="bg-light rounded d-flex align-items-center justify-content-between p-4">
      <i class="fa fa-briefcase fa-3x text-primary"></i>
      <div class="ms-3">
          <p class="mb-2">Experience</p>
          <h6 class="mb-0">{{$totalExperience}}</h6>
      </div>
  </div>
</div>
<div class="col-sm-6 col-xl-3">
  <div class="bg-light rounded d-flex align-items-center justify-content-between p-4">
      <i class="fa fa-calendar fa-3x text-primary"></i>
      <div class="ms-3">
          <p class="mb-2">Webinar</p>
          <h6 class="mb-0">{{$totalWebinar}}</h6>
      </div>
  </div>
</div>
<div class="col-sm-6 col-xl-3">
  <div class="bg-light rounded d-flex align-items-center justify-content-between p-4">
      <i class="fa fa-calendar fa-3x text-primary"></i>
      <div class="ms-3">
          <p class="mb-2">Blogs</p>
          <h6 class="mb-0">{{$totalBlog}}</h6>
      </div>
  </div>
</div>


</div>
</div>
<script></script>
@endsection