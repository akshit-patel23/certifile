<?php $addpage = "/template/add" ?>
@extends('admin.layout')
@section('content')
<div class="formlayout">
    <div class="warning">
        <p style="margin: 0; text-align:center"> Use Variables in your Template enclosed in {{}} : 'studentname', 'studentclass', 'studentfathersname', 'studentphone', 'studentpercentage', 'course', 'studentuniversity'</p>
    </div>
    <form  id="yourForm" action="/tempstore" method="post">
        @csrf
        <div class="mb-3">
        <label for="" class="form-label">Template Title</label>
        <input type="text" name="name" class="form-control" placeholder="Template Name" >
        <label for="" class="form-label">Template Code In HTML</label>
        <textarea  name="htmlstr" class="form-control" cols="30" rows="10" placeholder="Template code"></textarea>
        </div> 
        <button type="submit" class="btn btn-success">Submit</button>
    </form>
</div>
@endsection