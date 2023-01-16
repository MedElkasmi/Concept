 <!-- ======= Header ======= -->
 <header id="header" class="fixed-top d-flex align-items-center">
    <div class="container d-flex align-items-center justify-content-between">

      <div class="logo">
        <h1 class="text-light"><a href="index.html">Serenity</a></h1>
        <!-- Uncomment below if you prefer to use an image logo -->
        <!-- <a href="index.html"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->
      </div>

      <nav id="navbar" class="navbar">
        <ul>
          <li><a class="active" href="index.html">{{ $menu->main_page}}</a></li>
          <li><a href="services.html">{{ $menu->second_page}}</a></li>
          <li><a href="pricing.html">{{ $menu->thrid_page}}</a></li>
          <li><a href="portfolio.html">{{ $menu->fourth_page}}</a></li>
          <li><a href="blog.html">{{ $menu->fifth_page}}</a></li>
          <li><a href="contact.html">{{ $menu->sixth_page}}</a></li>

          <li><a class="getstarted" href="">Get Started</a></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

    </div>
  </header><!-- End Header -->