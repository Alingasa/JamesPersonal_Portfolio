<div class="modal fade" id="addWebinarModal" tabindex="-1" aria-labelledby="addSkillModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="addSkillModalLabel">Add Webinar/Seminar</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        @if($errors->any())
        @include('layouts.sweetalert.error')
        @endif
        <form action="{{route('webinars.store')}}" enctype="multipart/form-data" method="POST">
          @csrf
          <div class="mb-3">
            <label for="userImage" class="form-label">Certificate</label>
            <input type="file" class="form-control @error('webinar_image') is-invalid @enderror" id="userImage" name="webinar_image" required>
          </div>
          <div class="mb-3">
            <label for="firstName" class="form-label">Host Name</label>
            <input type="text" class="form-control @error('host_name') is-invalid @enderror" id="firstName" name="host_name">
          </div>
          <div class="mb-3">
            <label for="firstName" class="form-label">Agenda</label>
            <input type="text" class="form-control @error('agenda') is-invalid @enderror" id="firstName" name="agenda">
          </div>
            <div class="mb-3">
              <label for="firstName" class="form-label">Date</label>
              <input type="date" class="form-control @error('date') is-invalid @enderror" id="firstName" name="date">
            </div>
          <button type="submit" class="btn btn-primary">Submit</button>
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
        </form>
      </div>
    </div>
  </div>
</div>
