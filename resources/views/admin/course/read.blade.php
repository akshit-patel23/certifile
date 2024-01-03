<?php $addpage = "/course/add" ?>
@extends('admin.layout')
@section('content')
<div class="header">
    <div class="pagename">
        <h3>Courses</h3>
    </div>
    <div class="addbtn">
        <a href="<?php echo $addpage; ?>"> <i class="fa fa-plus"></i> Add Record</a>
    </div>
</div>

<div>
    <table>

        <th>Sno</th>
        <th>Course Name</th>
        <th>Action</th>

        <?php $i = 1; ?>
        @foreach ($courses as $row)
        <tr>
            <td><?php echo $i; ?></td>
            <td>{{$row->name}}</td>
            <td><a class="editbtn" href="/course/edit/{{$row->id}}"> <i class="fa fa-edit"></i> Edit</a>&nbsp;&nbsp;<a class="deletebtn" href="/course/delete/{{$row->id}}"><i class="fa fa-trash"></i> Delete</a></td>
        </tr>
        <?php $i++; ?>
        @endforeach
    </table>
    <div style="margin-top: 2%;" class="d-flex justify-content-center">
        {!!$courses->links()!!}
    </div>
</div>
@endsection