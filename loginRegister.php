<!doctype html>
<html class="no-js" lang="zxx">
<head>
  <title>Helpinghands</title>
  <meta name="description" content="">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <style>
    .spinner-wrapper {
      position: fixed;
      top: 0;
      left: 0;
      right: 0;
      bottom: 0;
      background-color: #000;
      z-index: 999999;
      text-align: center;
    }
    .logocolor {
      color: #A46FBF !important;
    }
    .centercenter {
      position: relative;
      top: 50%;
    }
    .spinner-grow2 {
      display: inline-block;
      width: 100px !important;
      height: 100px !important;
      vertical-align: text-bottom;
      background-color: currentColor;
      border-radius: 50%;
      opacity: 0;
      -webkit-animation: spinner-grow .75s linear infinite;
      animation: spinner-grow .75s linear infinite;
    }
  </style>
</head>
<body>
<div class="spinner-wrapper">
  <div class="centercenter">
    <div class="spinner-grow2 logocolor" role="status">
      <span class="sr-only">Loading...</span>
    </div>
  </div>
</div>
<!--[if IE]>
<p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade
  your browser</a> to improve your experience and security.</p>
<![endif]-->
<header class="background-header">

  <div class="topbar">
    <div class="container">
      <div class="row">
        <div class="col-xl-12">
          <div class="row">
            <div class="col-lg-6 col-md-6 col-sm-12">
            </div>
            <div class="col-lg-6 col-md-6 col-sm-12">
              <div class="text-center text-sm-center text-md-right text-lg-right text-xl-right">
                <div class="toplocation text-white">
                  <i class="fa fa-map-marker" aria-hidden="true"></i>
                  <span class="locaitonfont">Location</span>

                  <select id="openonarrow">
                    <option>Bangalore</option>
                    <option>Delhi</option>
                    <option>Hyderabad</option>
                    <option>Chandigarh</option>
                    <option>Mumbai</option>
                  </select>

                  <span class="arrowdonwing">
                    <i class="fa fa-angle-down"></i>
                  </span>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="container">
    <div class="navigation">
      <nav class="navbar navbar-expand-lg   justify-content-between nav-color zeropadd">
        <div class="navbar-header ">
          <a class="navbar-brand zeropadd" href="index.php">
            <img src="img/logo_200x200.png" alt="logo" class="max-width-60px"/>
          </a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                  aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            <span class="navbar-toggler-icon"></span>
            <span class="navbar-toggler-icon"></span>
          </button>
        </div>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="nav navbar-nav ml-auto">
            <li class="nav-item">
              <a class="nav-link" href="index.php">Home
                <span class="sr-only">(current)</span>
              </a>
            </li>
            
            <li class="nav-item">
              <a class="nav-link" href="contactus.php">Contact Us</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="loginRegister.php"><i class="fa fa-user" aria-hidden="true"></i>Login / Register</a>
            </li>
            <li class="nav-item  bordering">
              <a class="nav-link" href="postad.php">Post Free Ad</a>
            </li>
          </ul>
        </div>
      </nav>

    </div>
  </div>
</header>
<div class="content blog">
  <div class="hero-homepage subpage">
    <div class="container wrapping-content">
      <div class="row">
        <div class="col-12 text-center">
          <div class="tagline">
          </div>
        </div>
      </div>
    </div>
  </div>

  <!--Post section-->
  <div class="post-section aboutus registerlogin">
    <div class="container">
      <div class="row">
        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">

          <div class="container formcustom">
            <div class="col-sm-12 col-md-12 col-xl-10 col-lg-10 ml-auto mr-auto">
              <ul class="nav nav-pills nav-fill mb-1" id="pills-tab" role="tablist">
                
                <li class="nav-item col-6">
                  <a class="custom-button phill" id="pills-signup-tab" data-toggle="pill"
                     href="#pills-signup"
                     role="tab" aria-controls="pills-signup" aria-selected="false">Register</a>
                </li>
                <li class="nav-item col-6">
                  <button onclick="window.location.href='login.php'" 
                  class="custom-button phill active" id="pills-signin-tab" data-toggle="pill"
                     href="#pills-signin" role="tab" aria-controls="pills-signin"
                     aria-selected="true" >Login</button>
                </li>
              </ul>
              <div class="tab-content" id="pills-tabContent">
                
                <div class="tab-pane fade" id="pills-signup" role="tabpanel" aria-labelledby="pills-signup-tab">
                  <div class="col-sm-12 ">

                <?php
                  require('db.php');
                  // When form submitted, insert values into the database.
                  if (isset($_REQUEST['username'])) {
                      // removes backslashes
                      $username = stripslashes($_REQUEST['username']);
                      //escapes special characters in a string
                      $username = mysqli_real_escape_string($con, $username);
                      $email    = stripslashes($_REQUEST['email']);
                      $email    = mysqli_real_escape_string($con, $email);
                      $password = stripslashes($_REQUEST['password']);
                      $password = mysqli_real_escape_string($con, $password);
                      $phone = stripslashes($_REQUEST['phone']);
                      $phone  = mysqli_real_escape_string($con, $phone);
                      $create_datetime = date("Y-m-d H:i:s");
                      $query    = "INSERT into `users` (phone, username , password,email,  create_datetime)
                                  VALUES ('$phone','$username', '" . md5($password) . "', '$email', '$create_datetime')";
                      $result   = mysqli_query($con, $query);
                      if ($result) {
                          echo "<div class='form'>
                                <h3>You are registered successfully.</h3><br/>
                                <p class='link'>Click here to <a href='login.php'>Login</a></p>
                                </div>";
                      } else {
                          echo "<div class='form'>
                                <h3>Required fields are missing.</h3><br/>
                                <p class='link'>Click here to <a href='registration.php'>registration</a> again.</p>
                                </div>";
                      }
                  } else {
                ?>

                    <form method="post" id="singnupFrom" action="">
                      <div class="form-group">
                        <label class="font-weight-bold">Email <span class="text-danger">*</span></label>
                        <input type="email" id="signupemail" class="form-control" name="email"
                               placeholder="Enter valid email" required>
                      </div>
                      <div class="form-group">
                        <label class="font-weight-bold">User Name <span class="text-danger">*</span></label>
                        <input type="text"  id="signupusername" class="form-control"
                               name="username" placeholder="Choose your user name" required>
                        <div class="text-danger"><em>This will be your login name!</em></div>
                      </div>
                      <div class="form-group">
                        <label class="font-weight-bold">Phone #</label>
                        <input type="text" id="signupphone" class="form-control" name="phone"
                               placeholder="(000)-(0000000)">
                      </div>
                      <div class="form-group">
                        <label class="font-weight-bold">Password <span class="text-danger">*</span></label>
                        <input type="password" id="signuppassword" class="form-control" name="password"
                               placeholder="***********" pattern="^\S{6,}$"
                               onchange="this.setCustomValidity(this.validity.patternMismatch ? 'Must have at least 6 characters' : ''); if(this.checkValidity()) form.password_two.pattern = this.value;"
                               required>
                      </div>
                      <div class="form-group">
                        <label class="font-weight-bold">Confirm Password <span class="text-danger">*</span></label>
                        <input type="password" name="signupcpassword" id="signupcpassword" class="form-control"
                               pattern="^\S{6,}$"
                               onchange="this.setCustomValidity(this.validity.patternMismatch ? 'Please enter the same Password as above' : '');"
                               placeholder="***********" required>
                      </div>
                      <div class="form-group">
                        <label><input type="checkbox" name="signupcondition" id="signupcondition" required> I agree with
                          the <a href="javascript:;">Terms &amp; Conditions</a> for Registration.</label>
                      </div>
                      <div class="form-group">
                        <input type="submit" name="submit" value="Register" class="custom-button">
                      </div>
                    </form>
                    <?php
    }
