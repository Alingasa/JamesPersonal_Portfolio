<div class="modal fade" id="editCategoryModal{{$categories->id}}" tabindex="-1" aria-labelledby="editCategoryModalLabel{{$categories->id}}" aria-hidden="true">
  <div class="modal-dialog">
      <div class="modal-content">
          <div class="modal-header">
              <h5 class="modal-title" id="editUserModalLabel{{$categories->id}}">Edit Interest</h5>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <form id="editUserForm{{$categories->id}}" action="{{ route('category.update', $categories->id) }}" method="POST" enctype="multipart/form-data">
              @csrf
              @method('PUT')
              <div class="modal-body">         
                  <div class="mb-3">
                      <label for="first_name{{$categories->id}}" class="form-label">Name</label>
                      <input type="text" class="form-control" id="first_name{{$categories->id}}" name="name" value="{{$categories->name}}">
                  </div>  
              <div class="modal-footer">
                  <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                  <button type="submit" class="btn btn-primary">Save</button>
              </div>
          </form>
      </div>
  </div>
</div>