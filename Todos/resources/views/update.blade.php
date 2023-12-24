@extends('layouts.main')
@push('head')
    <title>Update Todo</title>

@endpush

    @section('main-section')

    <div class="container">
        <div class="d-flex justify-content-between align-items-center my-5">
            <div class="h2">Update Todo</div>
            <a href="" class="btn btn-primary">Back</a>

        </div>

        <div class="card">
            <div class="card-body">
                <form action="{{route("todo.updateData")}}"" method="post">
                    @csrf
                    <lable for="" class="form-lable mt-4">Name</lable>
                    <input type="text" name="name" class="form-control" value="{{$todo->name}}">

                    <lable for="" class="form-lable mt-4">Work</lable>
                    <input type="text" name="work" class="form-control" value="{{$todo->work}}">
                    <lable for="" class="form-lable mt-4">Due Date</lable>
                    <input type="date" name="dueDate" class="form-control" value="{{$todo->dueDate}}">
                    <input type="number" name="id" value="{{$todo->id}}" hidden>
                    <button class="btn btn-primary btn-lg mt-4">Update</button>
                
                
                </form>
        </div>
</div>
</div>
        
    @endsection
