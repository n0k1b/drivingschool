@extends('admin.layout.app')

@section('main-panel')
<style>
    .owl-stage{
        overflow-y: auto;
        height: 224px;
    }
</style>

<div class="page-header">
    <h3 class="page-title">
        Courses
    </h3>
</div>
<div class="card">
    <div class="card-header d-flex justify-content-between align-items-">
        <h3></h3>
        <a class="btn btn-primary" href="{{url('admin/add-course')}}">Add Courses</a>
    </div>
    <div class="card-body">
        @if (session('message'))
        <div class="alert alert-success">{{session('message')}}</div>
        @endif
        <div class="table-responsive">
            <table class="table">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>image</th>
                        <th>title</th>
                        <th>duration</th>
                        <th>price</th>
                        <th>description</th>
                        <th></th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($courses as $course)
                    <tr>
                        <td>{{$course->id}}</td>
                        <td><img src="{{asset('images/'.$course->image)}}"></td>
                        <td>{{$course->title}}</td>
                        <td>{{$course->duration}}</td>
                        <td>{{$course->price}}</td>
                        <td>{{$course->description}}</td>
                        <td>
                            <button class="btn btn-warning">Edit</button>
                        </td>
                        <td>
                            <a class="btn btn-danger" href="{{url('admin/delete-course/'.$course->id)}}">Delete</a>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>

@endsection

@section('page-js')
@endsection
