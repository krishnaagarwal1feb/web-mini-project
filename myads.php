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
</header><div class="content blog">
  <div class="coverimage">
    <img src="img/cover.jpg" class="bannercoveruser" alt="banner">

  </div>

    
  <!--Post section-->
  <div class="post-section blog">
    <div class="container">
      <div class="row">

        <div class="col-lg-3">
          <div class="widget">
            <div class="rounded-circle customsize">
              <img  src="img/logo_200x200.png" class="topupset" alt="logo"/>
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
          <div class="row">
            <div class="col-xl-12 col-lg-12">
              <div class="row margin_10px">
                <div class="zeropadd col-sm-12 col-md-6 col-lg-6 col-xl-6">
                  <p>1 ad(s) by <strong>Krishna Agarwal</strong></p>
                </div>
                <div class=" zeropadd col-sm-12 col-md-6 col-lg-6 col-xl-6">
                  <div class="widget widget_search">
                    <form id="search-form">
                      <input type="search" class="form-control" autocomplete="off" name="s"
                             placeholder="Search..."
                             id="search-input" value="">
                    </form>
                  </div>
                </div>
              </div>

            </div>
            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 margin_10px">
              <div class="wrappingrow borderingnew d-sm-none d-xl-block d-lg-block d-md-none d-none">
                <div class="row cardtag">
                  <div class="col-4">Title</div>
                  <div class="col-2">Ad Image</div>
                  <div class="col-2">Category</div>
                  <div class="col-2">Status</div>
                  <div class="col-2">Action</div>
                </div>
              </div>
              <div class="wrappingrow">
                <div class="row cardtag">
                  <div
                      class="col-12 col-sm-12 col-lg-4 col-xl-4 text-sm-center text-center text-md-center text-lg-left col-4 margintadjst">
                      Blanket
                    </div>
                  <div class="col-6 col-sm-3  col-lg-2 col-xl-2">
                    <img alt="image" src="img/blanket.jpg"/>
                  </div>
                  <div class="col-6 col-sm-3 col-lg-2 col-xl-2 margintadjst"><i class="fa fa-list-alt"></i>Woolen</div>
                  <div class="col-6 col-sm-3 col-lg-2 col-xl-2 margintadjst"><i class="fa fa-star"></i>Active</div>
                  <div class="col-6 col-sm-3 col-lg-2 col-xl-2 margintadjst">
                    <div class="btns-actions">
                      <a class="btn-action btn-view" href="#"><i class="fa fa-eye"></i> 46 </a>
                      <a class="btn-action btn-edit" href="#"><i class="fa fa-pencil"></i> Edit</a>
                      <a class="btn-action btn-delete" href="#"><i class="fa fa-trash"></i> Delete</a>
                    </div>
                  </div>
                </div>
              </div>

            </div>
          </div>
          <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 margin_10px">
            <nav aria-label="Page navigation">
              <ul class="pagination justify-content-center flex-wrap">
                <li class="page-item disabled">
                  <a class="page-link" href="#" tabindex="-1">Previous</a>
                </li>
                <li class="page-item"><a class="page-link active-pagination" href="#">1</a></li>
                <li class="page-item"><a class="page-link" href="#">2</a></li>
                <li class="page-item"><a class="page-link" href="#">3</a></li>
                <li class="page-item"><a class="page-link" href="#">...</a></li>
                <li class="page-item"><a class="page-link" href="#">93</a></li>
                <li class="page-item"><a class="page-link" href="#">94</a></li>
                <li class="page-item"><a class="page-link" href="#">95</a></li>
                <li class="page-item">
                  <a class="page-link" href="#">Next</a>
                </li>
              </ul>
            </nav>
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
</script>
<script src="js/vendor/jquery-3.4.1.min.js"></script>
<script src="js/vendor/bootstrap.min.js"></script>
<script src="js/main.js"></script>
</body>
</html>
