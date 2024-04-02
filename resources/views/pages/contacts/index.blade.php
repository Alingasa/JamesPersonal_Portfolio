@extends('home')

@section('table')
<div class="col-12">
    <div class="bg-light rounded h-100 p-4">
        <div class="d-flex justify-content-between align-items-center mb-4">
            <h6 class="mb-0"><i class="fas fa-briefcase me-2"></i>Edit Contacts</h6>
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
                        <th scope="col">Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($contact as $contacts)
                    <tr>
                        <th scope="row">{{$contacts->id}}</th>
                        <td class="text-warning">{{$contacts->role}}</td>
                            @if($contacts->avatar)
                            <td><img src={{ asset("storage/". $contacts->avatar) }} alt="Default Profile Picture" style="width: 50px; height:50px;" class="img-profile rounded-circle"></td>
                            @else
                            <td><img src={{ asset("my_dashboard/img/user.jpg") }} alt="Default Profile Picture" style="width: 50px; height:50px;" class="img-profile rounded-circle"></td>
                            @endif
                        <td>{{$contacts->first_name}}</td>
                        <td>{{$contacts->middle_name}}</td>
                        <td>{{$contacts->last_name}}</td>
                         <td>
                            <!-- Edit button with icon -->
                            <div class="d-flex">
                                <a href="#" class="btn btn-warning btn-sm me-1" data-bs-toggle="modal" data-bs-target="#editContactModal{{$contacts->id}}">
                                    <i class="fas fa-edit"></i> <!-- Font Awesome edit icon -->
                                </a>    
                               
                            </div>
                        </td>
                    </tr>
                    {{-- @include('pages.contacts.delete')   
                    @include('pages.contacts.edit')     --}}
                    @include('pages.contacts.edit')
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>

<!-- Modal for Add User -->
{{-- @include('pages.contacts.create') --}}
@endsection
