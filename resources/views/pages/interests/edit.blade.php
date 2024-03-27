<div class="modal fade" id="editInterestModal{{$interests->id}}" tabindex="-1" aria-labelledby="editInterestModalLabel{{$interests->id}}" aria-hidden="true">
  <div class="modal-dialog">
      <div class="modal-content">
          <div class="modal-header">
              <h5 class="modal-title" id="editUserModalLabel{{$interests->id}}">Edit Interest</h5>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <form id="editUserForm{{$interests->id}}" action="{{ route('interests.update', $interests->id) }}" method="POST" enctype="multipart/form-data">
              @csrf
              @method('PUT')
              <div class="modal-body">         
                  <div class="text-center mb-3">
                      @if($interests->image_logo)
                      <img id="profilePicturePreview{{$interests->id}}" src="{{asset('storage/' . $interests->image_logo)}}" class="img-fluid rounded-square" alt="Avatar" style="width: 150px; height:150px;">
                      @else
                      <img id="profilePicturePreview{{$interests->id}}" src="my_dashboard/img/user.jpg" class="img-fluid rounded-square" alt="Avatar" width="150">
                      @endif
                  </div>
                  <div class="text-center mb-3">
                  
                      <label for="userImage" class="form-label">Choose Logo</label>
                      <input type="file" class="form-control" id="userImage" name="image_logo" >
            
                  </div>
                  <div class="mb-3">
                      <label for="first_name{{$interests->id}}" class="form-label">Name</label>
                      <input type="text" class="form-control" id="first_name{{$interests->id}}" name="name" value="{{$interests->name}}">
                  </div>  
              <div class="modal-footer">
                  <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                  <button type="submit" class="btn btn-primary">Save</button>
              </div>
          </form>
      </div>
  </div>
</div>