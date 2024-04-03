<div class="modal fade" id="editblogModal{{$blogs->id}}" tabindex="-1" aria-labelledby="editExperienceModalLabel{{$blogs->id}}" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h6 class="mb-0"><i class="fas fa-book me-2"></i>My blogs</h6>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            @if($errors->any())
            @include('layouts.sweetalert.error')
            @endif
            <form id="editUserForm{{$blogs->id}}" action="{{ route('blogs.update', $blogs->id) }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="modal-body">         
                    <div class="text-center mb-3">
                        @if($blogs->blog_image)
                        <img id="profilePicturePreview{{$blogs->id}}" src="{{asset('storage/' . $blogs->blog_image)}}" class="img-fluid rounded-square" alt="Avatar" style="width: 150px; height:150px;">
                        @else
                        <img id="profilePicturePreview{{$blogs->id}}" src="my_dashboard/img/user.jpg" class="img-fluid rounded-square" alt="Avatar" style="width: 150px; height:150px;">
                        @endif
                    </div>
                    <div class="text-center mb-3">
                    
                        <label for="userImage" class="form-label">Choose Image</label>
                        <input type="file" class="form-control" id="userImage" name="blog_image" >
              
                    </div>
                
                    <div class="form-group">
                        <strong>Categories</strong>
                        <select  class="form-control" name="category_id" id="course_id">
                                   @foreach($cat as $id=>$name)   
                            <option value="{{$id}}">{{$name}}</option>
                            @endforeach
                            </select>
                    </div>
                    <div class="mb-3">
                        <label for="firstName" class="form-label">Title</label>
                        <input type="text" class="form-control @error('title') is-invalid @enderror" id="firstName" name="title" required>
                      </div>
                      <div class="mb-3">
                        <label for="firstName" class="form-label">Content</label>
                        <input type="text" class="form-control @error('content') is-invalid @enderror" id="firstName" name="content" required>
                      </div>
                      
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Save</button>
                </div>
            </form>
        </div>
    </div>
  </div>