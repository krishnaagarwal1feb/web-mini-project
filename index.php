<!doctype html>
<html class="no-js" lang="zxx">
<head>
  <title>Helpinghands</title>
  <meta name="description" content="">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <script>
    console.log(localStorage);
  </script>
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
<p>You are logged in as: </p>
<strong><?php echo "<script type='text/javascript'> document.write(localStorage.getItem('username')); </script>";?></strong>
<header class="background-header">
<div style="float:right">
<form align="right" name="form1" method="post" action="logout.php">
  <label class="logoutLblPos">
  <input name="submit2" type="submit" id="submit2" value="log out">
  </label>
</form>
</div>
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
<div class="content">

  <!--hero banner section-->
  <div class="hero-homepage">
    <div class="container wrapping-content">
      <div class="row">
        <div class="col-12 text-center">
          <div class="tagline">
            <h1>Propagate the warmth</h1>
          </div>
          <div class="search_form">
            <form class="row">
              <div class="form-group col-lg-4 col-sm-12">
                <input type="text" class="form-control" placeholder="What are you looking for?" >
              </div>
              <div class="form-group col-lg-4 col-sm-12">
                <button type="submit" class="custom-button">Search</button>
              </div>
            </form>
          </div>
          <div class="popular_searches">
            Popular Searches:
            <a href="#">Blanket</a>,
            <a href="#">Sweater</a>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!--Category section-->
  <div class="category-container">
    <div class="container">
      <h2 class="text-center styleh2 karma"><a class="greens" href="#">Categories</a></h2>
      <div class="cat-icons">
        <a href="#">
          <div class="mainicon icon maida-blanket">
            <span class="text-icon">Blanket</span>
          </div>
        </a>
        <a href="#">
          <div class="mainicon icon maida-glove">
            <span class="text-icon">Gloves</span>
          </div>
        </a>
        <a href="#">
          <div class="mainicon icon maida-jacket">
            <span class="text-icon">Jackets</span>
          </div>
        </a>
        <div class="clearfix"></div>
      </div>
    </div>
  </div>
  <!--Post section-->
 

  <div class="post-section">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <h2 class="styleh2 karma text-center">Latest Ads</h2>
        </div>
        <div class="col-xl-3 col-lg-6 col-md-6 col-sm-12 col-12 margin_10px">
          <div class="post-box">
            <div class="thumbnail-holder">
              <a href="#">
                <img src="img/blanket.jpg" alt="Blanket">
              </a>
            </div>
            <div class="post-box-content">
              <h3><a href="product.php">Blankets ....</a></h3>

              <div class="post-category">
                <a href="#"> <i class="fa fa-list-alt"></i> Woolen</a>
              </div>
              <div class="post-location">
                <a href="#"> <i class="fa fa-location-arrow"></i> Electronic city</a>
              </div>
              <div class="post-meta">
                </div>
              <div class="clearfix"></div>
            </div>
          </div>
        </div>
        
        <div class="col-xl-3 col-lg-6 col-md-6 col-sm-12 col-12 margin_10px">
          <div class="post-box">
            <div class="thumbnail-holder">
              <a href="#">
                <img src="img/jacket.jpg" alt="Jackets">
              </a>
            </div>
            <div class="post-box-content">
              <h3><a href="product.php">jackets ....</a></h3>

              <div class="post-category">
                <a href="#"> <i class="fa fa-list-alt"></i> Woolen</a>
              </div>
              <div class="post-location">
                <a href="#"> <i class="fa fa-location-arrow"></i> Electronic city</a>
              </div>
              <div class="post-meta">
                </div>
              <div class="clearfix"></div>
            </div>
          </div>
        </div>
        <div class="col-xl-12 margin_10px">
          <div class="text-center">
            <a href="allads.php" class="custom-button">Show All</a>
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
