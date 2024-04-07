@extends('home')

@section('table')
<div class="col-12">
    <div class="bg-light rounded h-100 p-4">
        <div class="d-flex justify-content-between align-items-center mb-4">
            <h6 class="mb-0"><i class="fa fa-envelope me-2"></i>Messages</h6>
        </div>
        <div class="table-responsive">
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Email</th>
                        <th scope="col">Date</th>
                        <th scope="col">Actions</th>
                    </tr>
                </thead>
                <tbody>
                   @foreach ($message as $messages)
                    <tr>
                        <th scope="row">{{++$i}}</th>
                        <td>{{$messages->email}}</td>
                        <td>{{$messages->created_at}}</td>
                         <td>
                            <!-- Edit button with icon -->
                            <div class="d-flex">
                                <a href="#" class="btn btn-warning btn-sm me-1" data-bs-toggle="modal" data-bs-target="#editViewModal{{$messages->id}}">
                                    <i class="fas fa-eye"></i> <!-- Font Awesome edit icon -->
                                </a>    
                               
                            </div>
                        </td>
                    </tr>
                 
                    
                    @include('pages.messages.view')

                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>

<!-- Modal for Add User -->
{{-- @include('pages.messages.create') --}}
@endsection
