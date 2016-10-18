<!DOCTYPE html>
<html lang="en">
<head>
    <title>A form for Assignment</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <script src="assets/bootstrap/js/jquery.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    <style>
        .navbar-inverse {
            background-color: #0c7903;
            border-color: #0c7903;
        }
        .navbar-inverse .navbar-nav > .active > a, .navbar-inverse .navbar-nav > .active > a:focus, .navbar-inverse .navbar-nav > .active > a:hover {
            background-color: #01591f;
            color: #fff;
        }
        .submit_btn{font-size: 20px;}
        .footer{background-color: #0c7903;color:#fff;padding:20px;margin-top:50px;}
        input[type="file"] {
            display: inline;
        }
    </style>
</head>
<body>
    <div class="header">
        <nav class="navbar navbar-inverse">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="#">BITM</a>
                </div>
                <div class="collapse navbar-collapse" id="myNavbar">
                    <ul class="nav navbar-nav navbar-right">
                        <li><a href="#">Home</a></li>
                        <li><a href="#">Blog</a></li>
                        <li class="active"><a href="#">Registration</a></li>
                        <li><a href="#">FAQ</a></li>
                        <li><a href="#">Contact</a></li>
                    </ul>
                </div>
            </div>
        </nav>
    </div>
    <div class="main_form">
        <div class="container">
            <div class="row">
                <div class="col-md-8 col-md-offset-2">
                    <form action="" >
                        <div class="form-group">
                            <h1 class="text-center">Registration Form</h1>
                            <p>
                                <label for="name">Your Name</label>
                                <input type="text" name="name" class="form-control" placeholder="Enter Your Name" >
                            </p>
                            <p>
                                <label for="email">Your Email</label>
                                <input type="email" name="email" class="form-control" placeholder="Enter Your Email" >
                            </p>
                            <p>
                                <label for="date">Your Date of Birth</label>
                                <input type="date" name="dateOfBirth" class="form-control" placeholder="Enter Your Date" >
                            </p>
                            <p>
                                <label for="gender">Select your gender:</label>
                                <label class="radio-inline"><input type="radio" name="optradio" checked>Male</label>
                                <label class="radio-inline"><input type="radio" name="optradio">Female</label>
                                <label class="radio-inline"><input type="radio" name="optradio">Other</label>
                            </p>
                            <p>
                                <label for="city">Select your City:</label>
                                <select class="form-control" id="sel1">
                                    <option value="chittagong">Chittagong</option>
                                    <option value="dhaka">Dhaka</option>
                                    <option value="sylhet">Sylhet</option>
                                </select>
                            </p>
                            <p>
                                <label for="hobbies">Select your hobbies:</label>
                                <label class="checkbox-inline"><input type="checkbox" value="">Playing Cricket</label>
                                <label class="checkbox-inline"><input type="checkbox" value="">Gardening</label>
                                <label class="checkbox-inline"><input type="checkbox" value="">Fishing</label>
                                <label class="checkbox-inline"><input type="checkbox" value="">Reading Story Books</label>
                                <label class="checkbox-inline"><input type="checkbox" value="">Swimming</label>
                            </p>
                            <p>
                                <label for="address">Your Address:</label>
                                <textarea class="form-control" placeholder="write your address"></textarea>
                            </p>
                            <p>
                                <label for="file" >Select your profile picture:</label>
                                <input type="file" class="form-inline" name="file" placeholder="Enter Your file">
                            </p>
                            <p>
                                <button class="btn btn-block btn-primary submit_btn" type="submit">Registration</button>
                            </p>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <div class="footer">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="text-center">
                        &copy; All rights reserved by <a href="#">BITM</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>