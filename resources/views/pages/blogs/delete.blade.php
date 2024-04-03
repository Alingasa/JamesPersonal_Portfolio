<!-- Delete Modal -->
<div class="modal fade" id="deleteModal{{$blogs->id}}" tabindex="-1" role="dialog" aria-labelledby="deleteModalLabel{{$blogs->id}}" aria-hidden="true">
  <div class="modal-dialog" role="document">
      <div class="modal-content">
          <div class="modal-header">
              <h5 class="modal-title" id="deleteModalLabel{{$blogs->id}}">Confirm Delete</h5>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
              </button>
          </div>
          <form id="deleteUserForm{{$blogs->id}}" action="{{ route('blogs.destroy', $blogs->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('DELETE')
          <div class="modal-body text-center">
            @if($blogs->blog_image)
            <img id="profilePicturePreview{{$blogs->id}}" src="{{asset('storage/' . $blogs->blog_image)}}" class="img-fluid rounded-square" alt="Avatar" style="width: 150px; height:150px;">
            @else
            <img id="profilePicturePreview{{$blogs->id}}" src="my_dashboard/img/user.jpg" class="img-fluid rounded-square" alt="Avatar" width="150">
            @endif
              <p>Are you sure you want to delete <span class="text-danger">{{  $blogs->title  }}</span>?</p>
          </div>
          <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
              <button type="submit" class="btn btn-danger">Delete</button>
          </div>
          </form>
      </div>
  </div>
</div>
