
<div class="col-lg-3 col-md-4 pb-4">
  <div class="icon-box">
      @if($interests->image_logo)
          <i><img src="{{ asset('storage/'. $interests->image_logo) }}" alt="Default Profile Picture" style="width: 50px;" class="img-profile rounded-square"></i>
      @else
         <i><img src="{{ asset('my_dashboard/img/user.jpg') }}" alt="Default Profile Picture" style="width: 50px;" class="img-profile rounded-square"></i> 
      @endif
      <h3 class="pl-3 mb-0 me-5">{{$interests->name}}</h3>
  </div>
</div>
