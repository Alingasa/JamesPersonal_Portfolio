@extends('home')

@section('table')
<div class="col-12">
    <div class="bg-light rounded h-100 p-4">
        <div class="d-flex justify-content-between align-items-center mb-4">
            <h6 class="mb-0"><i class="fas fa-calendar-alt me-2"></i>Webinar/Seminar</h6>
            <button type="button" class="btn btn-sm btn-primary" data-bs-toggle="modal" data-bs-target="#addWebinarModal">Add Webinar</button>
        </div>
        <div class="table-responsive">
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Certificate</th>
                        <th scope="col">Host Name</th>
                        <th scope="col">Agenda</th>
                        <th scope="col">Date</th>
                        <th scope="col">Actions</th>
                    </tr>
                </thead>
                <tbody>
                   @foreach ($webinar as $webinars)
                    <tr>
                        <th scope="row">{{$webinars->id}}</th>
                       
                        @if($webinars->webinar_image)
                        <td><img src={{ asset('storage/'. $webinars->webinar_image) }} alt="Default Profile Picture" style="width: 40px; height:40px;" class="img-profile rounded-square"></td>
                        @else
                        <td><img src={{ asset("my_dashboard/img/user.jpg") }} alt="Default Profile Picture" style="width: 40px; height:40px;" class="img-profile rounded-square"></td>
                        @endif
                        <td>{{$webinars->host_name}}</td>
                        <th>{{$webinars->agenda}}</th>
                        <td>{{$webinars->date}}</td>
                         <td>
                            <!-- Edit button with icon -->
                            <div class="d-flex">
                                <a href="#" class="btn btn-warning btn-sm me-1" data-bs-toggle="modal" data-bs-target="#editWebinarModal{{$webinars->id}}">
                                    <i class="fas fa-edit"></i> <!-- Font Awesome edit icon -->
                                </a>    
                             
                                <a href="#" class="btn btn-danger btn-sm" data-bs-toggle="modal" data-bs-target="#deleteModal{{$webinars->id}}">
                                    <i class="fas fa-trash"></i> <!-- Font Awesome edit icon -->
                                </a>
                               
                            </div>
                        </td>
                    </tr>
                    {{-- @include('pages.webinars.delete')   
                    @include('pages.webinars.edit')     --}}
                    @include('pages.webinars.delete')
                    @include('pages.webinars.edit') 
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>

<!-- Modal for Add User -->
@include('pages.webinars.create')
@endsection
