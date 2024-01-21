<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Certifile</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <style>
        body{
            overflow: hidden;
            margin: 0px;
        }
        .main {
            display: flex;
            height: 100vh;
            width: 100vw;  
        }
        .bgvid{
            width: 58vw;
            height: 100vh;
        }
        .container{
            width: 40vw;
            background-color: #342C61;
            color: white;
            margin-left: 0px;
        }
        .formlayout{
            font-family: Verdana, Geneva, Tahoma, sans-serif;
            height: 90%;
            width: 80%;
            margin-top: 20%;
            margin-left: 8%;
            margin-right: 10%;
            padding: 2%;
            background-color: rgb(67, 58, 119);
            border-radius: 5%;
            
        }
        .forminput{
            margin-bottom: 15px;
            border: 1px solid white;
            height:30px;
            width:80%;
            padding: 5px;
            text-decoration: none;
            font-size: 15px;
        }
        .formlayout button{
            border-radius: 20px;
            border: none;
            margin: 5%;
            padding: 2%;
            width: 80%;
            font-family: Verdana, Geneva, Tahoma, sans-serif;
            font-weight: bolder;
            font-size: larger;
            background-color: #F5765C;
            color: white;
        }
        
        .formlayout h1{
            font-family: Verdana, Geneva, Tahoma, sans-serif;
            font-weight: bolder;
            height: 100%;
            margin-bottom: 10%;
        }
        .promptfoot p{
            font-size: small;
        }
        .footlink{
            text-decoration: none;
            color:#F5765C;
        }
       @media(max-width:600px){
        .bgvid{
            display: none;
            /* flex-direction: column; */
        }
        .container{
            width: 100vw;
        }
       }
    </style>
</head>

<body>
    
    <div class="main">
        <div class="container">
            <center>
            <div class="formlayout">
                 @yield('content')
            </div>
            </center>
        </div>
        <div class="bgvid">
            <video autoplay loop muted width="95%" height="95%">
                <source src="{{asset('media/video/backgroundvid.mp4')}}" type="video/mp4">
            </video>
        </div>
            
    </div>
</body>

</html>