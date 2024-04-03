<div class="modal fade" id="addEducationModal" tabindex="-1" aria-labelledby="addInterestModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="addInterestModalLabel">Add Educational Attainment</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form action="{{route('education.store')}}" enctype="multipart/form-data" method="POST">
          @csrf
          <div class="mb-3">
            <label for="firstName" class="form-label">Grade Level</label>
            <input type="text" class="form-control" id="firstName" name="grade_level" required>
          </div>
          <div class="mb-3">
            <label for="firstName" class="form-label">School Year</label>
            <input type="text" class="form-control" id="firstName" name="school_year" required>
          </div>
          <div class="mb-3">
            <label for="firstName" class="form-label">School Name</label>
            <input type="text" class="form-control" id="firstName" name="school_name" required>
          </div>
          <div class="mb-3">
            <label for="firstName" class="form-label">Address</label>
            <input type="text" class="form-control" id="firstName" name="address" required>
          </div>
          
          <button type="submit" class="btn btn-primary">Submit</button>
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
        </form>
      </div>
    </div>
  </div>
</div>
