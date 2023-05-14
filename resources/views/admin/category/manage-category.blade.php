@extends('admin.master')
@section('title')
    Manage Category
@endsection
@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-body">
                    <div class="border p-3 rounded">
                        <h6 class="mb-0 text-uppercase">Category Table</h6>
                        <hr/>
                       <table class="table table-hover table-bordered table-striped text-center">
                           <tr >
                               <th>SL</th>
                               <th>Category Name</th>
                               <th>Image</th>
                               <th>Status</th>
                               <th>Action</th>
                           </tr>
                           @php $i=1 @endphp
                           @foreach($categories as $category)
                           <tr>
                               <td>{{$i++}}</td>
                               <td>{{$category->category_name}}</td>
                               <td><img src="{{asset($category->image)}}" class="img-fluid" height="50px" width="50px" alt=""></td>
                               <td>{{$category->status == 1 ? 'published': 'unpublished'}}</td>
                               <td class="d-block">
                                   <a href="{{route('edit.category',['c_id'=>$category->id])}}" class="btn btn-primary">Edit</a>
                                   @if($category->status == 1)
                                   <a href="" class="btn btn-warning">Published</a>
                                   @else
                                   <a href="" class="btn btn-success">Unpublished</a>
                                   @endif
                                   <form action="">
                                       <input type="submit" class="btn btn-danger" onclick="return confirm('are you sure to delete!!')" value="Delete">
                                   </form>
                               </td>
                           </tr>
                           @endforeach
                       </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
