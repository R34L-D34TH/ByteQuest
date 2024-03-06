<!DOCTYPE html>
<html>

<head>
  <?php
    session_start();
    if (isset($_SESSION['loggedIn'])) 
    {
      // If user is logged in, set the URL accordingly
      $linkURL1 = 'easy.php'; 
      $linkURL2 = 'medium.php'; 
      $linkURL3 = 'hard.php';
      $linkURL4 = 'profile.php'; 


    } 
    else 
    {
      // If user is not logged in, set the URL accordingly
      $linkURL1 = 'login.html';
      $linkURL2 = 'login.html'; 
      $linkURL3 = 'login.html';
      $linkURL4 = 'login.html'; 


    }
  ?>
  <!-- Basic -->
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <!-- Mobile Metas -->
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <!-- Site Metas -->
  <meta name="keywords" content="" />
  <meta name="description" content="" />
  <meta name="author" content="" />

  <title>ByteQuest</title>

  <!-- slider stylesheet -->
  <!-- slider stylesheet -->
  <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" />

  <!-- bootstrap core css -->
  <link rel="stylesheet" type="text/css" href="css/bootstrap.css" />

  <!-- fonts style -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,700|Poppins:400,700&display=swap" rel="stylesheet">
  <!-- Custom styles for this template -->
  <link href="css/style.css" rel="stylesheet" />
  <!-- responsive style -->
  <link href="css/responsive.css" rel="stylesheet" />
</head>

