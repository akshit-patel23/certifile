<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Certifile</title>
   
    
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <style>
        body {
            overflow-x: hidden;
            overflow-y: hidden;
            margin: 0;
            padding: 0;
        }

        /* .row{
             padding:5% !important; 
        } 
         .col-md-6{
            padding: 2% !important;
             margin:15px !important; 
        }  */
        h2 {
            background-color: rgb(134, 152, 214);
        }

        form {
            width: 50%;
            background-color: rgb(134, 152, 214);
            padding: 10px;
            border-radius: 12px;
            /* transform: translate(250px, 50px); */
            align-self: center;
            color: white;
            margin: 1%;
        }

        #sidebar {
            width: 20vw;
            background-color: rgb(67, 58, 119);
            color: white;
            height: 100vh;
        }

        #top {
            display: flex;
            width: 100vw;
            height: 10vh;
            background-color: rgb(67, 58, 119);
            color: white;
            flex-direction: row;
            justify-content: space-between;
        }

        #top a {
            color: white;
            /* margin-left: 90vw; */
            padding: 1%;
            text-decoration: none;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            font-size: large;
        }

        #sidebar li {
            list-style: none;
            padding: 20px;
            font-family: Verdana, Geneva, Tahoma, sans-serif;
        }

        #sidebar li:hover {
            background-color: rgb(89, 78, 163);
        }


        #sidebar li a {
            text-decoration: none;
            color: white;
            font-size: 18px;
        }

        #sidebar h2 {
            background-color: rgb(89, 78, 163);
            margin-top: 0;
            height: 30px;
            font-family: Verdana, Geneva, Tahoma, sans-serif !important;
            font-weight: bold;
            font-size:x-large;
        }

        table {
            width: 100%;
            text-align: center;
            border-collapse: collapse;
            font-size: 16px;
            
            box-shadow: 8px 8px 15px grey;
            color: black;
            font-family: Verdana, Geneva, Tahoma, sans-serif;
            opacity: 0.9;
            border-radius: 8px;
            
        }
        tr{
           border-top: 1px solid gray;
        }
        th {
            background-color: rgb(89, 78, 163);
            color: white;
            padding: 5px;
            /* border: 1px solid grey; */
            /* border-radius: 2px; */
        }

        td {
            padding: 0.5%;
            /* border: 1px solid black; */
            /* border-bottom: 1px solid black; */
            /* margin-block: 0px; */

        }

        .main {
            /* background-color: #F5F5F5; */
            width: 80%;
            padding: 1%;
           
        }

        .editbtn {
     
            padding-inline: 8px;
            padding-block: 5px;
            background-color: green;
            text-decoration: none;
            color: white;
            border-radius: 5px;
            font-family: Verdana, Geneva, Tahoma, sans-serif;
            font-size: smaller;
            margin-top: 10px;
        }
        .editbtn:hover{
            color: white;
            text-decoration: none;
        }
        
      
        .deletebtn {
            
            padding-inline: 8px;
            padding-block: 5px;
            background-color: rgb(204, 51, 48);
            text-decoration: none;
            color: white;
            border-radius: 5px;
            font-family: Verdana, Geneva, Tahoma, sans-serif;
            font-size: smaller;
            margin: 2px;
        }
        .deletebtn:hover{
            color: white;
            text-decoration: none;
        }

        .flexbx {
            display: flex;
            flex-direction: row;
        }

        .logo {
            display: flex;
            flex-direction: row;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            padding: 0.2%;
            height: 8vh;
            width: 10vw;
        }
     
        .addbtn {
            padding:8px;
            background-color: rgb(66, 147, 66);
            color: white;
            /* margin-inline-start: 88%;
            margin-bottom: 10px;   */
            /* border-radius: 9px; */
        }
        .addbtn a{
            color: white;
            text-decoration: none;
        }
        .addbtn a:hover{
            color: white;
            text-decoration: none;
        }
        .checkboxinput{
            background-color: rgb(226, 220, 220);
            color: black;
            padding: 2%;
            overflow-y: scroll;
            height: 200px;
        }
        .header{
          display: flex;
          flex-direction: row;
          justify-content:space-between;  
          margin: 1%;
        }
        .formlayout{
            display: flex;
            justify-content: center;
            align-items: center;
            flex-direction:column ;
        }
        .warning{
            /* width: ; */
            /* display: flex; */
            width:fit-content;
            background-color: yellow;
            border-radius: 8px;
            padding: 1%;
            /* align-items: center; */
            font-weight: bold;
        }
    </style>
</head>

<body>
    <div id="top">
        <div class="logo">
            <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAADIAAAAyCAYAAAAeP4ixAAAACXBIWXMAAAsTAAALEwEAmpwYAAABnElEQVR4nO2ZO0oEQRCGR9BgIx/JZnqAvYRX0AOIqYqIgUaigaGLpgoL7knERyQGPsADaKAXcBEU/aSlhLYZx9GpntnR+mBht6q6q//pmq6GTRLDMAoBHFA9JxpC+oJES0jhiarOjwnRAduRACstJbDSCrDSUgIrrR88kTKuIZSxI39GSBlgQgJsR5TAXvYAO7WUwE6tADu1lMBKK+BflhYwDdwDd8BUrYQAE8DVFxfaV+ASGI+VX1PIjoQ8AC/AMrAgIpzNsR0rv1ZnbwLXEjIJNDxfQ2xITFM7v6aQM3HfAsMp/hHxOU6186tMBAwAz+JuZYxvScyTG9OvO9IVdydjfEdi9rXzawqZE/dmxvi2xCxq59cUMi/uG2ALGPJ8g2JzPseqdn5NIaN8xgnbANa93fpgTDu/6kTkJFb+GELWpMPvAbvSO1ZqJySJtBBMSMB3dR98d83vXD7vTTIt9jckRXF/1ucRAswCPe93T2waQo4LC8khNKTrdXy9Jxobb62PwJJnn/Gu8bUQcgRcpF0c5Z1xvsNqVpfUjzfPdJg/quzbOQAAAABJRU5ErkJggg==">
            <h1 style="margin:2%;">CertiFile</h1>
        </div>

        <a href="/logout"> <i class="fa fa-sign-out"></i> Logout</a>
    </div>
    <div class="flexbx">
        <div id="sidebar">
            <center>
                <h2>MENU</h2>
                <li><a href="/course/read">Courses</a></li>
                <li><a href="/university/read">University</a></li>
                <li><a href="/template/read">Templates</a></li>
            </center>

        </div>                      
        <div class="main">
          
            @yield('content')
        </div>
    </div>
</body>

</html>