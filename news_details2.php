<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <meta http-equiv="X-UA-Compatible" content="ie=edge">

  <meta name="copyright" content="MACode ID, https://macodeid.com/">

  <title>Medi-Locker</title>

  <link rel="stylesheet" href="../assets/css/maicons.css">

  <link rel="stylesheet" href="../assets/css/bootstrap.css">

  <link rel="stylesheet" href="../assets/vendor/owl-carousel/css/owl.carousel.css">

  <link rel="stylesheet" href="../assets/vendor/animate/animate.css">

  <link rel="stylesheet" href="../assets/css/theme.css">
</head>
<body>

  <!-- Back to top button -->
  <div class="back-to-top"></div>

  <header>
    <div class="topbar">
      <div class="container">
        <div class="row">
          <div class="col-sm-8 text-sm">
            <div class="site-info">
              <a href="#"><span class="mai-call text-primary"></span> +00 123 4455 6666</a>
              <span class="divider">|</span>
              <a href="#"><span class="mai-mail text-primary"></span> mail@example.com</a>
            </div>
          </div>
          <div class="col-sm-4 text-right text-sm">
            <div class="social-mini-button">
              <a href="#"><span class="mai-logo-facebook-f"></span></a>
              <a href="#"><span class="mai-logo-twitter"></span></a>
              <a href="#"><span class="mai-logo-dribbble"></span></a>
              <a href="#"><span class="mai-logo-instagram"></span></a>
            </div>
          </div>
        </div> <!-- .row -->
      </div> <!-- .container -->
    </div> <!-- .topbar -->

    <nav class="navbar navbar-expand-lg navbar-light shadow-sm">
      <div class="container">
        <a class="navbar-brand" href="#"><img src="Logo.png"></a>



        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupport" aria-controls="navbarSupport" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupport">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item">
              <a class="nav-link" href="index.php">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="about.php">About Us</a>
            </li>
        
            <li class="nav-item active">
              <a class="nav-link" href="news.php">News</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="contact.php">Contact</a>
            </li>
            <li class="nav-item">
              <a class="btn btn-primary ml-lg-3" href="login.php">Login / Register</a>
            </li>
          </ul>
        </div> <!-- .navbar-collapse -->
      </div> <!-- .container -->
    </nav>
  </header>

  <div class="page-section pt-5">
    <div class="container">
      <div class="row">
        <div class="col-lg-8">
          <nav aria-label="Breadcrumb">
            <ol class="breadcrumb bg-transparent py-0 mb-5">
              <li class="breadcrumb-item"><a href="index.html">Home</a></li>
              <li class="breadcrumb-item"><a href="blog.html">Blog</a></li>
              
            </ol>
          </nav>
        </div>
      </div> <!-- .row -->

      <div class="row">
        <div class="col-lg-12">
          <article class="blog-details">
            <div class="post-thumb">
              <img src="../assets/img/blog/doctor.jpg" alt="">
            </div>
          
            <h2 class="post-title h1">List of Countries without  Coronavirus </h2>
            <div class="post-content">
              <p>The new Omicron coronavirus variant has been confirmed in more than 25 countries and their number is expected to rise, Director-General of the World Health Organization (WHO) Tedros Adhanom Ghebreyesus had said.</p>

              <p>On November 26, the WHO named the new COVID-19 variant B.1.1.529, which has been detected in South Africa, as 'Omicron'. The WHO has classified Omicron as a 'variant of concern'.Dozens of countries have imposed travel restrictions on the southern African nations since the mutation was discovered.  List of Country :- South Africa ,Senegal,Botswana,Mexico,India,Netherland,Hong-Kong, and more.. </p>
            </div>
          </article> <!-- .blog-details -->

          <div class="comment-form-wrap pt-5">
            <h3 class="mb-5">Leave a comment</h3>
            <form  action="message.php" method="post" class="">
              <div class="form-row form-group">
                <div class="col-md-6">
                  <label for="name">Name</label>
                  <input type="text" name="name" class="form-control" id="name">
                </div>
                <div class="col-md-6">
                  <label for="email">Email </label>
                  <input type="email" name="email" class="form-control" id="email">
                </div>

                <div class="col-md-6">
                  <label for="email">State</label>
                  <input type="text" name="state" class="form-control" id="email">
                </div>

                <div class="col-md-6">
                  <label for="email">City</label>
                  <input type="text" name="city" class="form-control" id="email">
                </div>

                <div class="col-md-6">
                  <label for="email">Phone</label>
                  <input type="text" name="phone" class="form-control" id="email">
                </div>

              </div>
              
              <div class="form-group">
                <label for="message">Message</label>
                <textarea name="message" id="message" cols="30" rows="8" class="form-control"></textarea>
              </div>
              <div class="form-group">
                <input type="submit" value="Post Comment" class="btn btn-primary">
              </div>
  
            </form>
          </div>
        </div>
       
      </div>
    </div> <!-- .container -->
  </div> <!-- .page-section -->

  <footer class="page-footer">
    <div class="container">
      <div class="row px-md-3">
        <div class="col-sm-6 col-lg-3 py-3">
          <h5>Company</h5>
          <ul class="footer-menu">
            <li><a href="#">About Us</a></li>
            <li><a href="#">Career</a></li>
            <li><a href="#">Editorial Team</a></li>
            <li><a href="#">Protection</a></li>
          </ul>
        </div>
        <div class="col-sm-6 col-lg-3 py-3">
          <h5>More</h5>
          <ul class="footer-menu">
            <li><a href="#">Terms & Condition</a></li>
            <li><a href="#">Privacy</a></li>
            <li><a href="#">Advertise</a></li>
            <li><a href="#">Join as Doctors</a></li>
          </ul>
        </div>
        <div class="col-sm-6 col-lg-3 py-3">
          <h5>Our partner</h5>
          <ul class="footer-menu">
            <li><a href="#">Fitness</a></li>
            <li><a href="#">Drugs</a></li>
            <li><a href="#">Live</a></li>
          </ul>
        </div>
        <div class="col-sm-6 col-lg-3 py-3">
          <h5>Contact</h5>
          <p class="footer-link mt-2">A119,market Area,Smriti Nagar,Bhilai,chattisgarh</p>
          <a href="#" class="footer-link">9301195791</a>
          <a href="#" class="footer-link">medilocker@gmail.com</a>
        </div>
      </div>

      <hr>
    </div> <!-- .container -->
  </footer> <!-- .page-footer -->

</body>
</html>