<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard - SUNN Intramurals</title>
</head>
<body class="c-app">
    <?php include 'master/navbar.php'; ?>
    
    <!-- Main content -->
    <div class="container-fluid">
        <div class="row">
            <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4 main-content">
                <!-- Dashboard Header -->
                <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-4">
                    <div>
                        <h1 class="h2 mb-0">
                            <i class="bi bi-speedometer2 me-2 text-primary"></i>Dashboard
                        </h1>
                        <p class="text-muted mb-0">Welcome back! Here's what's happening today.</p>
                    </div>
                    <div class="btn-toolbar mb-2 mb-md-0">
                        <button type="button" class="btn btn-outline-primary">
                            <i class="bi bi-download me-1"></i>Export
                        </button>
                    </div>
                </div>

                <!-- Dashboard Cards -->
                <div class="row mb-4">
                    <div class="col-xl-3 col-md-6 mb-4">
                        <div class="card stat-card bg-gradient-primary text-white h-100">
                            <div class="card-body">
                                <div class="d-flex justify-content-between align-items-center">
                                    <div>
                                        <div class="fs-2 fw-bold">150</div>
                                        <div class="fs-6 opacity-75">Total Users</div>
                                        <small class="opacity-75">
                                            <i class="bi bi-arrow-up me-1"></i>12% from last month
                                        </small>
                                    </div>
                                    <div class="stat-icon">
                                        <i class="bi bi-people"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <div class="col-xl-3 col-md-6 mb-4">
                        <div class="card stat-card bg-gradient-success text-white h-100">
                            <div class="card-body">
                                <div class="d-flex justify-content-between align-items-center">
                                    <div>
                                        <div class="fs-2 fw-bold">25</div>
                                        <div class="fs-6 opacity-75">Active Events</div>
                                        <small class="opacity-75">
                                            <i class="bi bi-arrow-up me-1"></i>8% from last week
                                        </small>
                                    </div>
                                    <div class="stat-icon">
                                        <i class="bi bi-calendar-event"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <div class="col-xl-3 col-md-6 mb-4">
                        <div class="card stat-card bg-gradient-warning text-white h-100">
                            <div class="card-body">
                                <div class="d-flex justify-content-between align-items-center">
                                    <div>
                                        <div class="fs-2 fw-bold">12</div>
                                        <div class="fs-6 opacity-75">Teams</div>
                                        <small class="opacity-75">
                                            <i class="bi bi-dash me-1"></i>No change
                                        </small>
                                    </div>
                                    <div class="stat-icon">
                                        <i class="bi bi-shield-check"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <div class="col-xl-3 col-md-6 mb-4">
                        <div class="card stat-card bg-gradient-danger text-white h-100">
                            <div class="card-body">
                                <div class="d-flex justify-content-between align-items-center">
                                    <div>
                                        <div class="fs-2 fw-bold">8</div>
                                        <div class="fs-6 opacity-75">Matches Today</div>
                                        <small class="opacity-75">
                                            <i class="bi bi-arrow-up me-1"></i>3 more than yesterday
                                        </small>
                                    </div>
                                    <div class="stat-icon">
                                        <i class="bi bi-trophy"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Content Sections -->
                <div id="dashboard" class="content-section active">
                    <div class="row">
                        <div class="col-lg-8 mb-4">
                            <div class="card shadow-sm">
                                <div class="card-header bg-white border-bottom">
                                    <h5 class="mb-0">
                                        <i class="bi bi-activity me-2 text-primary"></i>Recent Activities
                                    </h5>
                                </div>
                                <div class="card-body p-0">
                                    <div class="list-group list-group-flush">
                                        <div class="list-group-item border-0 py-3">
                                            <div class="d-flex align-items-center">
                                                <div class="activity-icon bg-primary">
                                                    <i class="bi bi-trophy text-white"></i>
                                                </div>
                                                <div class="flex-grow-1 ms-3">
                                                    <h6 class="mb-1">Basketball Finals</h6>
                                                    <p class="mb-1 text-muted">Team A vs Team B scheduled for tomorrow</p>
                                                    <small class="text-muted">
                                                        <i class="bi bi-clock me-1"></i>2 hours ago
                                                    </small>
                                                </div>
                                                <span class="badge bg-primary rounded-pill">New</span>
                                            </div>
                                        </div>
                                        <div class="list-group-item border-0 py-3">
                                            <div class="d-flex align-items-center">
                                                <div class="activity-icon bg-success">
                                                    <i class="bi bi-person-plus text-white"></i>
                                                </div>
                                                <div class="flex-grow-1 ms-3">
                                                    <h6 class="mb-1">User Registration</h6>
                                                    <p class="mb-1 text-muted">5 new users registered today</p>
                                                    <small class="text-muted">
                                                        <i class="bi bi-clock me-1"></i>4 hours ago
                                                    </small>
                                                </div>
                                                <span class="badge bg-success rounded-pill">Info</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                        <div class="col-lg-4 mb-4">
                            <div class="card shadow-sm">
                                <div class="card-header bg-white border-bottom">
                                    <h5 class="mb-0">
                                        <i class="bi bi-lightning me-2 text-warning"></i>Quick Actions
                                    </h5>
                                </div>
                                <div class="card-body">
                                    <div class="d-grid gap-3">
                                        <button class="btn btn-primary btn-lg" type="button">
                                            <i class="bi bi-plus-circle me-2"></i>Add New Event
                                        </button>
                                        <button class="btn btn-success btn-lg" type="button">
                                            <i class="bi bi-people me-2"></i>Create Team
                                        </button>
                                        <button class="btn btn-warning btn-lg" type="button">
                                            <i class="bi bi-calendar-plus me-2"></i>Schedule Match
                                        </button>
                                        <button class="btn btn-info btn-lg" type="button">
                                            <i class="bi bi-file-earmark-text me-2"></i>Generate Report
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </main>
        </div>
    </div>
</body>
</html>
