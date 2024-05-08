<?php
    require 'config.php';
?>


<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  </head>
  <body class=" w-100 h-100 bg-white justify-content-center">
    <div class="container d-flex  justify-content-center align-items-center mb-5">
        <div class="col-6 ">
            <h2 class=" text-center text-primary mt-3 ">User Registration</h2>
            <form action="registration.php" method="post" name="ref-form" id="ref-form">
                <div class=" form-group mb-3">
                    <label for="name" class=" form-label fs-5">Enter name</label>
                    <input type="text" class="form-control border-black " name="name" id="name">
                </div>
                <div class=" form-group mb-3">
                    <label for="email_id" class=" form-label fs-5">Enter Email_ID</label>
                    <input type="email" class="form-control border-black " name="email_id" id="email_id">
                </div>
                <div class=" form-group mb-3">
                    <label for="pwd" class=" form-label fs-5">Enter Password</label>
                    <input type="password" class="form-control border-black " name="pwd" id="pwd">
                </div>
                <div class=" form-group mb-3">
                    <label for="dob" class=" form-label fs-5">Select Date of Birth</label>
                    <input type="date" class="form-control border-black " name="dob" id="dob">
                </div>
                <div class=" form-group mb-3">
                    <label for="genders" class=" form-label fs-5">Specify Gender</label>
                    <div class="form-check">
                        <input class="form-check-input border-black" type="radio" name="gender" id="Male">
                        <label class="form-check-label" for="Male">Male</label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input border-black" type="radio" name="gender" id="Female">
                        <label class="form-check-label" for="Female">Female</label>
                    </div>
                </div>
                <div class=" form-group mb-3">
                    <label for="dob" class=" form-label fs-5">Specify Language</label>
                    <div class="form-check">
                        <input class="form-check-input border-black" type="checkbox" name="lang" id="C">
                        <label class="form-check-label" for="C">C</label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input border-black" type="checkbox" name="lang" id="C++">
                        <label class="form-check-label" for="C++">C++</label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input border-black" type="checkbox" name="lang" id="PHP">
                        <label class="form-check-label" for="PHP">PHP</label>
                    </div>
                </div>
                <div class=" form-group mb-3">
                    <label for="address" class=" form-label fs-5">Address</label>
                    <textarea rows="4" class="form-control border-black " name="address"></textarea>
                </div>
                <div class=" form-group mb-3">
                    <label for="city" class=" form-label fs-5">Select City Name</label>
                    <select class="form-control border-black " name="city" id="city">
                        <option value="" selected>--Select City--</option>
                        <option value="Kolkata">Kolkata</option>
                        <option value="Arambagh">Arambagh</option>
                    </select>
                </div>
                <input type="submit" class="btn bg-primary text-white " name="ok" value="Register">
            </form>
        </div>
    </div>


    <?php
        if(isset($_POST['ok'])){
            $name=$_POST['name'];
            $email_id=$_POST['email_id'];
            $pwd=$_POST['pwd'];
            $dob=$_POST['dob'];
            $gender=$_POST['gender'];
            $lang=$_POST['lang'];
            $city=$_POST['city'];
            $address=$_POST['address'];
            $sql="INSERT INTO user (name, email, pwd, dob, gender, lang, city, address) VALUES ('$name', '$email_id', '$pwd', '$dob', '$gender', '$lang', '$city', '$address')";

            $res=mysqli_query($con, $sql) or die(mysqli_errno($con));
            if($res==1){
                echo "Registration is Successful";
            }
            else{
                echo "Registration is Unsuccessful";
            }


        }
    ?>


    
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>