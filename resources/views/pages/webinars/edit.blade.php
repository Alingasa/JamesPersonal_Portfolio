<div class="modal fade" id="editWebinarModal{{$webinars->id}}" tabindex="-1" aria-labelledby="editInterestModalLabel{{$webinars->id}}" aria-hidden="true">
  <div class="modal-dialog">
      <div class="modal-content">
          <div class="modal-header">
              <h5 class="modal-title" id="editUserModalLabel{{$webinars->id}}">Edit Webinar/Seminar</h5>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <form id="editUserForm{{$webinars->id}}" action="{{ route('webinars.update', $webinars->id) }}" method="POST" enctype="multipart/form-data">
              @csrf
              @method('PUT')
              <div class="modal-body">         
                  
                  <div class="mb-3 text-danger">
                  
                    <label for="userImage" class="form-label">Update Certificate Image</label>
                    <input type="file" class="form-control" id="userImage" name="webinar_image" >
          
                </div>
                 
                  <div class="mb-3">
                      <label for="first_name{{$webinars->id}}" class="form-label">Host Name</label>
                      <input type="text" class="form-control" id="first_name{{$webinars->id}}" name="host_name" value="{{$webinars->host_name}}">
                  </div> 
                  <div class="mb-3">
                    <label for="first_name{{$webinars->id}}" class="form-label">Agenda</label>
                    <input type="text" class="form-control" id="first_name{{$webinars->id}}" name="agenda" value="{{$webinars->agenda}}">
                </div> 
              <div class="modal-footer">
                  <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                  <button type="submit" class="btn btn-primary">Save</button>
              </div>
          </form>
      </div>
  </div>
</div>