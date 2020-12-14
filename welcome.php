<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.0/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.19.1/css/mdb.min.css" rel="stylesheet">
</head>
<body>
<div class="container my-5 py-5 z-depth-1">

  
<!--Section: Content-->
<section class="text-center px-md-5 mx-md-5 dark-grey-text">
    <div class="row">
    <div class="col-sm-4 text-center animated fadeInLeft"><br><br><br>
                    <img src="images\isometric-artwork-concept-online-registration-260nw-1319771138.jpg" alt="">
                  </div>
        <div class="col-sm-8">
            <form class="text-center animated fadeIn" action="" method="POST">
                                <div class="row" name="nextform" id="nextform">
                                    <div class="col-md-6">
                                        <div class="md-form md-outline mb-0">
                                            <input type="text" id="studentId" name="studentId" class="form-control">
                                            <label for="studentId">Studen ID No</label>
                                        </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="md-form md-outline mb-0">
                                                <input type="text" id="fname" name="fname" class="form-control">
                                                <label for="fname">First name</label>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="md-form md-outline mb-0">
                                                <input type="text" id="lname" name="lname" class="form-control">
                                                <label for="lname">Last name</label>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="md-form md-outline mb-0">
                                                <input type="text" id="middlename" name="middlename" class="form-control">
                                                <label for="middlename">Middle name</label>
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                        <div class="md-form md-outline mt-3">
                                            <input type="text" id="username" name="username" class="form-control">
                                            <label for="username">Extension name</label>
                                        </div>
                                        
                                        <div class="md-form md-outline mt-3">
                                            <input type="date" id="bday" name="bday" class="form-control">
                                            <label for="bday">Date of Birth</label>
                                        </div>

                                        <div class="md-form md-outline mt-3">
                                            <input type="text" id="placeofbirth" name="placeofbirth" class="form-control">
                                            <label for="placeofbirth">Place of Birth</label>
                                        </div>

                                        <select class="browser-default custom-select" name="Gender" id="Gender" style="color: #757575bd">
                                            <option selected>Gender</option>
                                            <option value="1">Male</option>
                                            <option value="2">Famale</option>
                                        </select>
                                        
                                        <div class="md-form md-outline">
                                            <input type="text" id="height" name="height" class="form-control">
                                            <label for="height">height</label>
                                        </div>

                                        <div class="md-form md-outline">
                                            <input type="text" id="Weight" name="Weight" class="form-control">
                                            <label for="Weight">Weight</label>
                                        </div>

                                        <div class="text-left">
                                            <button type="button" class="btn btn-info" id="next" name="next" style="width: 100%">Next<i class="far fa-paper-plane ml-2"></i></button>
                                        </div>
                                        </div>
                                    </div>
                                        <!--- Next2 Form --->
                                        <div class="next2" name="next22" id="next22" style = "display:none;">
                                            <div class="md-form md-outline mt-3">
                                                <input type="text" id="Religion" name="Religion" class="form-control">
                                                <label for="Religion">Religion</label>
                                            </div>
                                            
                                            <div class="md-form md-outline mt-3">
                                                <input type="text" id="Nationality" name="Nationality" class="form-control">
                                                <label for="Nationality">Nationality</label>
                                            </div>

                                            <div class="md-form md-outline mt-3">
                                                <input type="text" id="Course" name="Course" class="form-control">
                                                <label for="Course">Course</label>
                                            </div>

                                            <div class="md-form md-outline mt-3">
                                                <input type="text" id="yearSec" name="yearSec" class="form-control">
                                                <label for="yearSec">Year & Section</label>
                                            </div>

                                            <div class="md-form md-outline">
                                                <input type="email" id="email" name="email" class="form-control">
                                                <label for="email">Email Address</label>
                                            </div>
                                            <div class="text-left">
                                                <button type="button" class="btn btn-info" id="next2" name = "next2" style="width: 100%">Nexdt<i class="far fa-paper-plane ml-2"></i></button>
                                            </div>
                                        </div>
                                            <!--- Next3 Form --->
                                        <div class="next3" name="next33" id="next33" style="display:none;">
                                            <h4>SCHOOL GRADUATED</h4>
                                            <div class="row"> 
                                                <div class="col-md-6">
                                                    <div class="md-form md-outline mt-3">
                                                        <input type="text" id="Elementary" name="Elementary" class="form-control">
                                                        <label for="Elementary">Elementary</label>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="md-form md-outline mt-3">
                                                        <input type="text" id="elem-year" name="elem-year" class="form-control">
                                                        <label for="elem-year">Year</label>
                                                    </div>
                                                </div>
                                            </div>
                                            
                                            <div class="md-form md-outline mt-3">
                                                <input type="text" id="Secondary" name="Secondary" class="form-control">
                                                <label for="Secondary">Secondary</label>
                                            </div>

                                            <div class="md-form md-outline mt-3">
                                                <input type="text" id="second-year" name="second-year" class="form-control">
                                                <label for="second-year">Year</label>
                                            </div>

                                            <div class="md-form md-outline mt-3">
                                                <input type="text" id="Tetiary" name="Tetiary" class="form-control">
                                                <label for="Tetiary">Tetiary</label>
                                            </div>

                                            <div class="md-form md-outline">
                                                <input type="text" id="teriary-year" name="teriary-year" class="form-control">
                                                <label for="teriary-year">Year</label>
                                            </div>
                                            <div class="text-left">
                                                <button type="submit" class="btn btn-info" id="submit" name = "submit" style="width: 100%">Submit<i class="far fa-paper-plane ml-2"></i></button>
                                            </div>
                                        </div>
                            </form><hr>
        </div>
    </div>
</section>
<!--Section: Content-->


</div>
</body>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.4/umd/popper.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.0/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.19.1/js/mdb.min.js"></script>
</html>