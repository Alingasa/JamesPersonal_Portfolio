<div class="modal fade" id="editSkillModal{{$skills->id}}" tabindex="-1" aria-labelledby="editSkillModalLabel{{$skills->id}}" aria-hidden="true">
  <div class="modal-dialog">
      <div class="modal-content">
          <div class="modal-header">
              <h5 class="modal-title" id="editUserModalLabel">Edit Skill</h5>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <form id="editUserForm" action="{{ route('skills.update', $skills->id) }}" method="POST" enctype="multipart/form-data">
              @csrf
              @method('PUT')
              <div class="modal-body">         
                  
                  <div class="mb-3">
                      <label for="first_name" class="form-label">Name</label>
                      <input type="text" class="form-control" id="first_name" name="skill_name" value="{{$skills->skill_name}}">
                  </div>  
                  <div class="mb-3">
                    <label for="first_name" class="form-label">Percentage</label>
                    <input type="number" class="form-control" id="first_name" name="percentage" value="{{$skills->percentage}}">
                </div> 
              <div class="modal-footer">
                  <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                  <button type="submit" class="btn btn-primary">Save</button>
              </div>
          </form>
      </div>
  </div>
</div>