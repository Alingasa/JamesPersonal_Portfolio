<!-- Delete Modal -->
<div class="modal fade" id="deleteModal{{$users->id}}" tabindex="-1" role="dialog" aria-labelledby="deleteModalLabel{{$users->id}}" aria-hidden="true">
  <div class="modal-dialog" role="document">
      <div class="modal-content">
          <div class="modal-header">
              <h5 class="modal-title" id="deleteModalLabel{{$users->id}}">Confirm Delete</h5>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
              </button>
          </div>
          <form id="deleteUserForm{{$users->id}}" action="{{ route('user.destroy', $users->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('DELETE')
          <div class="modal-body">
            <div class="text-center mb-3">
                @if($users->avatar)
                <img id="profilePicturePreview{{$users->id}}" src="{{asset('storage/' . $users->avatar)}}" class="img-fluid rounded-circle" alt="Avatar" style="width: 130px; height:130px;">
                @else
                <img id="profilePicturePreview{{$users->id}}" src="my_dashboard/img/user.jpg" class="img-fluid rounded-circle" alt="Avatar" style="width: 130px; height:130px;">
                @endif
                <p>Are you sure you want to delete <span class="text-danger">{{ '"' . $users->first_name . ' ' . $users->middle_name . '"' }}</span>?</p>
            </div>
              
          </div>
          <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
              <button type="submit" class="btn btn-danger">Delete</button>
          </div>
          </form>
      </div>
  </div>
</div>
