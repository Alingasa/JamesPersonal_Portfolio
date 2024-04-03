@extends('home')

@section('table')
<div class="col-12">
    <div class="bg-light rounded h-100 p-4">
        <div class="d-flex justify-content-between align-items-center mb-4">
            <h6 class="mb-0"><i class="fa fa-users me-2"></i>Users</h6>
            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#addUserModal">Add User</button>
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
                    @if($users->role == 'admin')
                    
                    @else
                    <tr>
                        <th scope="row">{{++$i}}</th>
                       @if($users->role == 'admin')
                       <td class="text-warning">{{$users->role}}</td>
                       @else
                       <td class="text-success">{{$users->role}}</td>
                       @endif
                        @if($users->avatar)
                        <td><img src={{ asset('storage/'. $users->avatar) }} alt="Default Profile Picture" style="width: 40px; height:40px;" class="img-profile rounded-circle"></td>
                        @else
                        <td><img src={{ asset("my_dashboard/img/user.jpg") }} alt="Default Profile Picture" style="width: 40px; height:40px;" class="img-profile rounded-circle"></td>
                        @endif
                        <td>{{$users->first_name}}</td>
                        <td>{{$users->middle_name}}</td>
                        <td>{{$users->last_name}}</td>
                        <td>{{$users->email}}</td>
                        <td>
                           
                            <div class="d-flex">
                                <a href="#" class="btn btn-warning btn-sm me-1" data-bs-toggle="modal" data-bs-target="#editUserModal{{$users->id}}">
                                    <i class="fas fa-edit"></i> 
                                </a>    
                                @include('users.edit')                      
                                <a href="#" class="btn btn-danger btn-sm" data-bs-toggle="modal" data-bs-target="#deleteModal{{$users->id}}">
                                    <i class="fas fa-trash"></i> 
                                </a>
                                @include('users.delete')
                            </div>
                        </td>
                    </tr>
                    @endif
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

<!-- Modal for Add User -->
@include('users.create')
@endsection
