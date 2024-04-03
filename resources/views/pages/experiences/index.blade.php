@extends('home')

@section('table')
<div class="col-12">
    <div class="bg-light rounded h-100 p-4">
        <div class="d-flex justify-content-between align-items-center mb-4">
            <h6 class="mb-0"><i class="fas fa-briefcase me-2"></i>Experiences</h6>
            <button type="button" class="btn btn-sm btn-primary" data-bs-toggle="modal" data-bs-target="#addInterestModal">Add Experience</button>
        </div>
        <div class="table-responsive">
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Image</th>
                        <th scope="col">Name</th>
                        <th scope="col">Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($experience as $experiences)
                    <tr>
                        <th scope="row">{{++$i}}</th>
                 
                            @if($experiences->experience_image)
                            <td><img src={{ asset("storage/". $experiences->experience_image) }} alt="Default Profile Picture" style="width: 60px; height:60px;" class="img-profile rounded-square"></td>
                            @else
                            <td><img src={{ asset("my_dashboard/img/user.jpg") }} alt="Default Profile Picture" style="width: 60px; height:60px;" class="img-profile rounded-square"></td>
                            @endif
                        <td>{{$experiences->experience_name}}</td>
                         <td>
                            <!-- Edit button with icon -->
                            <div class="d-flex">
                                <a href="#" class="btn btn-warning btn-sm me-1" data-bs-toggle="modal" data-bs-target="#editExperienceModal{{$experiences->id}}">
                                    <i class="fas fa-edit"></i> <!-- Font Awesome edit icon -->
                                </a>    
                             
                                <a href="#" class="btn btn-danger btn-sm" data-bs-toggle="modal" data-bs-target="#deleteModal{{$experiences->id}}">
                                    <i class="fas fa-trash"></i> <!-- Font Awesome edit icon -->
                                </a>
                               
                            </div>
                        </td>
                    </tr>
                    @include('pages.experiences.delete')   
                    @include('pages.experiences.edit')    
                     
                    @endforeach
                </tbody>
            </table>
            <nav aria-label="...">
                <ul class="pagination"> 
                    {{ $experience->links() }}
                </ul>
        </div>
    </div>
</div>

<!-- Modal for Add User -->
@include('pages.experiences.create')
@endsection
