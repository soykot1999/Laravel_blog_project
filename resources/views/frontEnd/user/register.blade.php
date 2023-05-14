@extends('frontEnd.master')

@section('content')
<div class="container-fluid " >
    <form class="comment-form m-3" style="border: 1px solid red;">
        <h5 class="text-center m-5">Register Yourself</h5>
        <div class="row ">
            <div class="col-12 col-md-6 m-4 text-center">
                <input type="text" class="form-control " name="name" placeholder="Full Name">
            </div>
            <div class="col-12 col-md-6 m-4">
                <input type="email" class="form-control " name="email" placeholder="Email">
            </div>
            <div class="col-12 col-md-6 m-4">
                <input type="text" class="form-control " name="phone" placeholder="Phone">
            </div>
            <div class="col-12 col-md-6 m-4">
                <input type="password" class="form-control " name="password" placeholder="Password">
            </div>
{{--            <div class="col-12 col-md-6 m-4">--}}
{{--                <textarea rows="7" class="form-control " placeholder="Comment"></textarea>--}}
{{--            </div>--}}
        </div>
        <button class="btn btn-solid m-2" type="submit">Submit</button>
    </form>
</div>

@endsection
