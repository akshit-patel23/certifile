<?php $addpage = "/template/add" ?>
@extends('Admin.layout')
@section('content')
<div class="formlayout">
    <form action="/template/update/{{$temp->id}}" method="post">
        @csrf
        <div class="mb-3">
        <label>Template Title</label>
        <input type="text"  class="form-control" name="name" value="{{$temp->name}}">
        <label class="form-label">Template Code In HTML</label>
        <textarea name="htmlstr" class="form-control">{!!$temp->htmlstr!!}</textarea>
        </div>
        
        <button type="submit" class="btn btn-success">Update</button>
    </form>
</div>
@endsection