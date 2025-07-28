<!DOCTYPE html>
<html lang="en">
<head>
    <title>Intramural Management System</title>
</head>
<body>

<!-- FOR MESSAGE POPUP (DONT DELETE) -->
<!--     <?php if (isset($message) && $message): ?>
        <div class="container mt-3">
            <div class="alert alert-<?php echo htmlspecialchars($message['type']); ?> alert-dismissible fade show" role="alert" style="z-index: 9999; position: relative;">
                <?php echo htmlspecialchars($message['text']); ?>
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        </div>
    <?php endif; ?> -->
    <?php require_once __DIR__ . '/home/navbar.php'; ?>

<!-- HERO -->
<div class="container py-5">
  <div class="container py-5 mb-4 mt-4">
    <div class="card shadow-lg rounded-4 border-0 hero-card">
      <div class="card-body p-4">
        <div class="row flex-lg-row-reverse align-items-center g-5 py-3 hero-row justify-content-center">
             <div class="col-12 col-sm-10 col-md-8 col-lg-5 d-flex justify-content-center align-items-center">
               <img src="<?php echo $url->base_url(); ?>/public/assets/image/SUNN.png" class="img-fluid d-block mx-auto hero-img" alt="Bootstrap Themes" style="max-width:350px; max-height:250px;" loading="lazy">
          </div>
          <div class="col-12 col-lg-6 text-center">
            <h1 class="display-5 fw-bold lh-1 mb-3 hero-title">Intramurals 2025</h1>
            <p class="lead hero-lead">State University Of Northern Negros blah blah text nadi</p>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<!-- COLLEGES -->
<div class="container py-5">
  <h2 class="text-center mb-4 fw-bold text-success">Participating Colleges</h2>
  <div class="row justify-content-center g-4 colleges-row">
    <div class="col-6 col-sm-6 col-md-4 col-lg-3">
      <div class="card shadow-lg rounded-4 h-100 college-card text-center border-0 hover-card">
        <img class="card-img-top p-3" src="<?php echo $url->base_url(); ?>/public/assets/image/colleges/CICTE.png" alt="CICTE">
        <div class="card-body">
          <h5 class="card-title fw-bold">CICTE</h5>
          <p class="card-text">College of Information and Communications Technology and Engineering</p>
        </div>
      </div>
    </div>
    <div class="col-6 col-sm-6 col-md-4 col-lg-3">
      <div class="card shadow-lg rounded-4 h-100 college-card text-center border-0 hover-card">
        <img class="card-img-top p-3" src="<?php echo $url->base_url(); ?>/public/assets/image/colleges/CFAS.png" alt="CFAS">
        <div class="card-body">
          <h5 class="card-title fw-bold">CFAS</h5>
          <p class="card-text">College of Fisheries and Allied Sciences</p>
        </div>
      </div>
    </div>
    <div class="col-6 col-sm-6 col-md-4 col-lg-3">
      <div class="card shadow-lg rounded-4 h-100 college-card text-center border-0 hover-card">
        <img class="card-img-top p-3" src="<?php echo $url->base_url(); ?>/public/assets/image/colleges/CAS.png" alt="CAS">
        <div class="card-body">
          <h5 class="card-title fw-bold">CAS</h5>
          <p class="card-text">College of Arts and Sciences</p>
        </div>
      </div>
    </div>
    <div class="col-6 col-sm-6 col-md-4 col-lg-3">
      <div class="card shadow-lg rounded-4 h-100 college-card text-center border-0 hover-card">
        <img class="card-img-top p-3" src="<?php echo $url->base_url(); ?>/public/assets/image/colleges/CBM.png" alt="CBM">
        <div class="card-body">
          <h5 class="card-title fw-bold">CBM</h5>
          <p class="card-text">College of Business and Management</p>
        </div>
      </div>
    </div>
    <div class="col-6 col-sm-6 col-md-4 col-lg-3">
      <div class="card shadow-lg rounded-4 h-100 college-card text-center border-0 hover-card">
        <img class="card-img-top p-3" src="<?php echo $url->base_url(); ?>/public/assets/image/colleges/COED.png" alt="COED">
        <div class="card-body">
          <h5 class="card-title fw-bold text-primary">COED</h5>
          <p class="card-text">College of Education</p>
        </div>
      </div>
    </div>
    <div class="col-6 col-sm-6 col-md-4 col-lg-3">
      <div class="card shadow-lg rounded-4 h-100 college-card text-center border-0 hover-card">
        <img class="card-img-top p-3" src="<?php echo $url->base_url(); ?>/public/assets/image/colleges/CONAHS.png" alt="CONAHS">
        <div class="card-body">
          <h5 class="card-title fw-bold">CONAHS</h5>
          <p class="card-text">College of Nursing and Allied Health Sciences</p>
        </div>
      </div>
    </div>
    <div class="col-6 col-sm-6 col-md-4 col-lg-3">
      <div class="card shadow-lg rounded-4 h-100 college-card text-center border-0 hover-card">
        <img class="card-img-top p-3" src="<?php echo $url->base_url(); ?>/public/assets/image/colleges/CCJE.png" alt="CCJE">
        <div class="card-body">
          <h5 class="card-title fw-bold">CCJE</h5>
          <p class="card-text">College of Criminal Justice Education</p>
        </div>
      </div>
    </div>
    <div class="col-6 col-sm-6 col-md-4 col-lg-3">
      <div class="card shadow-lg rounded-4 h-100 college-card text-center border-0 hover-card">
        <img class="card-img-top p-3" src="<?php echo $url->base_url(); ?>/public/assets/image/colleges/CAAS.png" alt="CAAS">
        <div class="card-body">
          <h5 class="card-title fw-bold">CAAS</h5>
          <p class="card-text">College of Agriculture and Allied Sciences</p>
        </div>
      </div>
    </div>
  </div>
