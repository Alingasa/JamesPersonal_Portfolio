<div class="modal fade" id="addWebinarModal" tabindex="-1" aria-labelledby="addSkillModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="addSkillModalLabel">Add Webinar/Seminar</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form action="{{route('webinars.store')}}" enctype="multipart/form-data" method="POST">
          @csrf
          <div class="mb-3">
            <label for="userImage" class="form-label">Certificate</label>
            <input type="file" class="form-control" id="userImage" name="webinar_image" >
          </div>
          <div class="mb-3">
            <label for="firstName" class="form-label">Host Name</label>
            <input type="text" class="form-control" id="firstName" name="host_name" required>
          </div>
          <div class="mb-3">
            <label for="firstName" class="form-label">Agenda</label>
            <input type="text" class="form-control" id="firstName" name="agenda" required>
          </div>
            <div class="mb-3">
              <label for="firstName" class="form-label">Date</label>
              <input type="date" class="form-control" id="firstName" name="date" required>
            </div>
          <button type="submit" class="btn btn-primary">Submit</button>
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
        </form>
      </div>
    </div>
  </div>
</div>
