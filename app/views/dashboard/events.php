<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Events Schedule - SUNN Intramurals</title>
</head>
<body class="c-app">
    <?php include 'navbar.php'; ?>
    
    <div class="container-fluid">
        <div class="row">
            <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4 main-content">
                <!-- Header -->
                <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-4">
                    <div>
                        <h1 class="h2 mb-0">
                            <i class="bi bi-calendar-event me-2 text-primary"></i>Events Schedule
                        </h1>
                        <p class="text-muted mb-0">Manage and view all scheduled events</p>
                    </div>
                    <div class="btn-toolbar mb-2 mb-md-0">
                        <button type="button" class="btn btn-primary me-2">
                            <i class="bi bi-plus-circle me-1"></i>Add Event
                        </button>
                        <button type="button" class="btn btn-outline-secondary">
                            <i class="bi bi-download me-1"></i>Export
                        </button>
                    </div>
                </div>

                <!-- Events Cards -->
                <div class="row">
                    <div class="col-lg-4 mb-4">
                        <div class="card shadow-sm">
                            <div class="card-header bg-primary text-white">
                                <h5 class="mb-0">
                                    <i class="bi bi-trophy me-2"></i>Basketball Finals
                                </h5>
                            </div>
                            <div class="card-body">
                                <p class="card-text">Championship match between Team A and Team B</p>
                                <div class="mb-2">
                                    <small class="text-muted">
                                        <i class="bi bi-calendar me-1"></i>March 15, 2024
                                    </small>
                                </div>
                                <div class="mb-2">
                                    <small class="text-muted">
                                        <i class="bi bi-clock me-1"></i>2:00 PM - 4:00 PM
                                    </small>
                                </div>
                                <div class="mb-3">
                                    <small class="text-muted">
                                        <i class="bi bi-geo-alt me-1"></i>Main Court
                                    </small>
                                </div>
                                <span class="badge bg-success">Scheduled</span>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 mb-4">
                        <div class="card shadow-sm">
                            <div class="card-header bg-warning text-dark">
                                <h5 class="mb-0">
                                    <i class="bi bi-dribbble me-2"></i>Volleyball Semi-Finals
                                </h5>
                            </div>
                            <div class="card-body">
                                <p class="card-text">Semi-final match for volleyball tournament</p>
                                <div class="mb-2">
                                    <small class="text-muted">
                                        <i class="bi bi-calendar me-1"></i>March 18, 2024
                                    </small>
                                </div>
                                <div class="mb-2">
                                    <small class="text-muted">
                                        <i class="bi bi-clock me-1"></i>10:00 AM - 12:00 PM
                                    </small>
                                </div>
                                <div class="mb-3">
                                    <small class="text-muted">
                                        <i class="bi bi-geo-alt me-1"></i>Volleyball Court
                                    </small>
                                </div>
                                <span class="badge bg-warning">Upcoming</span>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 mb-4">
                        <div class="card shadow-sm">
                            <div class="card-header bg-success text-white">
                                <h5 class="mb-0">
                                    <i class="bi bi-award me-2"></i>Swimming Competition
                                </h5>
                            </div>
                            <div class="card-body">
                                <p class="card-text">Annual swimming championship event</p>
                                <div class="mb-2">
                                    <small class="text-muted">
                                        <i class="bi bi-calendar me-1"></i>March 20, 2024
                                    </small>
                                </div>
                                <div class="mb-2">
                                    <small class="text-muted">
                                        <i class="bi bi-clock me-1"></i>8:00 AM - 5:00 PM
                                    </small>
                                </div>
                                <div class="mb-3">
                                    <small class="text-muted">
                                        <i class="bi bi-geo-alt me-1"></i>Swimming Pool
                                    </small>
                                </div>
                                <span class="badge bg-info">All Day</span>
                            </div>
                        </div>
                    </div>
                </div>

                
            </main>
        </div>
    </div>

    <script src="<?php echo $url->base_url(); ?>public/assets/js/coreui.bundle.min.js"></script>
</body>
</html>
