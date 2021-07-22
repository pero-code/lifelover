<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- fontawesome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">
    
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">

    <!-- style.css -->
    <link rel="stylesheet" href="<?php bloginfo('stylesheet_url')?>">

    <?php wp_head(); ?>
  </head>
  <body>

    <!-- navigation -->
    <section class="navigation">
      <nav class="navbar navbar-expand-lg navbar-light">
        <div class="container flex-column">
          <a class="navbar-brand text-center" href="<?php echo esc_url( home_url() ); ?>"><img src="<?php echo get_template_directory_uri(); ?>/img/logo-removebg-preview.png" alt=""></a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav flex-column">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="http://localhost:10004/">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="http://localhost:10004//kategorija/psihologija/">Psihologija</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="http://localhost:10004//kategorija/filozofija/">Filozofija</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="http://localhost:10004//kategorija/duhovnost/">Duhovnost</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="http://localhost:10004//kategorija/ezoterija/">Ezoterija</a>
              </li>
            </ul>
          </div>
        </div>
      </nav>
    </section>