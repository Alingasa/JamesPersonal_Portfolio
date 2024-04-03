@extends('home')

@section('table')
<div class="col-12">
    <div class="bg-light rounded h-100 p-4">
        <div class="d-flex justify-content-between align-items-center mb-4">
            <h6 class="mb-0 text-danger">Change Password</h6>
        </div>
        <div class="table-responsive">
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Role</th>
                        <th scope="col">Avatar</th>
                        <th scope="col">First Name</th>
                        <th scope="col">Middle Name</th>
                        <th scope="col">Last Name</th>
                        <th scope="col">Email</th>
                        <th scope="col">Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($user as $users)
                    <tr>
                        <th scope="row">{{++$i}}</th>
                       @if($users->role == 'admin')
                       <td class="text-warning">{{$users->role}}</td>
                       @else
                       <td class="text-success">{{$users->role}}</td>
                       @endif
                        @if($users->avatar)
                        <td><img src="{{ asset('storage/'. $users->avatar) }}" alt="Default Profile Picture" style="width: 40px; height:40px;" class="img-profile rounded-circle"></td>
                        @else
                        <td><img src="{{ asset('my_dashboard/img/user.jpg') }}" alt="Default Profile Picture" style="width: 40px; height:40px;" class="img-profile rounded-circle"></td>
                        @endif
                        <td>{{$users->first_name}}</td>
                        <td>{{$users->middle_name}}</td>
                        <td>{{$users->last_name}}</td>
                        <td>{{$users->email}}</td>
                        <td>
                            <!-- Edit button with icon -->
                            <div class="d-flex">
                                <a href="#" class="btn btn-warning btn-sm me-4" data-bs-toggle="modal" data-bs-target="#editUserModal{{$users->id}}">
                                    <i class="fas fa-edit"></i> <!-- Font Awesome edit icon -->
                                </a>    
                                @include('users.user_password.create') 
                            </div>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
            <nav aria-label="...">
                <ul class="pagination"> 
                    {{ $user->links() }}
                </ul>
            </nav>
        </div>
    </div>
</div>
@endsection
