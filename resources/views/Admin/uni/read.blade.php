<?php $addpage = "/university/add" ?>
@extends('Admin.layout')
@section('content')
<div class="header">
    <div class="pagename">
        <h3>Universities</h3>
    </div>
    <div class="addbtn">
        <a href="<?php echo $addpage; ?>"> <i class="fa fa-plus"></i> Add Record</a>
    </div>
</div>

<div>

    <table>

        <th>Sno</th>
        <th>University Name</th>
        <th>Courses</th>
        <th>Action</th>

        <?php $i = 1; ?>
        @foreach ($uniwithcourse as $row)
        <tr>
            <td><?php echo $i; ?></td>
            <td>{{$row['university']->name}}</td>
            <td>
                @foreach ($row['courses'] as $courses )
                {{$courses->name}}<br>
                @endforeach
            </td>
            <td><a class="editbtn" href="/university/edit/{{$row['university']->id}}"> <i class="fa fa-edit"></i> Edit</a>&nbsp;&nbsp;<a class="deletebtn" href="/university/delete/{{$row['university']->id}}"><i class="fa fa-trash"></i> Delete</a></td>
        </tr>
        <?php $i++; ?>
        @endforeach
    </table>
</div>
@endsection