<?php
    require_once __DIR__ . '/../../config/config.php';
    $url = new url();
?>

<!-- FOR STYLES -->
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?php echo $url->base_url(); ?>public/assets/fontawesome/css/all.min.css">
    <link rel="stylesheet" href="<?php echo $url->base_url(); ?>public/assets/css/style.css">
    <link rel="stylesheet" href="<?php echo $url->base_url(); ?>public/assets/css/bootstrap.min.css">
    <!-- Bootstrap JS and Popper.js -->
    <script src="<?php echo $url->base_url(); ?>public/assets/js/bootstrap.bundle.min.js"></script>

<!-- FOR NAVBAR -->
<nav class="navbar navbar-expand-lg navbar-light">
<div class="container-fluid bg-light">
  <a class="navbar-brand" href="<?php echo $url->base_url()?>home">Intramural Management System</a>
  <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mx-auto mb-2 mb-lg-0">
      <li class="nav-item">
        <a class="nav-link" aria-current="page" href="<?php echo $url->base_url()?>home">Home</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="<?php echo $url->base_url()?>error">Matches</a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link" href="<?php echo $url->base_url()?>error">Teams</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="<?php echo $url->base_url()?>error">Schedule</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="<?php echo $url->base_url()?>error">Standings</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="<?php echo $url->base_url()?>error">Stats</a>
      </li>
    </ul>
    <a href="<?php echo $url->base_url()?>login" class="btn btn-outline-success ms-2">Login</a>
  </div>
</div>
</nav>
