<?php $addpage = "/university/add" ?>
@extends('admin.layout')
@section('content')
<div class="formlayout">
    <form action="/university/update/{{$uni->id}}" method="POST">
        @csrf
        <div class="mb-3">
            <label for="floatingInput" class="form-label">University Name</label>
            <input type="text" class="form-control" id="floatingInput" placeholder="University Name" name="name" value="{{$uni->name}}">
            <label for="" class="form-label">Select Courses</label>
            <div class="checkboxinput">
            @foreach ($courses as $course)
            <input type="checkbox" name="courses[]" value="{{ $course->id }}" @if (in_array($course->id,$selectedcourseid)) checked @endif>{{ $course->name }}<br>
            @endforeach
            </div>
            
        </div>
        <button class="btn btn-success" type="submit">Update</button>
    </form>
</div>
@endsection