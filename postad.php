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

  </div>
  <!--Post section-->
  <div class="post-section blog">
    <div class="container">
      <div class="row">
        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
          <div class="container">
            <div class="row">
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
                          <h3 id="user_place"></h3>

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

    <?php
    require('db.php');
    // When form submitted, insert values into the database.
    if (isset($_REQUEST['title'])) {
       
        $userid = 2;

      //  $userid = stripslashes($userid);
       // $userid = mysqli_real_escape_string($con, $userid);
        
        $title =  stripslashes($_REQUEST['title']);
        $title  = mysqli_real_escape_string($con, $title);


        $cat =  stripslashes($_REQUEST['category']);
        $cat  = mysqli_real_escape_string($con, $cat);
        
        $loc =  stripslashes($_REQUEST['location']);
        $loc  = mysqli_real_escape_string($con, $loc);


        $desc =  stripslashes($_REQUEST['description']);
        $desc  = mysqli_real_escape_string($con, $desc);

        $query    = "INSERT into `ADS` (id, title , category ,location, description)
                     VALUES ('$userid','$title','$cat','$loc','$desc')";
        $result   = mysqli_query($con, $query);
        if ($result) {
              
            echo "<div class='form'>
                  <h3>Your ad is posted sucessfully.</h3><br/>
                  <p class='link'>View all ads <a href='myads.php'>here</a></p>
                  </div>";
        } else {
            echo "<div class='form'>
                  <h3>Required fields are missing.</h3><br/>
                  ". $query ."<p class='link'>Click here to <a href='postad.php'>POST AD</a> again.</p>
                  </div>";
        }
    } else {
?>
                      <form method="post" class="row">
                        <div class="col-md-6 col-xl-6 col-lg-6 col-sm-12 col-12">
                          <div class="form-group ">
                            <label class="font-weight-bold">Ad title</label>
                            <input type="text" class="form-control" name="title">
                          </div>
                        </div>
                        <div class="col-md-6 col-xl-6 col-lg-6 col-sm-12 col-12 ">
                          <div class="form-group ">
                            <label class="font-weight-bold">Select Category</label>
                            <select class="form-control" name="category">
                              <option>Blanket</option>
                              <option>Woolen</option>
                              <option>Scarfs</option>
                              <option>Gloves</option>
                              <option>Socks</option>
                            </select>
                          </div>
                        </div>
                        <div class="col-md-6 col-xl-6 col-lg-6 col-sm-12 col-12 ">
                          <div class="form-group ">
                            <label class="font-weight-bold">Select Location </label>
                            <select class="form-control" name="location">
                              <option>Electronic city</option>
                              <option>Konappana Agrahara</option>
                              <option>MG road</option>
                              <option>Kormangala</option>
                            </select>
                          </div>
                        </div>
                        <div class="col-md-12 col-xl-12 col-lg-12 col-sm-12 col-12 ">
                          <div class="form-group uploadingsmultiple">
                            <label for="file">
                                  <span><i class="fa fa-upload"></i> Upload Images</span>
                                  <input type="file" class="d-none" id="file" name="file[]" multiple="">
                            </label>
                          </div>
                        </div>
                        <div class="col-md-12 col-xl-12 col-lg-12 col-sm-12 col-12 ">
                          <div class="form-group ">
                            <label class="font-weight-bold ">Description</label>
                            <textarea cols="50" name="description"
                                      class=" sizetextarea col-md-12 col-xl-12 col-lg-12 col-sm-12 col-12"></textarea>
                          </div>
                        </div>
                        <div class="col-md-12 col-xl-12 col-lg-12 col-sm-12 col-12 ">
                          <div class="form-group ">
                            <input type="submit" value="Update" class="custom-button" name="submit">
                          </div>
                        </div>
                      </form>
                <?php
                 } 
                ?>
                    </div>
                  </div>
                </div>
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

<script>
  document.getElementById("user_place").innerHTML = (localStorage.getItem('username'));
  var user_id = localStorage.getItem("userid");
  $.POST('myads.php', {'userid' : user_id}, function(data){
  alert('we have the user id ');
}
</script>
<script src="js/vendor/jquery-3.4.1.min.js"></script>
<script src="js/vendor/bootstrap.min.js"></script>
<script src="js/main.js"></script>
</body>
</html>