?>
                  </div>
                </div>
              </div>
            </div>
            <!-- Modal -->
            <div class="modal fade" id="forgotPass" tabindex="-1" role="dialog" aria-hidden="true">
              <div class="modal-dialog" role="document">
                <form method="post" id="forgotpassForm">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h5 class="modal-title">Forgot Password</h5>
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                          aria-hidden="true">&times;</span></button>
                    </div>
                    <div class="modal-body">
                      <div class="form-group">
                        <label>Email <span class="text-danger">*</span></label>
                        <input type="email" name="forgotemail" id="forgotemail" class="form-control"
                               placeholder="Enter your valid email..." required>
                      </div>
                      <div class="form-group">
                      </div>
                    </div>
                    <div class="modal-footer">
                      <button type="button" class=" custom-button" data-dismiss="modal">Sign In</button>
                      <button type="submit" name="forgotPass" class="custom-button"><i class="fa fa-envelope"></i>
                        Send Request
                      </button>
                    </div>
                  </div>
                </form>
              </div>
            </div>
          </div>


        </div>
      </div>
    </div>
  </div>
</div>
<!--footer-->
<footer>
  <!--Newsletter section-->
  <div class="newsletter">
    <div class="container">
      <div class="row">
        <div class="col-lg-3 col-md-12">
          <h2>Newsletter</h2>
        </div>
        <div class="col-lg-4 col-md-12">
          <p>Sign up to receive email updates on new recipes.</p>
        </div>
        <div class="col-lg-5 col-md-12">
          <form>
            <div class="col-sm-12">
              <div class="row zeromargin zeromargin_form_group">
                <div class="form-group col-lg-8 col-sm-12">
                  <input type="email" class="form-control" placeholder="Your email address here...">
                </div>
                <div class="form-group col-lg-4 col-sm-12">
                  <button type="submit" class="whitehover custom-button">Subscribe</button>
                </div>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
  <div class="background-header footer_padding">
    <div class="container">
      <div class="navigation_footer">
        <div class="row">
          <div class="col-lg-3 col-md-6 col-sm-12">
            <div class="about-us-info">
              <p>
                <img src="img/logo_200x200.png" class="max-width-100px" alt="logo"/>
              </p>
              <p><i class="fa fa-phone"></i> 0562-111-898</p>
              <p><i class="fa fa-map-marker"></i> PESIT BSC, <br>
                Electronic city</p>
            </div>
          </div>
         
          <div class="col-lg-3 col-md-6 col-sm-12">
            <h3>Location</h3>
            <ul>
              <li><a href="#">Konappana Agrahara</a></li>
              <li><a href="#">Electronic city</a></li>
              <li><a href="#">MG road</a></li>
              <li><a href="#">Kormangala</a></li>
            </ul>
          </div>
          <div class="col-lg-3 col-md-6 col-sm-12">
            <h3>Important Links</h3>
            <ul>
              <li><a href="index.php">Home</a></li>
              <li><a href="contactus.php">Contact Us</a></li>
            </ul>
          </div>
        </div>
        <div class="footer-bottom">
          <div class="container">
            <div class="row">
              <div class="col-md-6 zeropadd">
                <p>Donate<i class="fa fa-heart"></i>
                </p>
              </div>
              <div class="col-md-6 zeropaddon768">
                <ul class="pages-links zeropadd">
                  <li><a href="dashboard.php">Dashboard</a></li>
                  <li><a href="contactus.php">Contact us </a></li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</footer>
<script src="js/vendor/jquery-3.4.1.min.js"></script>
<script src="js/vendor/bootstrap.min.js"></script>
<script src="js/main.js"></script>
</body>
</html>
