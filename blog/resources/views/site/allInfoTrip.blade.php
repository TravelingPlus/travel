<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Trip optimizer</title>


    <link href="https://trip.trip.php.a-level.com.ua/css/app.css" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <style>
        body {
            background-image: url('http://irenecompany.com/wp-content/uploads/2015/05/wordtravel.png');
            background-size: cover;
        }
        .add {
            margin-left: 18px;
        }
        .send {
            margin-left: -2px;
        }
        .result {
            font-size: 20px;
            color: #fff;
            margin-bottom: 15px;
        }
        .form-control {
            margin-top: 0;
            width: 78px;
        }
        .logo-plane {
            margin-top: 10px;
        }
        p {
            margin: 5px 0;
        }
        label {
            color: #fff;
            margin-top: 15px;
        }

        .input {
            margin-top: 0;
            width: 160px;
        }
        .icon {
            cursor: pointer;
        }
        .navbar {
            background: linear-gradient(to left, #341348 20%, #6fbbe6 50%, #341348 80%);
        }
        .icons {
            background-color: rgba(255,255,255,1);
            border: 1px solid #fff;
        }
        .icons:hover {
            border: 1px solid #6fbbe6;
        }
        .logo-text {

            font-size: 20px;
            color: #fff;
        }
        .link:hover {
            margin-top: 15px;
            text-decoration: none;
        }
        .user .dropdown-toggle {
            color: #fff;
        }
        .caret {
            color: #fff;
        }
        .footer {
            border-top: 1px solid #fff;
            background: #280f38;
            width:100%;
            height: 60px;
        }
        .content {
            display: flex;
            flex-direction: column;
            text-align: center;
        }
        .content div:first-child {
            margin-top: 7px;
        }
        .my-content {
            padding-right: 20px;
            margin-bottom: 20px;
            background-color: rgba(55,55,55,0);
            min-height: calc(100vh - 152px);
        }
        .hr {
            width: 160px;
        }
        .my-row {
            margin-left: 0;
        }
        .my-btn {
            color: #564949;
            margin: 15px 0 0 15px;
        }
        .my-btn button{
            width: 130px;
        }
        .email {
            margin-top: 5px;
        }
        .check {
            margin: 0 0 0 5px;
        }
        table {
            margin: 0 auto;
            background-color: rgba(18, 10, 23, 0.7);
            color: #fff;
        }
        table td {
            padding: 15px;
        }
    </style>
    <style type="text/css">
        *
        {
            margin:0px;
            padding:0px;
        }
        body
        {
            height:100%;
            width:100%;

        }
        #main
        {
            padding-bottom:60px;
            width: 100%;
            margin: 0 auto;
            min-height: 100%;
            height: auto !important;
            height: 100%;
        }
        #content
        {
            margin:auto;
            background:#bef574;
            width:80%;
        }
    </style>
    <?php
    $php_array = array('abc','def','ghi');
    $js_array = json_encode($php_array);
    //echo "var javascript_array = ". $js_array . ";\n";
    ?>
</head>

<body>

<div id="app">
    <nav class="navbar navbar-default navbar-static-top">
        <div class="container">
            <div class="row">
                <div class=" col-lg-4 col-md-4 col-sm-12 col-xs-12 navbar-header">
                    <div>
                        <a class="link" href="http://trip.trip.php.a-level.com.ua">
                            <span class="logo-text">Trip optimizer</span>
                        </a>
                        <img class="logo-plane" src="img/logo-plane.png" style="width:15%;">
                    </div>
                </div>
            </div>
        </div>
</div>
</nav>

<div class="container">
    <div class="my-content">
        <div class="row">
            <div class=" col-lg-12 col-md-12 col-sm-12 col-xs-12r">
                <div id="from_script"></div>
            </div>
        </div>
    </div>
</div>
<div class="footer">
    <div class="content" style="color: #fff; font-size: 14px;">
        <div>All rights reserved by MEGO</div>
        <div>©Copywrite 2018</div>
    </div>
</div>
<script>
    window.allmass=[];
</script>
<script type="text/javascript">
    //debugger;
    var data = JSON.parse('<?php echo $exemlarDateTrips; ?>');
    var array_table = [];
    for (var i = 0; i < data.length; i++)
    {
        array_table[i] = [];
        var res_departure = data[i]['city_of_departure'];
        array_table[i][0] = res_departure;
        var res_arrival = data[i]['city_of_arrival'];
        array_table[i][1]=res_arrival;
        var res_hotel = data[i]['hotel'];
        array_table[i][2]=res_hotel;
        var res_transfer = data[i]['transfer'];
        array_table[i][3]=res_transfer;
    }


    var code = '<table align="center" border="2" width="100%" height="100%" bordercolor="#000000" cellspacing="10" cellpadding="10" bgcolor="#fde910">';
    for (var i = 0; i < array_table.length; i++)
    {
        code += '<tr>';
        for (var j = 0; j < array_table[i].length; j++)
        {
            code +=  '<td>'+ array_table[i][j] + '</td>';
        }
        code += '</tr>';
    }
    code += '</table>';
    var elem = document.getElementById("from_script");
    elem.innerHTML =  code;

</script>
</body>

</html>
