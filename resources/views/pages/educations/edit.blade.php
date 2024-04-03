<div class="modal fade" id="editEducationModal{{$educations->id}}" tabindex="-1" aria-labelledby="editExperienceModalLabel{{$educations->id}}" aria-hidden="true">
  <div class="modal-dialog">
      <div class="modal-content">
          <div class="modal-header">
              <h5 class="modal-title" id="editUserModalLabel{{$educations->id}}">Edit Education</h5>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          @if($errors->any())
          @include('layouts.sweetalert.error')
          @endif
          <form id="editUserForm{{$educations->id}}" action="{{ route('education.update', $educations->id) }}" method="POST" enctype="multipart/form-data">
              @csrf
              @method('PUT')
              <div class="modal-body">         
                  <div class="mb-3">
                      <label for="first_name{{$educations->id}}" class="form-label">Grade Level</label>
                      <input type="text" class="form-control @error('grade_level') is-invalid @enderror" id="first_name{{$educations->grade_level}}" name="grade_level" value="{{$educations->grade_level}}">
                  </div> 
                  <div class="mb-3">
                    <label for="first_name{{$educations->id}}" class="form-label">School Year</label>
                    <input type="text" class="form-control @error('school_year') is-invalid @enderror" id="first_name{{$educations->school_year}}" name="school_year" value="{{$educations->school_year}}">
                </div> 
                <div class="mb-3">
                  <label for="first_name{{$educations->id}}" class="form-label">School Name</label>
                  <input type="text" class="form-control @error('school_name') is-invalid @enderror" id="first_name{{$educations->school_name}}" name="school_name" value="{{$educations->school_name}}">
              </div> 
              <div class="mb-3">
                <label for="first_name{{$educations->id}}" class="form-label">Address</label>
                <input type="text" class="form-control @error('address') is-invalid @enderror" id="first_name{{$educations->address}}" name="address" value="{{$educations->address}}">
            </div> 
              <div class="modal-footer">
                  <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                  <button type="submit" class="btn btn-primary">Save</button>
              </div>
          </form>
      </div>
  </div>
</div>