<body>
  <div class="hero_area">
    <!-- header section strats -->
    <header class="header_section">
      <div class="container-fluid">
        <nav class="navbar navbar-expand-lg custom_nav-container pt-3">
          <a class="navbar-brand" href="index.php">
            <span>
              ByteQuest
            </span>
          </a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>

          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <div class="d-flex ml-auto flex-column flex-lg-row align-items-center">
              <ul class="navbar-nav  ">
                <li class="nav-item active">
                  <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="about.php"> About </a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="do.php"> What we do </a>
                </li>
              
              </ul>
              <div class="user_option">
                <a href="<?php echo $linkURL4; ?>">
                  <img src="images/user.png" alt="">
                </a>
              </div>
            </div>
          </div>
        </nav>
      </div>
    </header>
    <!-- end header section -->
    <!-- slider section -->
    <section class=" slider_section position-relative">
      <div class="container">
        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
          <ol class="carousel-indicators">
            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
          </ol>
          <div class="carousel-inner">
            <div class="carousel-item active">
              <div class="row">
                <div class="col">
                  <div class="detail-box">
                    <div>
                      <h2>
                        welcome to

                      </h2>
                      <h1>
                        ByteQuest
                      </h1>
                      <p>
                        Embark on a digital Odyssey and unlock secrets of Cyber Security..
                      </p>
                      <div class="">
                        <a href="<?php echo $linkURL1; ?>">
                          Easy
                        </a>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="carousel-item">
              <div class="row">
                <div class="col">
                  <div class="detail-box">
                    <div>
                      <h2>
                        welcome to

                      </h2>
                      <h1>
                        ByteQuest
                      </h1>
                      <p>
                        Embark on a digital Odyssey and unlock secrets of Cyber Security..
                      </p>
                      <div class="">
                        <a href="<?php echo $linkURL2; ?>">
                          Medium
                        </a>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="carousel-item">
              <div class="row">
                <div class="col">
                  <div class="detail-box">
                    <div>
                      <h2>
                        welcome to

                      </h2>
                      <h1>
                        ByteQuest
                      </h1>
                      <p>
                        Embark on a digital Odyssey and unlock secrets of Cyber Security..
                      </p>
                      <div class="">
                        <a href="<?php echo $linkURL3; ?>">
                          Hard
                        </a>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>

      </div>
    </section>
    <!-- end slider section -->
  </div>

  <!-- do section -->

  <section class="do_section layout_padding">
    <div class="container">
      <div class="heading_container">
        <h2>
          What we do
        </h2>
        <p>
          Welcome to our CTF playground, where hackers of all levels can test their skills, solve challenges and learn in a fun and interactive environment.
        </p>
      </div>
      <div class="do_container">
        <div class="box arrow-start arrow_bg">
          <div class="img-box">
            <img src="images/d-1.png" alt="">
          </div>
          <div class="detail-box">
            <h6>
              Platform
            </h6>
          </div>
        </div>
        <div class="box arrow-middle arrow_bg">
          <div class="img-box">
            <img src="images/d-2.png" alt="">
          </div>
          <div class="detail-box">
            <h6>
              Challenges
            </h6>
          </div>
        </div>
        <div class="box arrow-middle arrow_bg">
          <div class="img-box">
            <img src="images/d-3.png" alt="">
          </div>
          <div class="detail-box">
            <h6>
              Community
            </h6>
          </div>
        </div>
        <div class="box arrow-end arrow_bg">
          <div class="img-box">
      
            <img src="images/d-4.png" alt="">
          </div>
          <div class="detail-box">
            <h6>
              Prizes
            </h6>
          </div>
        </div>
        <div class="box ">
          <div class="img-box">
          
            <img src="images/d-5.png" alt="">
          </div>
          <div class="detail-box">
            <h6>
              Easy
            </h6>
          </div>
        </div>
      </div>
    </div>
  </section>


  <!-- client section -->
  <section class="client_section">
    <div class="container">
      <div class="heading_container">
        <h2>
          Team
        </h2>
      </div>
      <div class="carousel-wrap ">
        <div class="owl-carousel">
          <div class="item">
            <div class="box">
              <div class="img-box">
                <img src="images/c-2.jpeg" alt="">
              </div>
              <div class="detail-box">
                <h5>
                  Vaibhav Bhardwaj <br>
                  <span>
                    Project Manager
                  </span>
                </h5>
                <img src="images/quote.png" alt="">
                <p>
                  A project manager oversees tasks, resources, and timelines to ensure project completion within scope, budget, and schedule.

                </p>
              </div>
            </div>
          </div>

          <div class="item">
            <div class="box">
              <div class="img-box">
                <img src="images/c-1.jpeg" alt="">
              </div>
              <div class="detail-box">
                <h5>
                  Taniksh Rana <br>
                  <span>
                    Think Tank
                  </span>
                </h5>
                <img src="images/quote.png" alt="">
                <p>
                  A think tank conducts research and analysis to address societal, economic, and policy issues, informing decision-making.
                </p>
              </div>
            </div>
          </div>
          <div class="item">
            <div class="box">
              <div class="img-box">
                <img src="images/c-6.jpeg" alt="">
              </div>
              <div class="detail-box">
                <h5>
                  Atul Kumar <br>
                  <span>
                    Innovation Expert
                  </span>
                </h5>
                <img src="images/quote.png" alt="">
                <p>
                  
                  An innovation expert fosters creativity, problem-solving, and forward-thinking, driving organizational change and competitive advantage.
                </p>
              </div>
            </div>
          </div>
          <div class="item">
            <div class="box">
              <div class="img-box">
                <img src="images/c-5.jpeg" alt="">
              </div>

              <div class="detail-box">
                <h5>
                  Rishab Shukla <br>
                  <span>
                    Innovation Expert
                  </span>
                </h5>
                <img src="images/quote.png" alt="">
                <p>
                  
                  An innovation expert fosters creativity, problem-solving, and forward-thinking, driving organizational change and competitive advantage.
                </p>
              </div>
            </div>
          </div>

          <div class="item">
            <div class="box">
              <div class="img-box">
                <img src="images/c-3.jpeg" alt="">
              </div>
              <div class="detail-box">
                <h5>
                  Anmol Suman <br>
                  <span>
                    Think Tank
                  </span>
                </h5>
                <img src="images/quote.png" alt="">
                <p>
                  A think tank conducts research and analysis to address societal, economic, and policy issues, informing decision-making.
                </p>
              </div>
            </div>
          </div>
          <div class="item">
            <div class="box">
              <div class="img-box">
                <img src="images/c-4.jpeg" alt="">
              </div>
              <div class="detail-box">
                <h5>
                  Deepak Kumar <br>
                  <span>
                    Frontend Developer
                  </span>
                </h5>
                <img src="images/quote.png" alt="">
                <p>
                  A frontend developer designs and implements user interfaces, focusing on the client-side of web applications for optimal user experience.
                </p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- end client section -->




  <!-- info section -->
  <section class="info_section ">
    <div class="container">
      <div class="row">
        <div class="col-md-3">
          <div class="info_contact">
            <h5>
              About 
            </h5>
            <div>
              <div class="img-box">
                <img src="images/location-white.png" width="18px" alt="">
              </div>
              <p>
                PCTE group of institutes
              </p>
            </div>
            <div>
              <div class="img-box">
                <img src="images/telephone-white.png" width="12px" alt="">
              </div>
              <p>
                +91 8344239888
              </p>
            </div>
            <div>
              <div class="img-box">
                <img src="images/envelope-white.png" width="18px" alt="">
              </div>
              <p>
                pcte123@gmail.com
              </p>
            </div>
          </div>
        </div>
        <div class="col-md-3">
          <div class="info_info">
            <h5>
              Informations
            </h5>
            <p>
              Welcome to our CTF playground, where hackers of all levels can test their skills, solve challenges and learn in a fun and interactive environment.
            </p>
          </div>
        </div>

        <div class="col-md-3">
          <div class="info_insta">
            <h5>
              Team Instagram
            </h5>
            <div class="insta_container">
              <div>
                <a href="https://www.instagram.com/rishab_295?utm_source=qr&igsh=M2t4cGZ6dTdyOGN5">
                  <div class="insta-box b-1">
                    <img src="images/c-5.jpeg" alt="">
                  </div>
                </a>
                <a href="https://www.instagram.com/hi_am_anmol?igsh=azVldThoMGQ1OXoz">
                  <div class="insta-box b-2">
                    <img src="images/c-3.jpeg" alt="">
                  </div>
                </a>
              </div>

              <div>
                <a href="https://www.instagram.com/hi_am_anmol?igsh=azVldThoMGQ1OXoz">
                  <div class="insta-box b-3">
                    <img src="images/c-4.jpeg" alt="">
                  </div>
                </a>
                <a href="https://www.instagram.com/rishab_295?utm_source=qr&igsh=M2t4cGZ6dTdyOGN5">
                  <div class="insta-box b-4">
                    <img src="images/c-6.jpeg" alt="">
                  </div>
                </a>
              </div>
              <div>
                <a href="https://www.instagram.com/itz._.taniksh?igsh=MTBqMmRteGw4Y2c1Mg==">
                  <div class="insta-box b-3">
                    <img src="images/c-1.jpeg" alt="">
                  </div>
                </a>
                <a href="https://www.instagram.com/your_vrock?igsh=MW92ZDd3eG1rN293dw==">
                  <div class="insta-box b-4">
                    <img src="images/c-2.jpeg" alt="">
                  </div>
                </a>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-3">
          <div class="info_form ">
            <h5>
              Newsletter
            </h5>
            <form action="">
              <input type="email" placeholder="Enter your email">
              <button>
                Subscribe
              </button>
            </form>
            
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- end info_section -->


  <!-- footer section -->
  <section class="container-fluid footer_section">
    <p>
      &copy; 2024 NextQuantum Hackathon.
    </p>
  </section>
  <!-- footer section -->

  <script type="text/javascript" src="js/jquery-3.4.1.min.js"></script>
  <script type="text/javascript" src="js/bootstrap.js"></script>
  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js">
  </script>
  <!-- owl carousel script 
    -->
  <script type="text/javascript">
    $(".owl-carousel").owlCarousel({
      loop: true,
      margin: 0,
      navText: [],
      center: true,
      autoplay: true,
      autoplayHoverPause: true,
      responsive: {
        0: {
          items: 1
        },
        1000: {
          items: 3
        }
      }
    });
  </script>
  <!-- end owl carousel script -->

</body>

</html>