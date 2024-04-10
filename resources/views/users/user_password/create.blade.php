<div class="modal fade" id="editUserModal{{$users->id}}" tabindex="-1" aria-labelledby="editUserModalLabel{{$users->id}}" aria-hidden="true">
  <div class="modal-dialog">
      <div class="modal-content">
          <div class="modal-header">
              <h5 class="modal-title text-danger" id="editUserModalLabel{{$users->id}}">Change Password ?</h5>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          @if($errors->any())
          @include('layouts.sweetalert.error')
          @endif
          <form action="{{route('user.edit' , $users->id)}}" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="modal-body">
              <div class="text-center mb-3">
                @if($users->avatar)
                <img id="profilePicturePreview{{$users->id}}" src={{asset('storage/' . $users->avatar)}} class="img-fluid rounded-square" alt="Avatar" style="width: 190px; height:190px;">
                @else
                <img id="profilePicturePreview{{$users->id}}" src={{asset("my_dashboard/img/user.jpg")}} class="img-fluid rounded-circle" alt="Avatar" style="width: 190px; height:190px;">
                @endif
            </div>
            <div class="text-center mb-3">
            <h3 >{{$users->first_name . ' '. $users->last_name }}</h3>
          </div>
            <div class="mb-3">
              <label for="firstName" class="form-label{{$users->id}}">Password</label>
              <input type="password" class="form-control @error('password') is-invalid @enderror" id="firstName" value="{{old('password')}}" name="password" placeholder="Enter New Password" >
            </div>
            <div class="mb-3">
              <label for="firstName" class="form-label{{$users->id}}">Password</label>
              <input type="password" class="form-control" id="firstName" name="confirmation-password" placeholder="Confirm Password" >
            </div>
              <div class="modal-footer">
                  <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                  <button type="submit" class="btn btn-primary">Save</button>
              </div>
          </form>
      </div>
  </div>
</div>