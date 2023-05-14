@extends('admin.master')
@section('title')
    Manage Blog
@endsection
@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-body">
                    <div class="border p-3 rounded">
                        <h6 class="mb-0 text-uppercase">Blog Table</h6>
                        <hr/>

                        <table id="example" class="table table-hover table-bordered table-striped text-center" style="vertical-align: middle">

                            <thead>
                            <tr >
                                <th>SL</th>
                                <th>Category ID</th>
                                <th>Author</th>
                                <th>Title</th>
                                <th>Blog Type</th>
                                <th>Image</th>
                                <th>Date</th>
                                <th>Status</th>
                                <th>Action</th>
                            </tr>

                            </thead>
                            <tbody>
                            @php $i=1 @endphp
                            @foreach($blogs as $blog)


                               <tr>
                                   <td>{{$i++}}</td>
                                   <td>{{$blog->category_name}}</td>
                                   <td>{{$blog->author_name}}</td>
                                   <td>{{$blog->title}}</td>
                                   <td>{{$blog->blog_type}}</td>
                                   <td><img src="{{asset($blog->image)}}" width="60px" height="60px" alt=""></td>
                                   <td>{{$blog->date}}</td>
                                   <td>{{$blog->status}}</td>
                                   <td style="display: flex">
                                       <a href="" class="btn btn-primary">Edit</a>&nbsp;
                                       <a href="" class="btn btn-danger btn-sm">Delete</a>
                                   </td>

                               </tr>
                            @endforeach

                                </tbody>

                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
