@extends('home')

@section('table')
<div class="col-12">
    <div class="bg-light rounded h-100 p-4">
        <div class="d-flex justify-content-between align-items-center mb-4">
            <h6 class="mb-0"><i class="fas fa-heart me-2"></i>Interests</h6>
            @if(auth()->user()->role == 'admin')
            <button type="button" class="btn btn-sm btn-primary" data-bs-toggle="modal" data-bs-target="#addInterestModal">Add Interest</button>
            @endif
        </div>
        <div class="table-responsive">
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Logo</th>
                        <th scope="col">Name</th>
                        @if(auth()->user()->role == 'admin')
                        <th scope="col">Actions</th>
                        @endif
                    </tr>
                </thead>
                <tbody>
                    @foreach ($interest as $interests)
                    <tr>
                        <th scope="row">{{++$i}}</th>
                 
                            @if($interests->image_logo)
                            <td><img src={{ asset("storage/". $interests->image_logo) }} alt="Default Profile Picture" style="width: 60px; height:60px;" class="img-profile rounded-square"></td>
                            @else
                            <td><img src={{ asset("my_dashboard/img/user.jpg") }} alt="Default Profile Picture" style="width: 60px; height:60px;" class="img-profile rounded-square"></td>
                            @endif
                        <td>{{$interests->name}}</td>
                         <td>
                         
                            @if(auth()->user()->role == 'admin')
                            <div class="d-flex">
                                <a href="#" class="btn btn-warning btn-sm me-1" data-bs-toggle="modal" data-bs-target="#editInterestModal{{$interests->id}}">
                                    <i class="fas fa-edit"></i> <!-- Font Awesome edit icon -->
                                </a>    
                             
                                <a href="#" class="btn btn-danger btn-sm" data-bs-toggle="modal" data-bs-target="#deleteModal{{$interests->id}}">
                                    <i class="fas fa-trash"></i> <!-- Font Awesome edit icon -->
                                </a>
                               
                            </div>
                            @endif
                        </td>
                    </tr>
                    @include('pages.interests.delete')   
                    @include('pages.interests.edit')    
                     
                    @endforeach
                </tbody>
            </table>
            <nav aria-label="...">
                <ul class="pagination"> 
                    {{ $interest->links() }}
                </ul>
            </nav>
        </div>
    </div>
</div>

<!-- Modal for Add User -->
@include('pages.interests.create')
@endsection
