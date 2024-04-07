<div class="modal fade" id="editExperienceModal{{$experiences->id}}" tabindex="-1" aria-labelledby="editExperienceModalLabel{{$experiences->id}}" aria-hidden="true">
  <div class="modal-dialog">
      <div class="modal-content">
          <div class="modal-header">
              <h5 class="modal-title" id="editUserModalLabel{{$experiences->id}}">Edit Experience</h5>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <form id="editUserForm{{$experiences->id}}" action="{{ route('experiences.update', $experiences->id) }}" method="POST" enctype="multipart/form-data">
              @csrf
              @method('PUT')
              <div class="modal-body">         
                  <div class="text-center mb-3">
                      @if($experiences->experience_image)
                      <img id="profilePicturePreview{{$experiences->id}}" src="{{asset('storage/' . $experiences->experience_image)}}" class="img-fluid rounded-square" alt="Avatar" style="width: 150px; height:150px;">
                      @else
                      <img id="profilePicturePreview{{$experiences->id}}" src="my_dashboard/img/user.jpg" class="img-fluid rounded-square" alt="Avatar" style="width: 150px; height:150px;">
                      @endif
                  </div>
                  <div class="text-center mb-3">
                  
                      <label for="userImage" class="form-label">Choose Image</label>
                      <input type="file" class="form-control" id="userImage" name="experience_image" >
            
                  </div>
                  <div class="mb-3">
                      <label for="first_name{{$experiences->id}}" class="form-label">Name</label>
                      <input type="text" class="form-control" id="first_name{{$experiences->id}}" name="experience_name" value="{{$experiences->experience_name}}">
                  </div> 
                  <div class="mb-3">
                    <label for="first_name{{$experiences->id}}" class="form-label">Link</label>
                    <input type="text" class="form-control" id="first_name{{$experiences->id}}" name="experience_link" value="{{$experiences->experience_link}}">
            </div>
              <div class="modal-footer">
                  <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                  <button type="submit" class="btn btn-primary">Save</button>
              </div>
          </form>
      </div>
  </div>
</div>