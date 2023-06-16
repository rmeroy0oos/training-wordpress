<!DOCTYPE html>

<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri() ?>/style.css" >
        <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri() ?>/css/bootstrap.min.css" >
    </head>
    <body>
    <nav class="navbar overflow-hidden fixed-top navbar-expand-lg bg-body-tertiary">
      <div class="container-fluid">
        <a class="navbar-brand" href="#">
          <img class="px-5" src="<?php echo get_stylesheet_directory_uri() ?>/images/logo.png" alt="training" >
        </a>
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
        <div class="navbar-nav position-absolute top-50 start-50 translate-middle">
            <a class="nav-link" href="#">About</a>
            <a class="nav-link" href="#">Properties</a>
            <a class="nav-link" href="#">Neighborhoods</a>
            <a class="nav-link" href="#">Press</a>
            <a class="nav-link" href="#">Blog</a>
            <a class="nav-link" href="#">Contact</a>
          </div>
        </div>
        <a class="navbar" href="#">
          <img class="px-3" src="<?php echo get_stylesheet_directory_uri() ?>/images/phone.png" alt="training" >
        </a>
        <a class="navbar" href="#">
          <img class="px-3" src="<?php echo get_stylesheet_directory_uri() ?>/images/search.png" alt="training" >
        </a>
        <a class="navbar" href="#">
          <img class="px-3" src="<?php echo get_stylesheet_directory_uri() ?>/images/+.png" alt="training" >
        </a>
      </div>
    </nav>
      <!-- hello wordpress
      <div class="dropdown">
        <button class="btn btn-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
        PROPERTIES
        </button>
        <ul class="dropdown-menu">
          <li><a class="dropdown-item" href="#">ACTIVE LISTINGS</a></li>
          <li><a class="dropdown-item" href="#">SOLD LISTINGS</a></li>
          <li><a class="dropdown-item" href="#">LEASES</a></li>
          <li><a class="dropdown-item" href="#">PROPERTY SEARCH</a></li>
        </ul>
      </div> -->
        <div id="carouselExample" class="carousel slide">
          <div class="carousel-inner">
            <div class="carousel-item active imgItem">
            <img src="<?php echo get_stylesheet_directory_uri() ?>/images/slide-1.png" class="d-block w-100 imgfilter" alt="Slide1">
              <div class="carousel-caption top-0 mt-5 justify-content-center align-items-center">
                <h1 class="mt-5 display-1 fw-bolder text-capitalize textOverlay ">Expertise, Answers, and Access to the Greatest Network</h1>
              </div>
            </div>
            <div class="carousel-item imgItem">
            <img src="<?php echo get_stylesheet_directory_uri() ?>/images/slide-2.png" class="d-block w-100 imgfilter" alt="Slide 2">
            </div>
            <div class="carousel-item imgItem">
              <img src="<?php echo get_stylesheet_directory_uri() ?>/images/slide-3.png" class="d-block w-100 imgfilter" alt="Slide 3">
            </div>
            <div class="carousel-item imgItem">
              <img src="<?php echo get_stylesheet_directory_uri() ?>/images/slide-4.png" class="d-block w-100 imgfilter" alt="Slide 4">
            </div>
            <div class="carousel-item imgItem">
              <img src="<?php echo get_stylesheet_directory_uri() ?>/images/slide-5.png" class="d-block w-100 imgfilter" alt="Slide 5">
            </div>
            <div class="carousel-item imgItem">
              <img src="<?php echo get_stylesheet_directory_uri() ?>/images/slide-6.png" class="d-block w-100 imgfilter" alt="Slide 6">
            </div>
            <div class="carousel-item imgItem">
              <img src="<?php echo get_stylesheet_directory_uri() ?>/images/slide-7.png" class="d-block w-100 imgfilter" alt="Slide 7">
            </div>
            <div class="carousel-item imgItem">
              <img src="<?php echo get_stylesheet_directory_uri() ?>/images/slide-8.png" class="d-block w-100 imgfilter" alt="Slide 8">
            </div>
            <div class="carousel-item imgItem">
              <img src="<?php echo get_stylesheet_directory_uri() ?>/images/slide-9.png" class="d-block w-100 imgfilter" alt="Slide 9">
            </div> 
        </div>
          <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
          </button>
          <button class="carousel-control-next" type="button" data-bs-target="#carouselExample" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
          </button>
        </div>
        
        <div class="container text-center my-3">
    <h2 class="font-weight-light">EXCLUSIVE LISTINGS</h2>
    <div class="row mx-auto my-auto justify-content-center">
        <div id="recipeCarousel" class="carousel slide exclusiveCarousel" data-bs-ride="carousel">
            <div class="carousel-inner" role="listbox">
                <div class="carousel-item active">
                    <div class="col-md-3">
                        <div class="card">
                            <div class="card-img">
                                <img src="<?php echo get_stylesheet_directory_uri() ?>/images/exlist-1.png" class="img-fluid">
                            </div>
                            <div class="card-img-overlay">Slide 1</div>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="col-md-3">
                        <div class="card">
                            <div class="card-img">
                                <img src="<?php echo get_stylesheet_directory_uri() ?>/images/exlist-2.png" class="img-fluid">
                            </div>
                            <div class="card-img-overlay">Slide 2</div>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="col-md-3">
                        <div class="card">
                            <div class="card-img">
                                <img src="<?php echo get_stylesheet_directory_uri() ?>/images/exlist-3.png" class="img-fluid">
                            </div>
                            <div class="card-img-overlay">Slide 3</div>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="col-md-3">
                        <div class="card">
                            <div class="card-img">
                                <img src="<?php echo get_stylesheet_directory_uri() ?>/images/exlist-r1.png" class="img-fluid">
                            </div>
                            <div class="card-img-overlay">Slide 4</div>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="col-md-3">
                        <div class="card">
                            <div class="card-img">
                                <img src="<?php echo get_stylesheet_directory_uri() ?>/images/exlist-r2.png" class="img-fluid">
                            </div>
                            <div class="card-img-overlay">Slide 5</div>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="col-md-3">
                        <div class="card">
                            <div class="card-img">
                                <img src="<?php echo get_stylesheet_directory_uri() ?>/images/exlist-r3.png" class="img-fluid">
                            </div>
                            <div class="card-img-overlay">Slide 6</div>
                        </div>
                    </div>
                </div>
            </div>
            <a class="carousel-control-prev bg-transparent w-aut" href="#recipeCarousel" role="button" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            </a>
            <a class="carousel-control-next bg-transparent w-aut" href="#recipeCarousel" role="button" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
            </a>
        </div>
    </div>
    <div class="container-fluid bgMaster" style="background-image: url('<?php echo get_stylesheet_directory_uri() ?>/images/bg-image.png');">
      <div class="row">
        <div class="col-md-3 col-sm-3">
          <img src="<?php echo get_stylesheet_directory_uri() ?>/images/meet.png" class="img-fluid mt-5 p-5">
        </div>
        <div class="col-md-3 col-sm-3">
          <h3 class="fw-bold mt-5 p-4">Meet Juliette Hohnen</h3>
          <p class="lh-base text-justify fs-6">
          One of The Hollywood Reporter’s Top 30 Hollywood Real Estate Agents, Juliette Hohnen is an unstoppable force in the Los Angeles real estate market. With over 16 years of experience as a Realtor and developer/house flipper, 
          Juliette has unparalleled knowledge of the Southern California residential real estate market, working in Beverly Hills, Bel Air, Brentwood, Pacific Palisades, Santa Monica, Venice, Malibu, Hancock Park, Hollywood Hills, Los Feliz, Ojai and across the greater Los Angeles area. 
          As a Brit who worked as a journalist at MTV in the 90s, Juliette’s extensive client list includes performers, producers, and executives from the entertainment industry, entrepreneurs, investors, designers, artists, and creative types, from California, the East Coast, the United Kingdom, Australia, Europe and beyond. Leveraging these connections and building solid relationships within the real estate 
          </p>
        </div>
        <div class="col-md-3 col-sm-3">
          <p class="lh-base text-justifu fs-6 mt-5 p-3" >
          One of The Hollywood Reporter’s Top 30 Hollywood Real Estate Agents, Juliette Hohnen is an unstoppable force in the Los Angeles real estate market. With over 16 years of experience as a Realtor and developer/house flipper, 
          Juliette has unparalleled knowledge of the Southern California residential real estate market, working in Beverly Hills, Bel Air, Brentwood, Pacific Palisades, Santa Monica, Venice, Malibu, Hancock Park, Hollywood Hills, Los Feliz, Ojai and across the greater Los Angeles area. 
          As a Brit who worked as a journalist at MTV in the 90s, Juliette’s extensive client list includes performers, producers, and executives from the entertainment industry, entrepreneurs, investors, designers, artists, and creative types, from California, the East Coast, the United Kingdom, Australia, Europe and beyond. Leveraging these connections and building solid relationships within the real estate 
          </p>
        </div>
      </div>
    </div>

    <!-- <img src="<?php echo get_stylesheet_directory_uri() ?>/images/meet.png" class="img-fluid" alt="..."> -->
    </div>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" ></script>
    <script src="<?php echo get_stylesheet_directory_uri() ?>/js/bootstrap.min.js"></script>
    </body>
</html>