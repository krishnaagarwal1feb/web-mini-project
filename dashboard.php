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
  <div class="coverimage">
    <img src="img/cover.jpg" class="bannercoveruser" alt="banner">
    <div class="uploadcoverbtn">
      <input type="button" value="Change Cover Image" class="custom-button">
    </div>
  </div>
  <!--Post section-->
  <div class="post-section blog">
    <div class="container">
      <div class="row">
        <div class="col-lg-3">
          <div class="widget">
            <div class="rounded-circle customsize">
              <img src="img/logo_200x200.png" class="topupset" alt="logo"/>
            </div>
            <div class="admin-box">
              <div class="user">
                <div class="username colorcodebage">
                  <h3>Krishna</h3>

                </div>
              </div>
              <nav class="navdashboard">
                <ul>
                  <li>
                    <a href="dashboard.php">
                      <i class="fa fa-dashboard"></i>
                      <span>Dashboard</span>
                    </a>
                  </li>
                  <li>
                    <a href="#">
                      <i class="fa fa-user"></i>
                      <span>My Profile</span>
                    </a>
                  </li>
                  <li>
                    <a href="myads.php">
                      <span data-icon="V" class="icon"></span>
                      <span>My Ads</span>
                    </a>
                  </li>
                  <li>
                    <a href="#">
                      <i class="fa fa-sign-out"></i>
                      <span>Logout</span>
                    </a>
                  </li>
                </ul>
              </nav>
            </div>
          </div>
        </div>
        <div class="col-lg-9">
          <div class="col-sm-12 background_white">
            <form method="post" class="row">
              <div class="col-md-6 col-xl-6 col-lg-6 col-sm-12 col-12">
                <div class="form-group ">
                  <label class="font-weight-bold">First Name</label>
                  <input type="text" class="form-control"
                         value="Enter first name" required="">
                </div>
              </div>
              <div class="col-md-6 col-xl-6 col-lg-6 col-sm-12 col-12 ">
                <div class="form-group ">
                  <label class="font-weight-bold">Last Name</label>
                  <input type="text" class="form-control"
                         value="Enter last name" required="">
                </div>
              </div>
              <div class="col-md-6 col-xl-6 col-lg-6 col-sm-12 col-12 ">
                <div class="form-group ">
                  <label class="font-weight-bold">User Name</label>
                  <input type="text" class="form-control"
                         placeholder="This will be your login name!" required="">
                </div>
              </div>
              <div class="col-md-6 col-xl-6 col-lg-6 col-sm-12 col-12 ">
                <div class="form-group ">
                  <label class="font-weight-bold">Password</label>
                  <input type="password" class="form-control"
                         placeholder="***********" required="">
                </div>
              </div>
              <div class="col-md-6 col-xl-6 col-lg-6 col-sm-12 col-12 ">
                <div class="form-group ">
                  <label class="font-weight-bold">Phone #</label>
                  <input type="text" class="form-control"
                         placeholder="(000)-(0000000)" required="">
                </div>
              </div>
              <div class="col-md-6 col-xl-6 col-lg-6 col-sm-12 col-12 ">
              </div>
              <div class="col-md-6 col-xl-6 col-lg-6 col-sm-12 col-12 ">
                <div class="form-group ">
                  <label class="font-weight-bold">Gender</label>
                  <div class="form-group marginforradio">
                    <label for="id_male">Male</label>
                    <input type="radio" id="id_male" name="gender" value="m">
                    <label for="id_female">Female</label>
                    <input type="radio" id="id_female" name="gender" value="f">
                  </div>
                </div>
              </div>
              <div class="col-md-6 col-xl-6 col-lg-6 col-sm-12 col-12 ">
                <div class="form-group ">
                  <label class="upload-btn">
                    <input type="file" name="image">
                    <i class="fa fa-upload"></i> Upload Profile Image </label>
                  <img src="img/logo.png" class="img-upload" alt="logo">
                </div>
              </div>
              <div class="col-md-12 col-xl-12 col-lg-12 col-sm-12 col-12 ">
                <div class="form-group ">
                  <label class="font-weight-bold ">Biography</label>
                  <textarea cols="50" class=" sizetextarea col-md-12 col-xl-12 col-lg-12 col-sm-12 col-12"></textarea>
                </div>
              </div>
              <div class="col-md-12 col-xl-12 col-lg-12 col-sm-12 col-12 ">
                <div class="form-group ">
                  <input type="submit" value="Update" class="custom-button">
                </div>
              </div>
            </form>
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
