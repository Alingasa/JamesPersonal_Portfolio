<!-- Profile Modal -->
<div class="modal fade" id="profileModalLabel" tabindex="-1" aria-labelledby="profileModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered modal-lg">
      <div class="modal-content">
          <div class="modal-header">
              <h5 class="modal-title" id="profileModalLabel">Profile</h5>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">
              <!-- Profile Form -->
              <form id="profileForm" action="{{ route('profile.update', auth()->user()->id) }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')
              <div class="text-center mb-3">
                @if(Auth::user()->avatar)
                <img id="profilePicturePreview" src="{{asset('storage/' . Auth()->user()->avatar)}}" class="img-fluid rounded-circle" alt="Avatar" style="width: 150px; height:150px;">
                @else
                <img id="profilePicturePreview" src="my_dashboard/img/user.jpg" class="img-fluid rounded-circle" alt="Avatar" width="150">
                @endif
            </div>

              <div class="text-center mb-3">
                <label for="profilePictureInput" class="btn btn-primary">
                    Choose Profile Picture
                    <input type="file" id="profilePictureInput" class="d-none" name="avatar">
                </label>
            </div>
                  <div class="row">
                        <input type="hidden" class="form-control" id="description" name="role" value="{{Auth::user()->role}}" placeholder="Enter your first name" required>
                        <input type="hidden" class="form-control" id="description" name="description" value="{{Auth::user()->description}}" placeholder="Enter your first name" required>
                      <div class="col-md-3 mb-3">
                          <label for="firstName" class="form-label"><strong>First Name</strong></label>
                          <input type="text" class="form-control" id="first_name" name="first_name" value="{{Auth::user()->first_name}}" placeholder="Enter your first name" required>
                      </div>
                      <div class="col-md-3 mb-3">
                          <label for="middleName" class="form-label"><strong>Middle Name</strong></label>
                          <input type="text" class="form-control" id="middle_name" name="middle_name" value="{{Auth::user()->middle_name}}" placeholder="Enter your middle name" required>
                      </div>
                      <div class="col-md-3 mb-3">
                          <label for="lastName" class="form-label"><strong>Last Name</strong></label>
                          <input type="text" class="form-control" id="last_name" name="last_name" value="{{Auth::user()->last_name}}" placeholder="Enter your last name" required>
                      </div>
                      <div class="col-md-3 mb-3">
                          <label for="email" class="form-label"><strong>Email</strong></label>
                          <input type="email" class="form-control" id="email" name="email" value="{{Auth::user()->email}}" placeholder="Enter your email" required>
                      </div>
                      <div class="col-md-3 mb-3">
                        <label for="firstName" class="form-label"><strong>Birthday</strong></label>
                        <input type="date" class="form-control" id="birth_date" name="birth_date" value="{{Auth::user()->birth_date}}" placeholder="Enter your first name" required>
                    </div>
                    <div class="col-md-3 mb-3">
                        <label for="firstName" class="form-label"><strong>Age</strong></label>
                        <input readonly class="form-control" id="age" name="age" value="{{Auth::user()->age}}" placeholder="Enter your first name" required>
                    </div>
                    <div class="col-md-3 mb-3">
                        <label for="email" class="form-label"><strong>Gender</strong></label>
                        <input type="text" class="form-control" id="gender" name="gender" value="{{Auth::user()->gender}}" placeholder="Enter your email" required>
                    </div>
                    <div class="col-md-3 mb-3">
                        <label for="middleName" class="form-label"><strong>Status</strong></label>
                        <input type="text" class="form-control" id="middleName" name="status" value="{{Auth::user()->status}}" placeholder="Enter your middle name" required>
                    </div>
                    <div class="col-md-3 mb-3">
                        <label for="middleName" class="form-label"><strong>Religion</strong></label>
                        <input type="text" class="form-control" id="middleName" name="religion" value="{{Auth::user()->religion}}" placeholder="Enter your middle name" required>
                    </div>
                    <div class="col-md-3 mb-3">
                        <label for="middleName" class="form-label"><strong>Phone Number</strong></label>
                        <input type="text" class="form-control" id="phone_number" name="phone_number" value="{{Auth::user()->phone_number}}" placeholder="Enter your middle name" required>
                    </div>
                    <div class="col-md-3 mb-3">
                        <label for="lastName" class="form-label"><strong>Address</strong></label>
                        <input type="text" class="form-control" id="lastName" name="address" value="{{Auth::user()->address}}" placeholder="Enter your last name" required>
                    </div>
                    <div class="col-md-3 mb-3">
                        <label for="middleName" class="form-label"><strong>Municipality</strong></label>
                        <input type="text" class="form-control" id="municipality" name="municipality" value="{{Auth::user()->municipality}}" placeholder="Enter your middle name" required>
                    </div>
                <div class="col-md-3 mb-3">
                    <label for="lastName" class="form-label"><strong>Province</strong></label>
                    <input type="text" class="form-control" id="province" name="province" value="{{Auth::user()->province}}" placeholder="Enter your last name" required>
                </div>
                <div class="col-md-3 mb-3">
                    <label for="email" class="form-label"><strong>Zip Code</strong></label>
                    <input type="text" class="form-control" id="zip_code" name="zip_code" value="{{Auth::user()->zip_code}}" placeholder="Enter your email" required>
                </div>
            <div class="col-md-3 mb-3">
                <label for="lastName" class="form-label"><strong>Facebook Url</strong></label>
                <input type="text" class="form-control" id="fb_url" name="fb_url" value="{{Auth::user()->fb_url}}" placeholder="Enter your last name" required>
            </div>
            <div class="col-md-3 mb-3">
                <label for="email" class="form-label"><strong>Instagram Url</strong></label>
                <input type="text" class="form-control" id="email" name="instagram_url" value="{{Auth::user()->instagram_url}}" placeholder="Enter your email" required>
            </div>
            <div class="col-md-3 mb-3">
              <label for="middleName" class="form-label"><strong>Linked_In Url</strong></label>
              <input type="text" class="form-control" id="middleName" name="linkedin_url" value="{{Auth::user()->linkedin_url}}" placeholder="Enter your middle name" required>
          </div>
          <div class="col-md-3 mb-3">
            <label for="middleName" class="form-label"><strong>Youtube Url</strong></label>
            <input type="text" class="form-control" id="middleName" name="youtube_url" value="{{Auth::user()->youtube_url}}" placeholder="Enter your middle name" required>
        </div>
        <div class="col-md-3 mb-3">
            <label for="middleName" class="form-label"><strong>Passion</strong></label>
            <input type="text" class="form-control" id="middleName" name="passion" value="{{Auth::user()->passion}}" placeholder="Enter your middle name" required>
        </div>
        <div class="text-center mb-3">
            <label for="middleName" class="form-label"><strong>Description</strong></label>
            <input type="text" class="form-control text-center" id="middleName" name="description" value="{{Auth::user()->description}}" placeholder="Enter your middle name" style="height:100%;" required>
        </div>
    
                      <!-- Add more fields as needed -->
                  </div>
              
          </div>
          <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
              <button type="submit" id="updateProfileBtn" class="btn btn-primary">Update</button>
          </div>
      </div>
  </div>
</div>
</form>