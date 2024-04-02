<div class="modal fade" id="editContactModal{{$contacts->id}}" tabindex="-1" aria-labelledby="editUserModalLabel{{$contacts->id}}" aria-hidden="true">
  <div class="modal-dialog modal-lg">
      <div class="modal-content">
          <div class="modal-header">
              <h5 class="modal-title text-danger" id="editUserModalLabel{{$contacts->id}}">Edit Contacts</h5>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <form action="{{route('contacts.edit', $contacts->id)}}" enctype="multipart/form-data">
              @csrf
              @method('PUT')
              <div class="modal-body">
                  <div class="row">
                    <div class="text-center mb-3">
                      @if($contacts->avatar)
                      <img id="profilePicturePreview{{$contacts->id}}" src={{asset('storage/' . $contacts->avatar)}} class="img-fluid rounded-square" alt="Avatar" style="width: 190px; height:190px;">
                      @else
                      <img id="profilePicturePreview{{$contacts->id}}" src={{asset("my_dashboard/img/user.jpg")}} class="img-fluid rounded-circle" alt="Avatar" style="width: 190px; height:190px;">
                      @endif
                  </div>
                  <div class="text-center mb-3">
                  <h3 >{{$contacts->first_name . ' '. $contacts->last_name }}</h3>
                </div>
                      <div class="col-md-6">
                        
                          <div class="mb-3 text-center">
                              <label for="socialProfiles" class="form-label{{$contacts->id}} text-primary">Social Profiles</label>
                          </div>
                          <div class="mb-3">
                              <label for="facebook" class="form-label{{$contacts->id}}">Facebook</label>
                              <input type="text" class="form-control" id="facebook" name="fb_url" required placeholder="Enter Facebook URL" value="{{$contacts->fb_url}}">
                          </div>
                          <div class="mb-3">
                              <label for="instagram" class="form-label{{$contacts->id}}">Instagram</label>
                              <input type="text" class="form-control" id="instagram" name="instagram_url" required placeholder="Enter Instagram URL" value="{{$contacts->instagram_url}}">
                          </div>
                          <div class="mb-3">
                              <label for="linkedin" class="form-label{{$contacts->id}}">LinkedIn</label>
                              <input type="text" class="form-control" id="linkedin" name="linkedin_url" required placeholder="Enter LinkedIn URL" value="{{$contacts->linkedin_url}}">
                          </div>
                          <div class="mb-3">
                              <label for="youtube" class="form-label{{$contacts->id}}">Youtube</label>
                              <input type="text" class="form-control" id="youtube" name="youtube_url" required placeholder="Enter Youtube URL" value="{{$contacts->youtube_url}}">
                          </div>
                      </div>
                      <div class="col-md-6">
                          <div class="mb-3 text-center">
                              <label for="basicContacts" class="form-label{{$contacts->id}} text-warning">Basic Contacts</label>
                          </div>
                          <div class="mb-3">
                              <label for="email" class="form-label{{$contacts->id}}">Email Address</label>
                              <input type="email" class="form-control" id="email" name="email" required placeholder="Enter Email" value="{{$contacts->email}}">
                          </div>
                          <div class="mb-3">
                              <label for="phone" class="form-label{{$contacts->id}}">Phone Number</label>
                              <input type="text" class="form-control" id="phone" name="phone_number" required placeholder="Enter Phone Number" value="{{$contacts->phone_number}}">
                          </div>
                      </div>
                  </div>
              </div>
              <div class="modal-footer">
                  <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                  <button type="submit" class="btn btn-primary">Save</button>
              </div>
          </form>
      </div>
  </div>
</div>
