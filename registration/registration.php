<?php include ('../conn.php');
if(isset($_POST['submit'])) {
  // print_r($_POST);
  $firstname= $_POST['fname'];
$lastname =$_POST['lname'];
$email=$_POST['email'];
$password=$_POST['password'];
$address=$_POST['address'];
$phonenum=$_POST['phonenum'];
 $check=mysqli_query($connection,"SELECT * FROM user_details WHERE email='$email' ");
$checkrows=mysqli_num_rows($check);
if($checkrows>0){
  echo "customer exist";
}else{
  $options = [
    'cost' => 12,
];
  $hashedPassword=password_hash($password, PASSWORD_BCRYPT, $options);
// $hashedPassword=password_hash($password,PASSWORD_DEFAULT);
  $sql="INSERT INTO user_details(firstname,lastname,email,phone_no,address,password) VALUES('$firstname','$lastname','$email','$phonenum','$address','$hashedPassword')";
  $res=mysqli_query($connection,$sql);
  if($res){

    header("location:http://localhost/project1/login/Login_v1/login.php");
  //  echo "success";
  //   echo $phonenum;
   
    }

}





}

?>


<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags-->
    <meta charset="UTF-8" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1, shrink-to-fit=no"
    />
    <meta name="description" content="Colorlib Templates" />
    <meta name="author" content="Colorlib" />
    <meta name="keywords" content="Colorlib Templates" />

    <!-- Title Page-->
    <title> Register Forms </title>

    <!-- Icons font CSS-->
    <link
      href="vendor/mdi-font/css/material-design-iconic-font.min.css"
      rel="stylesheet"
      media="all"
    />
    <link
      href="vendor/font-awesome-4.7/css/font-awesome.min.css"
      rel="stylesheet"
      media="all"
    />
    <!-- Font special for pages-->
    <link
      href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i"
      rel="stylesheet"
    />

    <!-- Vendor CSS-->
    <link href="vendor/select2/select2.min.css" rel="stylesheet" media="all" />
    <link
      href="vendor/datepicker/daterangepicker.css"
      rel="stylesheet"
      media="all"
    />

    <!-- Main CSS-->
    <link href="css/main.css" rel="stylesheet" media="all" />
  </head>

  <body>
    <div class="page-wrapper bg-red p-t-180 p-b-100 font-robo">
      <div class="wrapper wrapper--w960">
        <div class="card card-2">
          <div class="card-heading"></div>
          <div class="card-body">
            <h2 class="title">Registration Info</h2>


            <form method="post" action="">
              <div class="input-group">
                <input
                  class="input--style-2"
                  type="text"
                  placeholder="first Name"
                  name="fname"
                />
              </div>
              <div class="input-group">
                <input
                  class="input--style-2"
                  type="text"
                  placeholder="last Name"
                  name="lname"
                />
              </div>
              <div class="row row-space">
                <div class="col-2">
                  <!-- <div class="input-group">
                                    <input class="input--style-2 js-datepicker" type="text" placeholder="Birthdate" name="birthday">
                                    <i class="zmdi zmdi-calendar-note input-icon js-btn-calendar"></i>
                                </div> -->
                  <div class="input-group">
                    <input
                      class="input--style-2"
                      type="email"
                      placeholder="Email"
                      name="email"
                    />
                  </div>

                  <div class="input-group">
                    <input
                      class="input--style-2"
                      type="tel"
                      placeholder="Phone"
                      name="phonenum"
                    />
                  </div>
                </div>
                <!-- <div class="col-2">
                  <div class="input-group">
                                    <div class="rs-select2 js-select-simple select--no-search">
                                        <select name="gender">
                                            <option disabled="disabled" selected="selected">Gender</option>
                                            <option>Male</option>
                                            <option>Female</option>
                                            <option>Other</option>
                                        </select>
                                        <div class="select-dropdown"></div>
                                    </div>
                                </div>


                  <div class="input-group">
                    <input
                      class="input--style-2"
                      type="number"
                      placeholder="Phone"
                      name="phonenum"
                    />
                  </div>
                </div> -->
              </div>
              
              <!-- <div class="input-group">
                            <div class="rs-select2 js-select-simple select--no-search">
                                <select name="class">
                                    <option disabled="disabled" selected="selected">Class</option>
                                    <option>Class 1</option>
                                    <option>Class 2</option>
                                    <option>Class 3</option>
                                </select>
                                <div class="select-dropdown"></div>
                            </div>
                        </div> -->


              <div class="input-group">
                <input
                  class="input--style-2"
                  type="text"
                  placeholder="address"
                  name="address"
                />
              </div>

              <div class="row row-space">
                <div class="col-2">
                  <div class="input-group">
                    <input
                      class="input--style-2"
                      type="text"
                      placeholder="password"
                      name="password"
                    />
                  </div>
                </div>
              </div>
              <div class="p-t-30">
                <button class="btn btn--radius btn--green" type="submit" name="submit">
                  submit
                </button>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>

    <!-- Jquery JS-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <!-- Vendor JS-->
    <script src="vendor/select2/select2.min.js"></script>
    <script src="vendor/datepicker/moment.min.js"></script>
    <script src="vendor/datepicker/daterangepicker.js"></script>

    <!-- Main JS-->
    <!-- <script src="js/global.js"></script> -->
  </body>
</html>
<!-- end document-->


