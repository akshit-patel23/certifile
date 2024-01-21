<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Certifile</title>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.0/jquery.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <style>
        .body{
            margin: 0px;
            padding: 0px;
            overflow-x: hidden;
            overflow-y: hidden;
        }
        .main{
            display: flex;
            flex-direction: row;
            height: 100%;
            width: 100%;
            background-color:rgb(173, 164, 232);
            font-family:Arial, Helvetica, sans-serif;
            /* background-color: #4D4C7D; */
        }
        .header{
            display: flex;
            flex-direction: row;
            background-color: #433A77;
            height: 7vh;
            justify-content: space-between;
        }
       
        .right{
            width:70vw;
            height: 93vh;
            padding:5%;
            font-weight: bold;    
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
        }
        .prompt{
            background-color: yellow;
            padding: 1%;
            border-radius: 8px;
            
            margin: 2%;
        }
        .prompt p{
            margin: 0;
        }
        .logo{
            font-family: Verdana, Geneva, Tahoma, sans-serif;
            color: #F5765C;
            padding: 5px;
            font-size: x-large;
            margin: 5x;
        }
        .opt{
            margin: 10px;
        }
        .opt a{
            color: white;
            text-decoration: none;
            padding: 10px;
            margin-top: px;
        }
     .left{
        display: flex;
        justify-content: center;
        align-items: center;
        /* background-color: #E4E4E4; */
        /* background-image: linear-gradient(#E4E4E4,#EFEFEF); */
     }
     
     @media(max-width:600px){
        .left{
            display: none;
        }
        .right{
            width: 100vw;
        }
        
       }
    </style>
</head>

<body>
    
    <div class="header">
        <div class="logo">
            Certifile
        </div>
        <div class="opt">
            <a href="/logout"><i class="fa fa-sign-out"></i> Logout</a>
        </div>
    </div>
    <div class="main">
        <div class="left">
        <img src="{{asset('media/images/Certification.png')}}" alt="" width="100%">
        </div>
        <div class="right">
            <div class="prompt">
                <p>IMPORTANT : CSV must include these fields in order - Name, Class, Percentage, Father's Name, Phone, Timestamp</p>
            </div>
            <form action="/importdata" method="post" enctype="multipart/form-data">
                @csrf
                <label for="uni" class="form-label">University</label>
                <select class="form-select" aria-label="Default select example" name="universities" id="uni">
                    <option selected>Select University</option>
                    @foreach ($uni as $row)
                    <option value="{{$row->id}}">{{$row->name}}</option>
                    @endforeach
                </select>
                <label for="selectedcourses" class="form-label">Course</label>
                <select class="form-select" aria-label="Default select example" id="selectedcourses" name="courses">
                    <option selected>Select Course</option>
                </select>
                <label for="template" class="form-label">Template</label>
                <select class="form-select" aria-label="Default select example" name="template" id="template">
                    <option selected>Select Template</option>
                    @foreach ($temp as $row)
                    <option value="{{$row->id}}">{{$row->name}}</option>
                    @endforeach
                </select>
                <label for="inputGroupFile04" class="form-label">Upload CSV</label>
                <div class="input-group">

                    <input type="file" class="form-control" id="inputGroupFile04" aria-describedby="inputGroupFileAddon04" aria-label="Upload" name="csv_file">
                    <button class="btn btn-success" type="submit" id="inputGroupFileAddon04">Submit</button>
                </div>
            </form>
        </div>
    </div>

</body>
<script>
    $.ajaxSetup({
        headers: {
            'X-CSRF-Token': '{{ csrf_token() }}',
        }
    });
    $(document).ready(function() {
        $('#uni').change(function() {
            var uniid = $('#uni').val();

            $.ajax({
                url: '/fetchcourse/' + uniid,
                method: "POST",
                data: {
                    uniid: uniid
                },
                success: function(data) {
                    $('#selectedcourses').html(data);
                }
            })
        })
    });
</script>

</html>