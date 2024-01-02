<?php $addpage = "/university/add" ?>
@extends('Admin.layout')
@section('content')
<div class="formlayout">
    <form action="/unistore" method="POST">
        @csrf
        <div class="mb-3">
            <label for="floatingInput" class="form-label">University Name</label>
            <input type="text" class="form-control" id="floatingInput" placeholder="University Name" name="name">
            <label for="coursedropdown" class="form-label">Select Courses</label>
            <div class="checkboxinput">
            @foreach ($courses as $course)
            <input type="checkbox" class="form-check-input" name="courses[]" value="{{ $course->id }}" id="coursedropdown">{{ $course->name }}<br>
            @endforeach
            </div>
        </div>
        <button class="btn btn-success" type="submit">Submit</button>
    </form>
</div>
@endsection