</div>

<!-- Developer Section -->
<div class="container mt-4 mb-5">
  <h2 class="developer-section-title text-center mb-4">MEET THE DEVELOPER</h2>
  <div class="row justify-content-center">
    <div class="col-md-4">
      <div class="dev-card text-center">
        <img src="<?php echo $url->base_url(); ?>public/assets/image/dev-placeholder.jpg" alt="Carl [Your Last Name]" class="dev-photo mb-3">
        <h3 class="dev-name">Carl</h3>
        <p class="dev-title">BSIT Student &mdash; Developer</p>
      </div>
    </div>
  </div>
</div>
<!-- Map -->
  <div class="container">
    <div class="row">
      <div class="col-12 mt-5">
        <div class="card">
          <div class="card-body">
            <div class="row">
              <div class="col-12">
                <h1 class="text-center mb-4">Location</h1>
                <div class="map-container">
                  <iframe frameborder="0" scrolling="no" marginheight="0" marginwidth="0"
  src="https://www.openstreetmap.org/export/embed.html?bbox=123.413593%2C10.875677%2C123.417593%2C10.879677&amp;layer=mapnik&amp;marker=10.877677%2C123.415593"
  style="border: 0; width: 100%; height: 100%; display: block; margin: 0 auto;"></iframe>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
<!-- FOOTER -->
   <footer class="footer-dark">
    <div class="footer-container">
      <div class="footer-left">
        <h1 class="footer-title">
          Contact Info <span class="footer-area-title"></span>
        </h1>
        <div class="footer-contact-list">
          <div class="footer-contact-item">
            <span class="footer-icon"><i class="bi bi-geo-alt"></i></span>
            <div>
              <span class="footer-label">Address:</span>
              <span class="footer-value">Brgy. Rizal, Sagay City, Negros Occidental</span>
            </div>
          </div>
          <div class="footer-contact-item">
            <span class="footer-icon"><i class="bi bi-telephone"></i></span>
            <div>
              <span class="footer-label">Phone:</span>
              <span class="footer-value">09123456789</span>
            </div>
          </div>
          <div class="footer-contact-item">
            <span class="footer-icon"><i class="bi bi-at"></i></span>
            <div>
              <span class="footer-label">Email:</span>
              <span class="footer-value">test@test.com</span>
            </div>
          </div>
        </div>
      </div>
      <div class="footer-logo">
        <img src="<?php echo $url->base_url(); ?>public/assets/image/SUNN.png" alt="SUNN Logo">
      </div>
    </div>
    <hr class="footer-divider">
    <div class="footer-copyright">
      <strong>Copyright © 2025</strong>
    </div>
  </footer>
</body>
</html>