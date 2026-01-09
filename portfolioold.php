<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <title>Portfolio Details - Passion Bootstrap Template</title>
  <meta name="description" content="">
  <meta name="keywords" content="">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Fonts -->
  <link href="https://fonts.googleapis.com" rel="preconnect">
  <link href="https://fonts.gstatic.com" rel="preconnect" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&family=Inter:wght@100;200;300;400;500;600;700;800;900&family=Barlow:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Main CSS File -->
  <link href="assets/css/main.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: Passion
  * Template URL: https://bootstrapmade.com/passion-bootstrap-template/
  * Updated: Jul 21 2025 with Bootstrap v5.3.7
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body class="portfolio-details-page">

  <!-- ========================= header start ========================= -->
  <?php include 'header.php'; ?>
  <!-- ========================= header end ========================= -->

  <main class="main">

    <!-- Page Title -->
    <div class="page-title dark-background" style="background-image: url(assets/img/bg/bg-14.webp);">
      <div class="container position-relative">
        <h1>Portfolio Details</h1>
        <p>Esse dolorum voluptatum ullam est sint nemo et est ipsa porro placeat quibusdam quia assumenda numquam molestias.</p>
        <nav class="breadcrumbs">
          <ol>
            <li><a href="index.html">Home</a></li>
            <li class="current">Portfolio Details</li>
          </ol>
        </nav>
      </div>
    </div><!-- End Page Title -->

    <!-- Portfolio Details Section -->
    <section id="portfolio-details" class="portfolio-details section">

      <div class="container">

        <div class="project-header">
          <div class="row">
            <div class="col-lg-7">
              <h1 class="project-title">Interactive Mobile Banking Platform</h1>
              <div class="project-meta">
                <div class="meta-item">
                  <i class="bi bi-calendar3"></i>
                  <span>June 2025</span>
                </div>
                <div class="meta-item">
                  <i class="bi bi-building"></i>
                  <span>FinTech Innovations Inc.</span>
                </div>
                <div class="meta-item">
                  <i class="bi bi-link-45deg"></i>
                  <a href="#" target="_blank">bankingapp.example.com</a>
                </div>
              </div>
              <div class="project-tags">
                <span class="tag">Mobile App</span>
                <span class="tag">UX Design</span>
                <span class="tag">FinTech</span>
              </div>
            </div>
            <div class="col-lg-5 d-flex align-items-center justify-content-end">
              <div class="technologies">
                <div class="tech-title">Technologies Used:</div>
                <div class="tech-badges">
                  <span>React Native</span>
                  <span>Node.js</span>
                  <span>MongoDB</span>
                  <span>AWS</span>
                  <span>Redux</span>
                </div>
              </div>
            </div>
          </div>
        </div>

        <div class="media-showcase">
          <div class="portfolio-details-slider swiper init-swiper swiper-fade swiper-initialized swiper-horizontal swiper-watch-progress swiper-backface-hidden">
            <script type="application/json" class="swiper-config">
              {
                "loop": true,
                "speed": 800,
                "autoplay": {
                  "delay": 5000
                },
                "effect": "fade",
                "fadeEffect": {
                  "crossFade": true
                },
                "slidesPerView": 1,
                "pagination": {
                  "el": ".swiper-pagination",
                  "clickable": true,
                  "dynamicBullets": true
                }
              }
            </script>
            <div class="swiper-wrapper" id="swiper-wrapper-595f71b1bf967dd9" aria-live="off" style="transition-duration: 0ms; transition-delay: 0ms;">
              <div class="swiper-slide swiper-slide-prev" style="width: 1296px; opacity: 0; transform: translate3d(0px, 0px, 0px); transition-duration: 0ms;" role="group" aria-label="1 / 3" data-swiper-slide-index="0">
                <img src="assets/img/portfolio/portfolio-1.webp" alt="Portfolio Image" class="img-fluid">
              </div>
              <div class="swiper-slide swiper-slide-visible swiper-slide-fully-visible swiper-slide-active" style="width: 1296px; opacity: 1; transform: translate3d(-1296px, 0px, 0px); transition-duration: 0ms;" role="group" aria-label="2 / 3" data-swiper-slide-index="1">
                <img src="assets/img/portfolio/portfolio-2.webp" alt="Portfolio Image" class="img-fluid">
              </div>
              <div class="swiper-slide swiper-slide-next" style="width: 1296px; opacity: 0; transform: translate3d(-2592px, 0px, 0px); transition-duration: 0ms;" role="group" aria-label="3 / 3" data-swiper-slide-index="2">
                <img src="assets/img/portfolio/portfolio-3.webp" alt="Portfolio Image" class="img-fluid">
              </div>
            </div>
            <div class="swiper-pagination swiper-pagination-clickable swiper-pagination-bullets swiper-pagination-horizontal swiper-pagination-bullets-dynamic" style="width: 190px;"><span class="swiper-pagination-bullet swiper-pagination-bullet-active-prev" style="left: 0px;" tabindex="0" role="button" aria-label="Go to slide 1"></span><span class="swiper-pagination-bullet swiper-pagination-bullet-active swiper-pagination-bullet-active-main" style="left: 0px;" tabindex="0" role="button" aria-label="Go to slide 2" aria-current="true"></span><span class="swiper-pagination-bullet swiper-pagination-bullet-active-next" style="left: 0px;" tabindex="0" role="button" aria-label="Go to slide 3"></span></div>
            <span class="swiper-notification" aria-live="assertive" aria-atomic="true"></span><span class="swiper-notification" aria-live="assertive" aria-atomic="true"></span><span class="swiper-notification" aria-live="assertive" aria-atomic="true"></span><span class="swiper-notification" aria-live="assertive" aria-atomic="true"></span><span class="swiper-notification" aria-live="assertive" aria-atomic="true"></span><span class="swiper-notification" aria-live="assertive" aria-atomic="true"></span><span class="swiper-notification" aria-live="assertive" aria-atomic="true"></span><span class="swiper-notification" aria-live="assertive" aria-atomic="true"></span><span class="swiper-notification" aria-live="assertive" aria-atomic="true"></span><span class="swiper-notification" aria-live="assertive" aria-atomic="true"></span><span class="swiper-notification" aria-live="assertive" aria-atomic="true"></span><span class="swiper-notification" aria-live="assertive" aria-atomic="true"></span><span class="swiper-notification" aria-live="assertive" aria-atomic="true"></span><span class="swiper-notification" aria-live="assertive" aria-atomic="true"></span><span class="swiper-notification" aria-live="assertive" aria-atomic="true"></span><span class="swiper-notification" aria-live="assertive" aria-atomic="true"></span><span class="swiper-notification" aria-live="assertive" aria-atomic="true"></span><span class="swiper-notification" aria-live="assertive" aria-atomic="true"></span><span class="swiper-notification" aria-live="assertive" aria-atomic="true"></span><span class="swiper-notification" aria-live="assertive" aria-atomic="true"></span><span class="swiper-notification" aria-live="assertive" aria-atomic="true"></span><span class="swiper-notification" aria-live="assertive" aria-atomic="true"></span><span class="swiper-notification" aria-live="assertive" aria-atomic="true"></span><span class="swiper-notification" aria-live="assertive" aria-atomic="true"></span><span class="swiper-notification" aria-live="assertive" aria-atomic="true"></span><span class="swiper-notification" aria-live="assertive" aria-atomic="true"></span><span class="swiper-notification" aria-live="assertive" aria-atomic="true"></span><span class="swiper-notification" aria-live="assertive" aria-atomic="true"></span><span class="swiper-notification" aria-live="assertive" aria-atomic="true"></span><span class="swiper-notification" aria-live="assertive" aria-atomic="true"></span><span class="swiper-notification" aria-live="assertive" aria-atomic="true"></span><span class="swiper-notification" aria-live="assertive" aria-atomic="true"></span><span class="swiper-notification" aria-live="assertive" aria-atomic="true"></span>
          </div>
        </div>

        <div class="project-content">
          <div class="row gy-4">
            <div class="col-lg-7">
              <div class="description-box">
                <h3>Project Overview</h3>
                <p class="lead">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin dignissim, justo non commodo pellentesque, eros massa convallis ipsum, vel ultrices mauris arcu nec magna. Vestibulum ante ipsum primis in faucibus orci luctus et.</p>
                <p>Nulla porttitor accumsan tincidunt. Vivamus magna justo, lacinia eget consectetur sed, convallis at tellus. Curabitur aliquet quam id dui posuere blandit. Mauris blandit aliquet elit, eget tincidunt nibh pulvinar a nulla porttitor accumsan.</p>
              </div>
            </div>

            <div class="col-lg-5">
              <div class="project-stats">
                <div class="stat-item">
                  <div class="stat-number">14k+</div>
                  <div class="stat-label">Active Users</div>
                </div>
                <div class="stat-item">
                  <div class="stat-number">98%</div>
                  <div class="stat-label">Client Satisfaction</div>
                </div>
                <div class="stat-item">
                  <div class="stat-number">6</div>
                  <div class="stat-label">Months Development</div>
                </div>
                <div class="stat-item">
                  <div class="stat-number">4.8</div>
                  <div class="stat-label">App Store Rating</div>
                </div>
              </div>
            </div>
          </div>

          <div class="row gy-4">
            <div class="col-md-6">
              <div class="info-card">
                <div class="card-icon">
                  <i class="bi bi-lightbulb"></i>
                </div>
                <h4>The Challenge</h4>
                <p>Donec rutrum congue leo eget malesuada. Pellentesque in ipsum id orci porta dapibus. Cras ultricies ligula sed magna dictum porta. Curabitur arcu erat, accumsan id imperdiet et, porttitor at sem.</p>
              </div>
            </div>

            <div class="col-md-6">
              <div class="info-card">
                <div class="card-icon">
                  <i class="bi bi-trophy"></i>
                </div>
                <h4>The Solution</h4>
                <p>Vestibulum ac diam sit amet quam vehicula elementum sed sit amet dui. Curabitur non nulla sit amet nisl tempus convallis quis ac lectus. Donec sollicitudin molestie malesuada. Praesent sapien massa.</p>
              </div>
            </div>
          </div>

          <div class="project-gallery">
            <h3>Project Gallery</h3>
            <div class="row g-3">
              <div class="col-6 col-md-3">
                <div class="gallery-item">
                  <img src="assets/img/portfolio/portfolio-9.webp" alt="Project Image" class="img-fluid glightbox">
                </div>
              </div>
              <div class="col-6 col-md-3">
                <div class="gallery-item">
                  <img src="assets/img/portfolio/portfolio-10.webp" alt="Project Image" class="img-fluid glightbox">
                </div>
              </div>
              <div class="col-6 col-md-3">
                <div class="gallery-item">
                  <img src="assets/img/portfolio/portfolio-4.webp" alt="Project Image" class="img-fluid glightbox">
                </div>
              </div>
              <div class="col-6 col-md-3">
                <div class="gallery-item">
                  <img src="assets/img/portfolio/portfolio-6.webp" alt="Project Image" class="img-fluid glightbox">
                </div>
              </div>
            </div>
          </div>

          <div class="key-features">
            <h3>Key Features</h3>
            <div class="row g-4">
              <div class="col-md-4">
                <div class="feature-item">
                  <i class="bi bi-shield-check"></i>
                  <h5>Secure Authentication</h5>
                  <p>Praesent sapien massa, convallis a pellentesque nec, egestas non nisi.</p>
                </div>
              </div>
              <div class="col-md-4">
                <div class="feature-item">
                  <i class="bi bi-graph-up-arrow"></i>
                  <h5>Real-time Analytics</h5>
                  <p>Curabitur non nulla sit amet nisl tempus convallis quis ac lectus.</p>
                </div>
              </div>
              <div class="col-md-4">
                <div class="feature-item">
                  <i class="bi bi-gear-wide-connected"></i>
                  <h5>API Integration</h5>
                  <p>Donec sollicitudin molestie malesuada et, porttitor at sem augue.</p>
                </div>
              </div>
            </div>
          </div>

          <div class="project-navigation">
            <a href="#" class="prev-project">
              <i class="bi bi-arrow-left"></i>
              <span>Previous Project</span>
            </a>
            <a href="#" class="all-projects">
              <i class="bi bi-grid"></i>
              <span>All Projects</span>
            </a>
            <a href="#" class="next-project">
              <span>Next Project</span>
              <i class="bi bi-arrow-right"></i>
            </a>
          </div>
        </div>

      </div>

    </section><!-- /Portfolio Details Section -->

  </main>

  <!-- ========================= header start ========================= -->
  <?php include 'footer.php'; ?>
  <!-- ========================= header end ========================= -->

  <!-- Scroll Top -->
  <a href="#" id="scroll-top" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Preloader -->
  <div id="preloader">
    <div></div>
    <div></div>
    <div></div>
    <div></div>
  </div>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/purecounter/purecounter_vanilla.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/imagesloaded/imagesloaded.pkgd.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>

  <!-- Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>