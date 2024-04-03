<!-- Delete Modal -->
<div class="modal fade" id="deleteModal{{$educations->id}}" tabindex="-1" role="dialog" aria-labelledby="deleteModalLabel{{$educations->id}}" aria-hidden="true">
  <div class="modal-dialog" role="document">
      <div class="modal-content">
          <div class="modal-header">
              <h5 class="modal-title" id="deleteModalLabel{{$educations->id}}">Confirm Delete</h5>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
              </button>
          </div>
          <form id="deleteUserForm{{$educations->id}}" action="{{ route('education.destroy', $educations->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('DELETE')
          <div class="modal-body text-center">
              <p>Are you sure you want to delete <span class="text-danger">{{  $educations->school_name  }}</span>?</p>
          </div>
          <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
              <button type="submit" class="btn btn-danger">Delete</button>
          </div>
          </form>
      </div>
  </div>
</div>
