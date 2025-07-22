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
  <div class="container col-xxl-8 px-4 py-5">
    <div class="row flex-lg-row-reverse align-items-center g-5 py-5">
      <div class="col-10 col-sm-8 col-lg-6">
        <img src="./public/assets/image/SUNN.png" class="d-block mx-lg-auto img-fluid" alt="Bootstrap Themes" width="700" height="500" loading="lazy">
      </div>
      <div class="col-lg-6">
        <h1 class="display-5 fw-bold lh-1 mb-3">Intramurals 2025</h1>
        <p class="lead">State University Of Northern Negros blah blah text nadi</p>
      </div>
    </div>
  </div>

<!-- Introduction Section -->
<div class="container mt-5 info-section enhanced-section">
  <div class="row align-items-center">
    <div class="col-md-1 text-center d-none d-md-block">
      <span class="section-icon" title="Introduction">📢</span>
    </div>
    <div class="col-md-11">
      <h2>Introduction</h2>
      <p>
        Welcome to the Intramural Management System! This platform is designed to streamline the organization, management, and participation in intramural sports events at the State University of Northern Negros.
      </p>
    </div>
  </div>
</div>
<hr class="section-divider">
<!-- About Section -->
<div class="container mt-4 info-section enhanced-section">
  <div class="row align-items-center">
    <div class="col-md-1 text-center d-none d-md-block">
      <span class="section-icon" title="About">ℹ️</span>
    </div>
    <div class="col-md-11">
      <h2>About</h2>
      <p>
        The Intramural Management System allows students, faculty, and staff to register for events, view schedules, track results, and stay updated on the latest happenings in campus sports. Our goal is to foster a spirit of sportsmanship and community engagement through efficient digital management.
      </p>
    </div>
  </div>
</div>
<hr class="section-divider">
<!-- Contact Section -->
<div class="container mt-4 info-section enhanced-section">
  <div class="row align-items-center">
    <div class="col-md-1 text-center d-none d-md-block">
      <span class="section-icon" title="Contact">📞</span>
    </div>
    <div class="col-md-11">
      <h2>Contact</h2>
      <p>
        For inquiries or support, please contact us at <a href="mailto:info@sunn.edu.ph">info@sunn.edu.ph</a> or visit the university's main office at Brgy. Rizal, Sagay City, Negros Occidental.
      </p>
    </div>
  </div>
</div>
<hr class="section-divider">
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
      <div class="col-md-12 mt-5">
        <div class="card">
          <div class="card-body">
            <div class="row">
              <div class="col-md-12">
                <h1>Location</h1>
                <div class="map-container">
                  <iframe width="1260" height="450" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"
  src="https://www.openstreetmap.org/export/embed.html?bbox=123.413593%2C10.875677%2C123.417593%2C10.879677&amp;layer=mapnik&amp;marker=10.877677%2C123.415593"
  style="border: 0"></iframe>
                  <div class="map-overlay">
                    <div class="map-overlay-content">
                      <h2>State University of Northern Negros</h2>
                      <p>Brgy. Rizal, Sagay City, Negros Occidental</p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
<footer class="footer mt-auto py-3 bg-light">
  <div class="container">
    <h1>Contact Info</h1>
    <i class="fa-solid fa-face-smile"></i>
  </div>
</footer>
</body>
</html>