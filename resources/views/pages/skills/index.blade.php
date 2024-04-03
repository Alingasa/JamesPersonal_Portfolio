@extends('home')

@section('table')
<div class="col-12">
    <div class="bg-light rounded h-100 p-4">
        <div class="d-flex justify-content-between align-items-center mb-4">
            <h6 class="mb-0"><i class="fas fa-cogs me-2"></i>Skills</h6>
            <button type="button" class="btn btn-sm btn-primary" data-bs-toggle="modal" data-bs-target="#addSkillModal">Add Skills</button>
        </div>
        <div class="table-responsive">
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Name</th>
                        <th scope="col">Percentage</th>
                        <th scope="col">Actions</th>
                    </tr>
                </thead>
                <tbody>
                   @foreach ($skill as $skills)
                       
                   
                    <tr>
                        <th scope="row">{{$skills->id}}</th>
                 
                        <td>{{$skills->skill_name}}</td>
                        <td>{{$skills->percentage}}%</td>
                         <td>
                            <!-- Edit button with icon -->
                            <div class="d-flex">
                                <a href="#" class="btn btn-warning btn-sm me-1" data-bs-toggle="modal" data-bs-target="#editSkillModal{{$skills->id}}">
                                    <i class="fas fa-edit"></i> <!-- Font Awesome edit icon -->
                                </a>    
                             
                                <a href="#" class="btn btn-danger btn-sm" data-bs-toggle="modal" data-bs-target="#deleteModal{{$skills->id}}">
                                    <i class="fas fa-trash"></i> <!-- Font Awesome edit icon -->
                                </a>
                               
                            </div>
                        </td>
                    </tr>
                    @include('pages.skills.delete')   
                    @include('pages.skills.edit')    
                     
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>

<!-- Modal for Add User -->
@include('pages.skills.create')
@endsection
