<?php $addpage = "/course/add" ?>
@extends('admin.layout')
@section('content')
<div class="formlayout">
    <form action="/coursestore" method="POST">
        @csrf
        <div class="mb-3">
            <label for="floatingInput" class="form-label">Course Name</label>
            <input type="text" class="form-control form-control-sm" id="floatingInput" placeholder="Course Name" name="name">
        </div>
        <button class="btn btn-success" type="submit">Submit</button>
    </form>
</div>
@endsection