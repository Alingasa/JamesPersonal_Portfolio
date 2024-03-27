<!-- Edit User Modal -->
<div class="modal fade" id="editUserModal" tabindex="-1" aria-labelledby="editUserModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="editUserModalLabel">Edit User</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <!-- Edit User Form -->
                <form action="{{route('user.update', $user->id)}}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')

                    <!-- Input fields for user information -->
                    <div class="mb-3">
                        <label for="editFirstName" class="form-label">First Name</label>
                        <input type="text" class="form-control" id="editFirstName" name="first_name" value="">
                    </div>
                    <div class="mb-3">
                        <label for="editFirstName" class="form-label">Middle Name</label>
                        <input type="text" class="form-control" id="editFirstName" name="middle_name" value="">
                    </div>
                    <div class="mb-3">
                        <label for="editFirstName" class="form-label">Email</label>
                        <input type="text" class="form-control" id="editFirstName" name="middle_name" value="">
                    </div>
                    <!-- Repeat similar input fields for other user attributes like last name, email, etc. -->

                    <!-- Submit button -->
                    <button type="submit" class="btn btn-primary">Save</button>
                </form>
            </div>
        </div>
    </div>
</div>
