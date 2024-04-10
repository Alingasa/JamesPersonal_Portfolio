<div class="modal fade" id="addUserModal" tabindex="-1" aria-labelledby="addUserModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="addUserModalLabel">Add User</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        @if($errors->any())
        @include('layouts.sweetalert.error')
        @endif
        <form action="{{route('user.store')}}" enctype="multipart/form-data" method="POST">
          @csrf
          <div class="mb-3">
            <label for="userImage" class="form-label">Choose Image</label>
            <input type="file" class="form-control @error('first_name') is-invalid @enderror" id="userImage" name="avatar">
          </div>
          <div class="mb-3">
            <input type="hidden" class="form-control" name="role" value="spectator" required>
          </div>
          <div class="mb-3">
            <label for="firstName" class="form-label">First Name</label>
            <input type="text" class="form-control @error('first_name') is-invalid @enderror" id="firstName" name="first_name" value="{{ old('first_name') }}" autocomplete="first_name" autofocus>
          </div>
          <div class="mb-3">
            <label for="middleName" class="form-label">Middle Name</label>
            <input type="text" class="form-control @error('middle_name') is-invalid @enderror" id="middleName" name="middle_name" value="{{ old('middle_name') }}" autocomplete="middle_name" autofocus>
          </div>
          <div class="mb-3">
            <label for="middleName" class="form-label">Last Name</label>
            <input type="text" class="form-control @error('last_name') is-invalid @enderror" id="middleName" name="last_name" value="{{ old('last_name') }}" autocomplete="last_name" autofocus>
          </div>
          <div class="mb-3">
            <label for="email" class="form-label">Email</label>
            <input type="email" class="form-control @error('email') is-invalid @enderror" id="email" name="email" value="{{ old('email') }}" autocomplete="email" autofocus>
          </div>
          <div class="mb-3">
            <label for="password" class="form-label">Password</label>
            <input type="password" class="form-control @error('password') is-invalid @enderror" id="password" name="password" value="{{ old('password') }}" autocomplete="password" autofocus>
          </div>
          <div class="mb-3">
            <label for="confirmPassword" class="form-label">Confirm Password</label>
            <input type="password" class="form-control @error('confirmation-password') is-invalid @enderror" id="confirmPassword" name="password_confirmation" value="{{ old('password_confirmation') }}" autocomplete="confirmation-password" autofocus>
          </div>
          <button type="submit" class="btn btn-primary">Submit</button>
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
        </form>
      </div>
    </div>
  </div>
</div>
