<?php $addpage = "/course/add" ?>
@extends('Admin.layout')
@section('content')
<div class="formlayout">
    <form action="/course/update/{{$courses->id}}" method="POST">
        @csrf
        <div class="mb-3">
        <label for="floatingInput" class="form-label">Course Name</label>
        <input type="text" class="form-control form-control-sm" id="floatingInput" placeholder="Course Name" name="name" value="{{$courses->name}}">
            
        </div>
        <button class="btn btn-success" type="submit">Update</button>
    </form>
</div>
@endsection