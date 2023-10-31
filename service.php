<!DOCTYPE html>
<html>

<head>
  <!-- Basic -->
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <!-- Mobile Metas -->
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <!-- Site Metas -->
  <meta name="keywords" content="" />
  <meta name="description" content="" />
  <meta name="author" content="" />
  <link rel="shortcut icon" href="images/favicon.png" type="">

  <title> CryptoGuard </title>

  <!-- bootstrap core css -->
  <link rel="stylesheet" type="text/css" href="css/bootstrap.css" />

  <!-- fonts style -->
  <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700;900&display=swap" rel="stylesheet">

  <!--owl slider stylesheet -->
  <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" />

  <!-- font awesome style -->
  <link href="css/font-awesome.min.css" rel="stylesheet" />

  <!-- Custom styles for this template -->
  <link href="css/style.css" rel="stylesheet" />
  <!-- responsive style -->
  <link href="css/responsive.css" rel="stylesheet" />

</head>

<body class="sub_page">

  <div class="hero_area">

    <div class="hero_bg_box">
      <div class="bg_img_box">
        <img src="images/hero-bg.png" alt="">
      </div>
    </div>

    <!-- header section strats -->
    <header class="header_section">
      <div class="container-fluid">
        <nav class="navbar navbar-expand-lg custom_nav-container ">
          <a class="navbar-brand" href="index.php">
            <span>
              Finexo
            </span>
          </a>

          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class=""> </span>
          </button>

          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav  ">
              <li class="nav-item ">
                <a class="nav-link" href="index.php">Home </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="about.php"> About</a>
              </li>
              <li class="nav-item active">
                <a class="nav-link" href="service.php">Services <span class="sr-only">(current)</span> </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="why.php">News</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="team.php">Contact</a>
<!--               </li>
              <li class="nav-item">
                <a class="nav-link" href="#"> <i class="fa fa-user" aria-hidden="true"></i> Login</a>
              </li> -->
              <form class="form-inline">
                <button class="btn  my-2 my-sm-0 nav_search-btn" type="submit">
                  <i class="fa fa-search" aria-hidden="true"></i>
                </button>
              </form>
            </ul>
          </div>
        </nav>
      </div>
    </header>
    <!-- end header section -->
  </div>


