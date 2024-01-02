<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
    
    <style>
        body {
            overflow-x: hidden;
        }
         /* .row{
             padding:5% !important; 
        } 
         .col-md-6{
            padding: 2% !important;
             margin:15px !important; 
        }  */
        h2{
            background-color: rgb(134, 152, 214);
        }

         form { 
            width: 50%;
            background-color: rgb(134, 152, 214);
            padding: 10px;
            border-radius: 12px;
            transform: translate(250px,50px);
            color: white;
        }
        #sidebar {
            position: fixed;
            left: 0;
            width: 250px;
            top: 5px;
            background-color: #48578E;
            color: white;
            height: 100%;

        }

        #top {
            position: fixed;
            width: 100%;
            left: 0;
            height: 65px;
            top: 0;
            background-color: #48578E;
            color: white;
        }

        #sidebar li {
            list-style: none;
            padding: 20px;

        }

        #sidebar li:hover {
            background-color: rgb(134, 152, 214);
        }


        #sidebar li a {
            text-decoration: none;
            color: white;
            font-size: 18px;
        }

        #sidebar h3 {
            font-size: 20px;

        }

        table {
            width: 100%;
            text-align: center;
            border: 1px solid grey;
            font-size: 16px;
        }

        th {
            background-color: rgb(134, 152, 214);
            color: white;
            padding: 5px;
        }

         tr,
        td {
            border-bottom: 1px solid grey;
            padding: 5px;
        } 

        .main {
            box-sizing: border-box;
            /* display: flex; */
            align-items: center;
            justify-content: center; 
            margin-left: 20%;
            margin-top: 9%;
            width: 78vw;
            height: 75vh;
        }
    </style>
</head>

<body>
    <div id="top">
        <center>
            <h1>GLOBAL DATA</h1>
        </center>
    </div>
    <div id="sidebar">
        <center>
            <img src="data:image/png;base64,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">
            <br>
            <h2>MENU</h2>
            <li><a href="/course/read"></a>Courses</li>
            <li><a href="/template/read">Template</a></li>
            <li><a href="/university/read">University</a></li>
            <li><a href="">Country</a></li>
           
        </center>
    </div>