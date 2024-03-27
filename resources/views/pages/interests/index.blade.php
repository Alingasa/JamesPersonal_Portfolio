@extends('home')

@section('table')
<div class="col-12">
    <div class="bg-light rounded h-100 p-4">
        <div class="d-flex justify-content-between align-items-center mb-4">
            <h6 class="mb-0">Users</h6>
            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#addUserModal">Add User</button>
        </div>
        <div class="table-responsive">
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Logo</th>
                        <th scope="col">Avatar</th>
                        <th scope="col">First Name</th>
                        <th scope="col">Middle Name</th>
                        <th scope="col">Last Name</th>
                        <th scope="col">Email</th>
                        <th scope="col">Actions</th>
                    </tr>
                </thead>
                <tbody>
                    
                    <tr>
                        <th scope="row"></th>
                       
                       <td class="text-warning"></td>
                      
             
                        <td><img src='' alt="Default Profile Picture" style="width: 40px; height:40px;" class="img-profile rounded-circle"></td>
             
                        
                       <td></td>
                       <td></td>
                       <td></td>
                       <td></td>
                       <td></td>
                        <td>
                            <!-- Edit button with icon -->
                            <div class="d-flex">
                                <a href="#" class="btn btn-warning btn-sm me-1" data-bs-toggle="modal" data-bs-target="#editUserModal">
                                    <i class="fas fa-edit"></i> <!-- Font Awesome edit icon -->
                                </a>    
                                                
                                <a href="#" class="btn btn-danger btn-sm" data-bs-toggle="modal" data-bs-target="#deleteModal">
                                    <i class="fas fa-trash"></i> <!-- Font Awesome edit icon -->
                                </a>
                         
                            </div>
                        </td>
                    </tr>
                
                </tbody>
            </table>
        </div>
    </div>
</div>

<!-- Modal for Add User -->
@include('users.create')
@endsection
