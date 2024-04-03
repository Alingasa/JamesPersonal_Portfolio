<div class="modal fade" id="addBlogModal" tabindex="-1" aria-labelledby="addBlogModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="addInterestModalLabel">Add Blog</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        @if($errors->any())
        @include('layouts.sweetalert.error')
        @endif
        <form action="{{route('blogs.store')}}" enctype="multipart/form-data" method="POST">
          @csrf
          <div class="form-group">
            <strong>Categories</strong>
            <select  class="form-control" name="category_id" id="course_id">
                       @foreach($cat as $id=>$name)   
                <option value="{{$id}}">{{$name}}</option>
                @endforeach
                </select>
        </div>
        <div class="mb-3">
          <label for="userImage" class="form-label">Image</label>
          <input type="file" class="form-control" id="userImage" name="blog_image" >
        </div>
          <div class="mb-3">
            <label for="firstName" class="form-label">Title</label>
            <input type="text" class="form-control @error('title') is-invalid @enderror" id="firstName" name="title" required>
          </div>
          <div class="mb-3">
            <label for="description" class="form-label">Content</label>
            <input class="form-control @error('content') is-invalid @enderror" id="description" name="content" rows="4" placeholder="Enter your description"></input>
          </div>
          <button type="submit" class="btn btn-primary">Submit</button>
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
        </form>
      </div>
    </div>
  </div>
</div>
