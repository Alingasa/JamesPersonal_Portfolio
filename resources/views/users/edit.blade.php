<div class="modal fade" id="editUserModal{{$users->id}}" tabindex="-1" aria-labelledby="editUserModalLabel{{$users->id}}" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="editUserModalLabel{{$users->id}}">Edit User</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form id="editUserForm{{$users->id}}" action="{{ route('user.update', $users->id) }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="modal-body">
                    <input type="hidden" class="form-control" id="role{{$users->id}}" name="role" value="{{$users->role}}">
                
                    <div class="text-center mb-3">
                        @if($users->avatar)
                        <img id="profilePicturePreview{{$users->id}}" src="{{asset('storage/' . $users->avatar)}}" class="img-fluid rounded-circle" alt="Avatar" style="width: 150px; height:150px;">
                        @else
                        <img id="profilePicturePreview{{$users->id}}" src="my_dashboard/img/user.jpg" class="img-fluid rounded-circle" alt="Avatar" style="width: 150px; height:150px;">
                        @endif
                    </div>
                    <div class="text-center mb-3">
                        <label for="profilePictureInput{{$users->id}}" class="btn btn-primary">
                            Choose Profile Picture
                            <input type="file" id="profilePictureInput{{$users->id}}" class="d-none" name="avatar">
                        </label>
                    </div>
                    <div class="mb-3">
                        <label for="first_name{{$users->id}}" class="form-label">First Name</label>
                        <input type="text" class="form-control" id="first_name{{$users->id}}" name="first_name" value="{{$users->first_name}}">
                    </div>
                    <div class="mb-3">
                        <label for="first_name{{$users->id}}" class="form-label">Middle Name</label>
                        <input type="text" class="form-control" id="middle_name{{$users->id}}" name="middle_name" value="{{$users->middle_name}}">
                    </div>
                    <div class="mb-3">
                        <label for="first_name{{$users->id}}" class="form-label">Last Name</label>
                        <input type="text" class="form-control" id="middle_name{{$users->id}}" name="last_name" value="{{$users->last_name}}">
                    </div>
                    <div class="mb-3">
                        <label for="first_name{{$users->id}}" class="form-label">Email</label>
                        <input type="text" class="form-control" id="middle_name{{$users->id}}" name="email" value="{{$users->email}}">
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