$services = array(
    array(
        "name" => "Currency Wallet",
        "description" => "With CryptoGuard, managing your cryptocurrency portfolio has never been easier. Our multi-currency wallet allows you to securely store, send, and receive a wide range of cryptocurrencies, all within one convenient platform. Enjoy real-time balance tracking and easy transaction management.",
        "image" => "images/s1.png",
        "link" => "link_to_more_info"
    ),
    array(
        "name" => "Security Storage",
        "description" => "At CryptoGuard, security is our top priority. We employ state-of-the-art encryption protocols and cold storage solutions to safeguard your digital assets. Our advanced security measures ensure that your cryptocurrencies remain protected against any potential threats.",
        "image" => "images/s2.png",
        "link" => "link_to_more_info"
    ),
    array(
        "name" => "Expert Support",
        "description" => "Have a question or need assistance? Our team of dedicated crypto experts is available around the clock to provide you with timely and knowledgeable support. Whether you're a newcomer or a seasoned trader, our experts are here to guide you through any aspect of the crypto world.",
        "image" => "images/s3.png",
        "link" => "link_to_more_info"
    ),
    array(
        "name" => "Secure Transactions",
        "description" => "Our platform ensures the highest level of security for your transactions, providing you with peace of mind.",
        "image" => "images/s3.png",
        "link" => "link_to_more_info"
    ),
    array(
        "name" => "Portfolio Diversification",
        "description" => "Diversify your investments across a wide range of cryptocurrencies to minimize risk and maximize potential returns.",
        "image" => "images/s3.png",
        "link" => "link_to_more_info"
    ),
    array(
        "name" => "Real-time Market Insights",
        "description" => "Stay informed with real-time market data, trends, and insights to make informed decisions about your investments.",
        "image" => "images/s3.png",
        "link" => "link_to_more_info"
    ),
    array(
        "name" => "Multi-Currency Wallet",
        "description" => "Store, send, and receive a wide range of cryptocurrencies securely within a single, convenient platform.",
        "image" => "images/s3.png",
        "link" => "link_to_more_info"
    ),
    array(
        "name" => "Cold Storage Solutions",
        "description" => "Benefit from state-of-the-art encryption protocols and cold storage options to keep your digital assets secure.",
        "image" => "images/s3.png",
        "link" => "link_to_more_info"
    ),
    array(
        "name" => "Secure Transactions",
        "description" => "",
        "image" => "images/s3.png",
        "link" => "link_to_more_info"
    ),
    array(
        "name" => "Regulatory Compliance",
        "description" => "We adhere to strict regulatory standards, providing you with a compliant platform to manage your cryptocurrency investments.",
        "image" => "images/s3.png",
        "link" => "link_to_more_info"
    )
    
);



  <!-- service section -->

  <section class="service_section layout_padding">
    <div class="service_container">
      <div class="container ">
        <div class="heading_container heading_center">
          <h2>
            Our <span>Services</span>
          </h2>
          <p>
            Explore CryptoGuard today and experience a new level of confidence in managing your cryptocurrency investments.  
          </p>
        </div>
        <div class="row">
          <div class="col-md-4 ">
            <div class="box ">
              <div class="img-box">
                <img src="images/s1.png" alt="">
              </div>
              <div class="detail-box">
                <h5>
                  Currency Wallet
                </h5>
                <p>
                  With CryptoGuard, managing your cryptocurrency portfolio has never been easier. Our multi-currency wallet allows you to securely store, send, and receive a wide range of cryptocurrencies, all within one convenient platform. Enjoy real-time balance tracking and easy transaction management
                </p>
                <a href="">
                  Read More
                </a>
              </div>
            </div>
          </div>
          <div class="col-md-4 ">
            <div class="box ">
              <div class="img-box">
                <img src="images/s2.png" alt="">
              </div>
              <div class="detail-box">
                <h5>
                  Security Storage
                </h5>
                <p>
                  At CryptoGuard, security is our top priority. We employ state-of-the-art encryption protocols and cold storage solutions to safeguard your digital assets. Our advanced security measures ensure that your cryptocurrencies remain protected against any potential threats.  
                </p>
                <a href="">
                  Read More
                </a>
              </div>
            </div>
          </div>
          <div class="col-md-4 ">
            <div class="box ">
              <div class="img-box">
                <img src="images/s3.png" alt="">
              </div>
              <div class="detail-box">
                <h5>
                  Expert Support
                </h5>
                <p>
                  Have a question or need assistance? Our team of dedicated crypto experts is available around the clock to provide you with timely and knowledgeable support. Whether you're a newcomer or a seasoned trader, our experts are here to guide you through any aspect of the crypto world.
                </p>
                <a href="">
                  Read More
                </a>
              </div>
            </div>
          </div>
        </div>
        <div class="btn-box">
          <a href="">
            View All
          </a>
        </div>
      </div>
    </div>
  </section>

  <!-- end service section -->

  <!-- info section -->

  <section class="info_section layout_padding2">
    <div class="container">
      <div class="row">
        <div class="col-md-6 col-lg-3 info_col">
          <div class="info_contact">
            <h4>
              Address
            </h4>
            <div class="contact_link_box">
              <a href="">
                <i class="fa fa-map-marker" aria-hidden="true"></i>
                <span>
                  Location
                </span>
              </a>
              <a href="">
                <i class="fa fa-phone" aria-hidden="true"></i>
                <span>
                  Call +01 1234567890
                </span>
              </a>
              <a href="">
                <i class="fa fa-envelope" aria-hidden="true"></i>
                <span>
                  demo@gmail.com
                </span>
              </a>
            </div>
          </div>
          <div class="info_social">
            <a href="">
              <i class="fa fa-facebook" aria-hidden="true"></i>
            </a>
            <a href="">
              <i class="fa fa-twitter" aria-hidden="true"></i>
            </a>
            <a href="">
              <i class="fa fa-linkedin" aria-hidden="true"></i>
            </a>
            <a href="">
              <i class="fa fa-instagram" aria-hidden="true"></i>
            </a>
          </div>
        </div>
        <div class="col-md-6 col-lg-3 info_col">
          <div class="info_detail">
            <h4>
              Info
            </h4>
            <p>
              necessary, making this the first true generator on the Internet. It uses a dictionary of over 200 Latin words, combined with a handful
            </p>
          </div>
        </div>
        <div class="col-md-6 col-lg-2 mx-auto info_col">
          <div class="info_link_box">
            <h4>
              Links
            </h4>
            <div class="info_links">
              <a class="active" href="index.php">
                Home
              </a>
              <a class="" href="about.php">
                About
              </a>
              <a class="" href="service.php">
                Services
              </a>
              <a class="" href="why.php">
                Why Us
              </a>
              <a class="" href="team.php">
                Team
              </a>
            </div>
          </div>
        </div>
        <div class="col-md-6 col-lg-3 info_col ">
          <h4>
            Subscribe
          </h4>
          <form action="#">
            <input type="text" placeholder="Enter email" />
            <button type="submit">
              Subscribe
            </button>
          </form>
        </div>
      </div>
    </div>
  </section>

  <!-- end info section -->

  <!-- footer section -->
  <section class="footer_section">
    <div class="container">
      <p>
        &copy; <span id="displayYear"></span> All Rights Reserved By
        <a href="https://html.design/">Free Html Templates</a>
      </p>
    </div>
  </section>
  <!-- footer section -->

  <!-- jQery -->
  <script type="text/javascript" src="js/jquery-3.4.1.min.js"></script>
  <!-- popper js -->
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous">
  </script>
  <!-- bootstrap js -->
  <script type="text/javascript" src="js/bootstrap.js"></script>
  <!-- owl slider -->
  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js">
  </script>
  <!-- custom js -->
  <script type="text/javascript" src="js/custom.js"></script>
  <!-- Google Map -->
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCh39n5U-4IoWpsVGUHWdqB6puEkhRLdmI&callback=myMap">
  </script>
  <!-- End Google Map -->

</body>

</html>
