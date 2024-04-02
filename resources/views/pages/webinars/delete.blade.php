<!-- Delete Modal -->
<div class="modal fade" id="deleteModal{{$webinars->id}}" tabindex="-1" role="dialog" aria-labelledby="deleteModalLabel{{$webinars->id}}" aria-hidden="true">
  <div class="modal-dialog" role="document">
      <div class="modal-content">
          <div class="modal-header">
              <h5 class="modal-title" id="deleteModalLabel{{$webinars->id}}">Confirm Delete</h5>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
              </button>
          </div>
          <form id="deleteUserForm{{$webinars->id}}" action="{{ route('webinars.destroy', $webinars->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('DELETE')
          <div class="modal-body text-center">
            @if($webinars->webinar_image)
            <img id="profilePicturePreview{{$webinars->id}}" src="{{asset('storage/' . $webinars->webinar_image)}}" class="img-fluid rounded-square" alt="Avatar" style="width: 150px; height:150px;">
            @else
            <img id="profilePicturePreview{{$webinars->id}}" src="my_dashboard/img/user.jpg" class="img-fluid rounded-square" alt="Avatar" width="150">
            @endif
              <p>Are you sure you want to delete?</p>
              <h2 class="text-center text-danger">{{$webinars->agenda}}</h2>
          </div>
          <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
              <button type="submit" class="btn btn-danger">Delete</button>
          </div>
          </form>
      </div>
  </div>
</div>
