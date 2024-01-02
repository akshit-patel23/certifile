<?php $addpage = "/template/add" ?>
@extends('Admin.layout')

@section('content')
<div class="header">
    <div class="pagename">
        <h3>Templates</h3>
    </div>
    <div class="addbtn">
        <a href="<?php echo $addpage; ?>"> <i class="fa fa-plus"></i> Add Record</a>
    </div>
    
</div>


    <table>

        <th>Sno</th>
        <th>Template Name</th>
        <th>Action</th>

        <?php $i = 1; ?>
        @foreach ($temp as $row)
        <tr>
            <td><?php echo $i; ?></td>
            <td>{{$row->name}}</td>
            <td><a class="editbtn" href="/template/edit/{{$row->id}}"><i class="fa fa-edit"></i> Edit</a>&nbsp;&nbsp;<a class="deletebtn" href="/template/delete/{{$row->id}}"><i class="fa fa-trash"></i> Delete</a></td>
        </tr>
        <?php $i++; ?>
        @endforeach
    </table>
</div>
@endsection