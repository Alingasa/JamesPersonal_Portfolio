@extends('home')

@section('table')
<div class="col-12">
    <div class="bg-light rounded h-100 p-4">
        <div class="d-flex justify-content-between align-items-center mb-4">
            <h6 class="mb-0"><i class="fas fa-cogs me-2"></i>Skills</h6>
            @if(auth()->user()->role == 'admin')
            <button type="button" class="btn btn-sm btn-primary" data-bs-toggle="modal" data-bs-target="#addSkillModal">Add Skills</button>
            @endif
        </div>
        <div class="table-responsive">
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Name</th>
                        <th scope="col">Percentage</th>
                        @if(auth()->user()->role == 'admin')
                        <th scope="col">Actions</th>
                        @endif
                    </tr>
                </thead>
                <tbody>
                   @foreach ($skill as $skills)
                       
                   
                    <tr>
                        <th scope="row">{{++$i}}</th>
                 
                        <td>{{$skills->skill_name}}</td>
                        <td>{{$skills->percentage}}%</td>
                         <td>
                            <!-- Edit button with icon -->
                            @if(auth()->user()->role == 'admin')
                            <div class="d-flex">
                                <a href="#" class="btn btn-warning btn-sm me-1" data-bs-toggle="modal" data-bs-target="#editSkillModal{{$skills->id}}">
                                    <i class="fas fa-edit"></i> <!-- Font Awesome edit icon -->
                                </a>    
                             
                                <a href="#" class="btn btn-danger btn-sm" data-bs-toggle="modal" data-bs-target="#deleteModal{{$skills->id}}">
                                    <i class="fas fa-trash"></i> <!-- Font Awesome edit icon -->
                                </a>
                               
                            </div>
                            @endif
                        </td>
                    </tr>
                    @include('pages.skills.delete')   
                    @include('pages.skills.edit')    
                     
                    @endforeach
                </tbody>
            </table>
            <nav aria-label="...">
                <ul class="pagination"> 
                    {{ $skill->links() }}
                </ul>
        </div>
    </div>
</div>

<!-- Modal for Add User -->
@include('pages.skills.create')
@endsection
