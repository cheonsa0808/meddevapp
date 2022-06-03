<body>

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top">
    <div class="container d-flex align-items-center justify-content-between">
      <h1 class="logo"><a href="index.php">MedChecker</a></h1>
      <!-- Uncomment below if you prefer to use an image logo -->
      <!-- <a href="index.html" class="logo"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->

      <nav id="navbar" class="navbar">
        <ul>
          <li><a class="nav-link scrollto active" href="index.php">Home</a></li>
          <li><a class="nav-link scrollto" href="#testimonials">Community</a></li>
          <li><a class="nav-link scrollto" href="#contact">Contact</a></li>

          <?php
      if (!isset($_SESSION['verified_user_id'])):
      ?>
          <li><a class="nav-link scrollto" href="#team">Developers</a></li>

              <?php else : ?>
        <li class="nav-item">
        <a class="nav-link" href="profile.php">My Profile</a>
        </li>
        <li class="nav-item">
        <a class="nav-link" href="logout.php">Log Out</a>
        </li>
        <?php endif; ?>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

    </div>
  </header><!-- End Header -->