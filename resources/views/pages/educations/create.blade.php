<div class="modal fade" id="addEducationModal" tabindex="-1" aria-labelledby="addInterestModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="addInterestModalLabel">Add Educational Attainment</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        @if($errors->any())
        @include('layouts.sweetalert.error')
        @endif
        <form action="{{route('education.store')}}" enctype="multipart/form-data" method="POST">
          @csrf
          <div class="mb-3">
            <label for="firstName" class="form-label">Grade Level</label>
            <input type="text" class="form-control @error('grade_level') is-invalid @enderror" id="firstName" name="grade_level" >
          </div>
          <div class="mb-3">
            <label for="firstName" class="form-label">School Year</label>
            <input type="text" class="form-control @error('school_year') is-invalid @enderror" id="firstName" name="school_year" >
          </div>
          <div class="mb-3">
            <label for="firstName" class="form-label">School Name</label>
            <input type="text" class="form-control @error('school_name') is-invalid @enderror" id="firstName" name="school_name" >
          </div>
          <div class="mb-3">
            <label for="firstName" class="form-label">Address</label>
            <input type="text" class="form-control @error('address') is-invalid @enderror" id="firstName" name="address" >
          </div>
          
          <button type="submit" class="btn btn-primary">Submit</button>
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
        </form>
      </div>
    </div>
  </div>
</div>
