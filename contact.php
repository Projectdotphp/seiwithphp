<!DOCTYPE html>
<html lang="en">

<head>
    <title>SEI - Contact</title>
    <?php include('./short/header.php')?>
</head>

<body>
    <!-- Spinner Start -->
    <?php include('./short/spinner.php')?>

    <!-- Topbar Start -->
    <?php include('./short/topbar.php')?>


    <!-- Navbar Start -->
    <?php include('./short/navbar.php')?>

   <!-- Page Header Start -->
   <div class="container-fluid page-header mb-5 p-0" style="background-image: url(../img/carousel-bg-2.jpg);">
    <div class="container-fluid page-header-inner py-5">
        <div class="container text-center">
            <span><h1 class="h2 section-title animated slideInDown text-white active text-uppercase fw-bold">Contact</h1>
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb justify-content-center text-uppercase text-white">
                    
                    <li class="breadcrumb-item text-white"><a href="../index" class="a-text">HOME</a></li>
                    <li class="breadcrumb-item text-white active" aria-current="page">PAGES</li>
                    <li class="breadcrumb-item text-white active  fw-bold" aria-current="page">CONTACT</li>
                </ol>
            </nav>
        </div>
    </div>
</div>
<!-- Page Header End -->


<!-- Contact Start -->
<div class="container-xxl py-5">
    <div class="container">
      <div class="text-center">
        <h1 class="mb-5 fw-bold text-uppercase text-primary" style=" font-weight: bolder;">Connect with us</h1>
      </div>
        <div class="row g-4">
            <div class="col-12">
                <div class="row gy-4">
                    <div class="col-md-4">
                        <div class="bg-light d-flex flex-column justify-content-center p-4">
                            <h5 class="text-uppercase  fw-bold"><i class="fa fa-contact-card text-primary me-2"></i>Contact Number</h5>
                            <p class="m-0"><a href="tel:+81-(0)252417300" style="text-decoration: none;" target="_blank">+81-(0)252417300</a></p>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="bg-light d-flex flex-column justify-content-center p-4">
                            <h5 class="text-uppercase fw-bold"><i class="fa fa-envelope-open text-primary me-2"></i>Email Address</h5>
                            <p class="m-0"><a  href="mailto:sei.informationph@gmail.com" style="text-decoration: none;" target="_blank">sei.informationph@gmail.com</a></p>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="bg-light d-flex flex-column justify-content-center p-4">
                            <h5 class="text-uppercase fw-bold"><i class="fa fa-location-arrow text-primary me-2"></i>Location</h5>
                            <p class="m-0"><a href="https://goo.gl/maps/k8DVuLoMgBU4X9Wp9" style="text-decoration: none;" target="_blank">Japan, 〒950-0081 Niigata, Chuo Ward, Sanwacho, 6−9 イリオス新潟</a></p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6 wow fadeIn" data-wow-delay="0.1s">
                <iframe class="position-relative rounded w-100 h-100"
                    src="https://my.atlistmaps.com/map/7e51b773-2be7-404b-98d9-457a6b4f0c53?share=true" 
                    allow="geolocation" frameborder="0" scrolling="no" allowfullscreen></iframe>
            </div>
            <div class="col-md-6">
                <div class="wow fadeInUp" data-wow-delay="0.2s">
                    <p class="mb-4">Please enter your question in the box below and we will get back to you as soon as possible </p>
                    <form>
                        <div class="row g-3">
                            <div class="col-md-6">
                                <div class="form-floating">
                                    <input type="text" class="form-control" id="name" name="name" placeholder="Your Name" required>
                                    <label for="name">Your Name</label>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-floating">
                                    <input type="email" class="form-control" id="email" name="email" placeholder="Your Email" required>
                                    <label for="email">Your Email</label>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-floating">
                                    <input type="text" class="form-control" id="subject" name="subject" placeholder="Subject" name="subject" required>
                                    <label for="subject">Subject</label>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-floating">
                                    <textarea class="form-control" placeholder="Leave a message here" id="message" name="message" style="height: 100px" required></textarea>
                                    <label for="message">Message</label>
                                </div>
                            </div>
                            <div class="col-12">
                                <button class="btn btn-primary w-100 py-3  fw-bold" type="submit" onclick="sendMail()">Send Message</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
  </div>
  <!-- Contact End -->
    

  <?php include('./short/call.php')?>
</body>

<!-- footer -->
<?php include('./short/footers.php')?>

<!-- Back to Top -->
<a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>
<?php include('./short/footer.php')?>
    

</body>

</html>
