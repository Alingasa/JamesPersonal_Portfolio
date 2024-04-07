@extends('home')

@section('table')
<div class="col-12">
    <div class="bg-light rounded h-100 p-4">
        <div class="d-flex justify-content-between align-items-center mb-4">
            <h6 class="mb-0"><i class="bi bi-award me-2"></i>Educational Attainment</h6>
            @if(auth()->user()->role == 'admin')
            <button type="button" class="btn btn-sm btn-primary" data-bs-toggle="modal" data-bs-target="#addEducationModal">Add Education</button>
            @endif
        </div>
        <div class="table-responsive">
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Grade Level</th>
                        <th scope="col">School Year</th>
                        <th scope="col">School Name</th>
                        <th scope="col">Address</th>
                        @if(auth()->user()->role == 'admin')
                        <th scope="col">Actions</th>
                        @endif
                    </tr>
                </thead>
                <tbody>
                    @foreach ($education as $educations)
                    <tr>
                        <th scope="row">{{++$i}}</th>
                 
                        <td>{{$educations->grade_level}}</td>
                        <td>{{$educations->school_year}}</td>
                        <td>{{$educations->school_name}}</td>
                        <td>{{$educations->address}}</td>
                         <td>
                            <!-- Edit button with icon -->
                            @if(auth()->user()->role == 'admin')
                            <div class="d-flex">
                                <a href="#" class="btn btn-warning btn-sm me-1" data-bs-toggle="modal" data-bs-target="#editEducationModal{{$educations->id}}">
                                    <i class="fas fa-edit"></i> 
                                </a>    
                             
                                <a href="#" class="btn btn-danger btn-sm" data-bs-toggle="modal" data-bs-target="#deleteModal{{$educations->id}}">
                                    <i class="fas fa-trash"></i> 
                                </a>
                               
                            </div>
                            @endif
                        </td>
                    </tr>
                    {{-- @include('pages.educations.delete')   
                    @include('pages.educations.edit')     --}}
                    @include('pages.educations.delete')  
                    @include('pages.educations.edit') 
                    @endforeach
                </tbody>
            </table>
            <nav aria-label="...">
                <ul class="pagination"> 
                    {{ $education->links() }}
                </ul>
            </nav>
        </div>
    </div>
</div>

<!-- Modal for Add User -->
@include('pages.educations.create')
@endsection
