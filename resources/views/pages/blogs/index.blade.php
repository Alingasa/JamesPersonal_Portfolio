@extends('home')

@section('table')
<div class="col-12">
  <div class="bg-light rounded h-100 p-4">
      <div class="d-flex justify-content-between align-items-center mb-4">
          <h6 class="mb-0"><i class="bi bi-cart-fill"></i>Category</h6>
          <button type="button" class="btn btn-sm btn-primary" data-bs-toggle="modal" data-bs-target="#addCategoryModal">Add Category</button>
      </div>    
      <div class="table-responsive">
          <table class="table">
              <thead>
                  <tr>
                      <th scope="col">#</th>
                      <th scope="col">Category Name</th>
                      <th scope="col">Actions</th>
                  </tr>
              </thead>
              <tbody>
                  @foreach ($category as $categories)
                  <tr>
                      <th scope="row">{{++$i}}</th>
                      <td>{{$categories->name}}</td>
                       <td>
                          <!-- Edit button with icon -->
                          <div class="d-flex">
                              <a href="#" class="btn btn-warning btn-sm me-1" data-bs-toggle="modal" data-bs-target="#editCategoryModal{{$categories->id}}">
                                  <i class="fas fa-edit"></i> <!-- Font Awesome edit icon -->
                              </a>    
                              <a href="#" class="btn btn-danger btn-sm" data-bs-toggle="modal" data-bs-target="#deleteModal{{$categories->id}}">
                                <i class="fas fa-trash"></i> <!-- Font Awesome edit icon -->
                            </a>
                          </div>
                      </td>
                  </tr>
                  @include('pages.blogs.category.delete')
                  @include('pages.blogs.category.edit')
                  @endforeach
              </tbody>
          </table>
          <nav aria-label="...">
            <ul class="pagination"> 
                {{ $category->links() }}
            </ul>
        </nav>
      </div>
  </div>
</div>
@include('pages.blogs.category.create')
<!-- Modal for Add User -->
<div class="col-12">
    <div class="bg-light rounded h-100 p-4">
        <div class="d-flex justify-content-between align-items-center mb-4">
            <h6 class="mb-0"><i class="fas fa-book me-2"></i>My blogs</h6>
            <button type="button" class="btn btn-sm btn-primary" data-bs-toggle="modal" data-bs-target="#addBlogModal">Add Blog</button>
        </div>
        <div class="table-responsive">
            <table class="table">
                <thead>
                    <tr>
                      
                        <th scope="col">Category</th>
                        <th scope="col">Image</th>
                        <th scope="col">Title</th>
                        <th scope="col">Content</th>
                        <th scope="col">Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($blog as $blogs)
                    <tr>
                      
                        <td>{{$blogs->category->name}}</td>
                            @if($blogs->blog_image)
                            <td><img src={{ asset("storage/". $blogs->blog_image) }} alt="Default Profile Picture" style="width: 50px; height:50px;" class="img-profile rounded-circle"></td>
                            @else
                            <td><img src={{ asset("my_dashboard/img/user.jpg") }} alt="Default Profile Picture" style="width: 50px; height:50px;" class="img-profile rounded-circle"></td>
                            @endif
                        <td>{{$blogs->title}}</td>
                        <td>{{$blogs->content}}</td>
                         <td>
                            <!-- Edit button with icon -->
                            <div class="d-flex">
                                <a href="#" class="btn btn-warning btn-sm me-1" data-bs-toggle="modal" data-bs-target="#editblogModal{{$blogs->id}}">
                                    <i class="fas fa-edit"></i> <!-- Font Awesome edit icon -->
                                </a>    
                                <a href="#" class="btn btn-danger btn-sm" data-bs-toggle="modal" data-bs-target="#deleteModal{{$blogs->id}}">
                                    <i class="fas fa-trash"></i> <!-- Font Awesome edit icon -->
                                </a>
                            </div>
                        </td>
                    </tr>
                    @include('pages.blogs.edit')
                    @include('pages.blogs.delete')
                    @endforeach
                </tbody>
            </table>
            <nav aria-label="...">
                <ul class="pagination"> 
                    {{ $blog->links() }}
                </ul>
            </nav>
        </div>
    </div>
</div>


@include('pages.blogs.create')
@endsection
