<?php
    require_once __DIR__ . '/../../config/config.php';
    $url = new url();
?>
<!-- FOR STYLES -->
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link href="<?php echo $url->base_url(); ?>public/assets/bootstrap/css/bootstrap.min.css" rel="stylesheet">
<link href="<?php echo $url->base_url(); ?>public/assets/font/bootstrap-icons.css" rel="stylesheet">
<link href="<?php echo $url->base_url(); ?>public/assets/fontawesome/css/all.min.css" rel="stylesheet">
<link href="<?php echo $url->base_url(); ?>public/assets/coreui/coreui.min.css" rel="stylesheet">
<link href="<?php echo $url->base_url(); ?>public/assets/css/admin.css" rel="stylesheet">
<!-- Bootstrap JS and Popper.js -->
    <script src="<?php echo $url->base_url(); ?>public/assets/js/bootstrap.bundle.min.js"></script>

<!-- Top Navigation Bar -->
<nav class="navbar navbar-expand-lg navbar-dark bg-primary fixed-top">
    <div class="container-fluid">
        <button class="navbar-toggler d-lg-none" type="button" data-bs-toggle="collapse" data-bs-target="#sidebarMenu">
            <span class="navbar-toggler-icon"></span>
        </button>
        <a class="navbar-brand ms-3" href="<?php echo $url->base_url(); ?>admin">
            <i class="bi bi-trophy-fill me-2"></i>SUNN Admin
        </a>
        <div class="navbar-nav ms-auto">
            <div class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown">
                    <i class="bi bi-person-circle me-1"></i>Admin
                </a>
                <ul class="dropdown-menu dropdown-menu-end">
                    <li><a class="dropdown-item" href="#"><i class="bi bi-person me-2"></i>Profile</a></li>
                    <li><a class="dropdown-item" href="#"><i class="bi bi-gear me-2"></i>Settings</a></li>
                    <li><hr class="dropdown-divider"></li>
                    <li><a class="dropdown-item" href="#"><i class="bi bi-box-arrow-right me-2"></i>Logout</a></li>
                </ul>
            </div>
        </div>
    </div>
</nav>

<!-- Sidebar -->
<nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block sidebar collapse">
    <div class="position-sticky pt-3">
        <ul class="nav flex-column">
            <li class="nav-item">
                <a class="nav-link active" href="<?php echo $url->base_url(); ?>admin" data-section="dashboard">
                    <i class="bi bi-speedometer2"></i>
                    <span>Dashboard</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#" data-section="users">
                    <i class="bi bi-people"></i>
                    <span>User Management</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="<?php echo $url->base_url(); ?>event" data-section="events">
                    <i class="bi bi-calendar-event"></i>
                    <span>Events</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="<?php echo $url->base_url(); ?>schedule" data-section="schedule">
                    <i class="bi bi-clock"></i>
                    <span>Schedule</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="<?php echo $url->base_url(); ?>result" data-section="results">
                    <i class="bi bi-trophy"></i>
                    <span>Results</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="<?php echo $url->base_url(); ?>report" data-section="reports">
                    <i class="bi bi-bar-chart"></i>
                    <span>Reports</span>
                </a>
            </li>
        </ul>
    </div>
</nav>
