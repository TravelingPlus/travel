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
        #map
        {
            width: 100%;
            height: 600px;
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
        .registr-form {
            margin: 0 auto;
            width: 400px;
            background-color: rgba(18, 10, 23, 0.7);
        }
    </style>

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
        <div class="registr-form">
            <div class="row">
                <div class=" col-lg-4 col-md-6 col-sm-12 col-xs-12r">
                    <form action="{{url('/home/add')}}" method="post" enctype="multioart/form-data">
                        <div class="row my-row">
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                <label class="birthday">Birthday:</label><br>
                                <input type="date" class="input form-control" name="birthday" id="birthday" max="now">
                            </div>
                        </div>
                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                        <input type="hidden" name="_method" value="POST">
                        <div class="row my-row">
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12r">
                                <label class="first-name">First name:</label><br>
                                <input type="text" class="input form-control" name="first_name" id="first_name" value="{{ old('first_name') }}">
                            </div>
                        </div>
                        <div class="row my-row">
                            <div class=" col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                <label>Last:</label><br>
                                <input type="text" class="input form-control" name="last_name" id="last_name" value="{{ old('last_name') }}">
                            </div>
                        </div>

                        <div class="row my-row">
                             <div class=" col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                 <label>patronymic:</label><br>
                                 <input type="text" name="patronymic" id="patronymic" value="{{ old('patronymic') }}">
                             </div>
                        </div>

                        <div class="row my-row">
                            <div class=" col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                <label>Nationality:</label><br>
                                <input type="text" class="input form-control" name="nationality" id="nationality" value="{{ old('nationality') }}">
                            </div>
                        </div>
                        <div class="row my-row">
                            <div class=" col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                <label>Sex:</label><br>
                                <p>
                                    <input type="checkbox" name="sex" id="sex" value="M"><label class="check">Male</label><Br>
                                    <input type="checkbox" name="sex" id="sex" value="F"><label class="check">Female</label><Br>
                                </p>
                            </div>
                        </div>
                        <div class="row my-row">
                            <div class=" col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                <label class="email">Email:</label><br>
                                <input type="text" class="input form-control" name="email" id="email" value="{{ old('email') }}">
                            </div>
                        </div>
                        <div class="row my-row">
                            <div class=" col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                <label>Credit card:</label><br>
                                <p>
                                    <input type="checkbox" name="visa" id="visa" value="NO"><label class="check">No</label><Br>
                                    <input type="checkbox" name="visa" id="visa" value="YES"><label class="check">Yes</label><Br>
                                </p>
                            </div>
                        </div>
                        <div class="row my-row">
                            <label class="my-btn"><button>Create an account</button>
                            </label>

                        </div>
                    </form>
                </div>
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


</body>

</html>