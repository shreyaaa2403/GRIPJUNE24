<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- external css bootstrap  -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
    
    <!-- <link href="./css/style.css" rel="text/stylesheet"> -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome to Money Bank</title>
</head>
<body>

  <!-- header with connection and sql code -->
  <?php require_once './include/header.php' ?>


      <!-- Carosoul part start -->
      <section id="top" class="top">
      <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-indicators">
          <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
          <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
          <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img src="https://img.freepik.com/free-vector/digital-credit-card-payment-background-fast-technology-style_1017-30674.jpg" class="d-block w-100 img-fluid"  alt="...">
            <div class="carousel-caption d-none d-md-block external-img">
              <h5>Money Bank</h5>
              <p>A Safe place for your money.</p>
            </div>
          </div>
          <div class="carousel-item">
            <img src="https://img.freepik.com/free-photo/credit-card-finance-held-by-hand-banking-campaign_53876-129578.jpg" class="d-block w-100 img-fluid" alt="...">
            <div class="carousel-caption d-none d-md-block external-img">
              <h5>Transfers Money flawlessly</h5>
              <p>Transfering Money is just easy as Dialing a Phone.</p>
            </div>
          </div>
          <div class="carousel-item">
            <img src="https://img.freepik.com/premium-photo/3d-render-refinance-retention-business-home-financial-transactions-house-value-transfers-home_252172-360.jpg" class="d-block w-100 img-fluid" alt="...">
            <div class="carousel-caption d-none d-md-block external-img">
              <h5>Banking is Even Easier</h5>
              <p>Visit Our New official Website.</p>
            </div>
          </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
        </button>
      </div>
    </section>
      <!-- CArosoul part end -->

        <!-- middle container start-->
        <section id="services" class="services">
        <div class="container my-5">
            <h1 class="text-dark text-center my-5">Our Services</h1>
            <div class="container">
            <div class="row row-cols-2">       
              <div class="col ">
              <h3>Manage Everything at one place</h3>   
                <div class="container col my-5">
                   <p class="lead"> To see all Customers</p>
                   <a href="customer.php"><button class="btn btn-primary" type="button" >Get Started</button></a>
                </div>
                <div class="container col my-5">
                   <p class="lead"> To see all Transaction</p>
                   <a href="transaction.php"><button class="btn btn-primary" type="button" >Get Started</button></a>
                </div>
               
              </div>

              <div class="col">
              <img src="https://img.freepik.com/free-vector/bank-finance-infographic-template_23-2149732179.jpg" class="rounded img-fluid float-right" alt="...">
              </div>
            </div>
            </section>

            <section id="about" class="about">
      <div class="container">

        <div class="section-title " >
          <h1 class="text-center my-5">About Us</h1>
        </div>

        <div class="row content">
          <div class="col-lg-6 " >
            <img class="rounded img-fluid float-left" src="https://img.freepik.com/premium-photo/3d-rendering-cafe-terrace-with-bank-card-clipping-path-included_582173-46.jpg" />
          </div>
          <div class="col-lg-6 pt-4 pt-lg-0 " >
            <p>
             Money Bank is committed to providing exceptional financial services tailored to meet the diverse needs of our customers. With a legacy of excellence spanning [number of years] years, we have evolved into a trusted financial partner known for our integrity, reliability, and innovation.

<br>
<br>
<br>

Core Values
Customer Focus: Putting our customers at the heart of everything we do.
Integrity: Upholding the highest standards of ethics and transparency.
Innovation: Continuously adapting and innovating to deliver cutting-edge financial solutions.
Community Commitment: Supporting and investing in the communities we serve.
            </p>
            <a href="#" class="btn-learn-more">Learn More</a>
          </div>
        </div>

      </div>
    </section>
             
            </div>
          </div>
        <!-- middle container end -->

         <!-- footer  -->
        <?php require_once './include/footer.php' ?>  
</body>

      <!-- bootstrap js script -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous"></script>
</html>