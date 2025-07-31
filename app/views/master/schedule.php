<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>View Schedule - SUNN Intramurals</title>
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
                            <i class="bi bi-calendar-check me-2 text-primary"></i>View Schedule
                        </h1>
                        <p class="text-muted mb-0">Complete event schedule and match timings</p>
                    </div>
                    <div class="btn-toolbar mb-2 mb-md-0">
                        <button type="button" class="btn btn-outline-primary me-2">
                            <i class="bi bi-download me-1"></i>Export Schedule
                        </button>
                        <button type="button" class="btn btn-primary">
                            <i class="bi bi-plus-circle me-1"></i>Add Event
                        </button>
                    </div>
                </div>

                <!-- Filter Section -->
                <div class="card shadow-sm mb-4">
                    <div class="card-header bg-info text-white">
                        <h5 class="mb-0">
                            <i class="bi bi-funnel me-2"></i>Filter Schedule
                        </h5>
                    </div>
                    <div class="card-body">
                        <div class="row g-3">
                            <div class="col-md-3">
                                <label class="form-label">Sport</label>
                                <select class="form-select" id="sportFilter">
                                    <option value="">All Sports</option>
                                    <option value="basketball">Basketball</option>
                                    <option value="volleyball">Volleyball</option>
                                    <option value="badminton">Badminton</option>
                                    <option value="swimming">Swimming</option>
                                </select>
                            </div>
                            <div class="col-md-3">
                                <label class="form-label">Category</label>
                                <select class="form-select" id="categoryFilter">
                                    <option value="">All Categories</option>
                                    <option value="mens">Men's</option>
                                    <option value="womens">Women's</option>
                                    <option value="mixed">Mixed</option>
                                </select>
                            </div>
                            <div class="col-md-3">
                                <label class="form-label">Date Range</label>
                                <input type="date" class="form-control" id="dateFrom">
                            </div>
                            <div class="col-md-3">
                                <label class="form-label">&nbsp;</label>
                                <input type="date" class="form-control" id="dateTo">
                            </div>
                        </div>
                        <div class="mt-3">
                            <button class="btn btn-primary" onclick="filterSchedule()">
                                <i class="bi bi-search me-1"></i>Apply Filter
                            </button>
                            <button class="btn btn-outline-secondary ms-2" onclick="clearFilter()">
                                <i class="bi bi-x-circle me-1"></i>Clear
                            </button>
                        </div>
                    </div>
                </div>

                <!-- Schedule Overview Cards -->
                <div class="row mb-4">
                    <div class="col-md-3">
                        <div class="card bg-primary text-white">
                            <div class="card-body text-center">
                                <i class="bi bi-calendar-event display-4 mb-2"></i>
                                <h3 class="mb-0">24</h3>
                                <p class="mb-0">Total Events</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="card bg-success text-white">
                            <div class="card-body text-center">
                                <i class="bi bi-check-circle display-4 mb-2"></i>
                                <h3 class="mb-0">18</h3>
                                <p class="mb-0">Completed</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="card bg-warning text-white">
                            <div class="card-body text-center">
                                <i class="bi bi-clock display-4 mb-2"></i>
                                <h3 class="mb-0">4</h3>
                                <p class="mb-0">Upcoming</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="card bg-danger text-white">
                            <div class="card-body text-center">
                                <i class="bi bi-pause-circle display-4 mb-2"></i>
                                <h3 class="mb-0">2</h3>
                                <p class="mb-0">Postponed</p>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Schedule Table -->
                <div class="card shadow-sm">
                    <div class="card-header bg-white border-bottom">
                        <h5 class="mb-0">
                            <i class="bi bi-table me-2 text-primary"></i>Complete Schedule
                        </h5>
                    </div>
                    <div class="card-body p-0">
                        <div class="table-responsive">
                            <table class="table table-hover mb-0">
                                <thead class="table-light">
                                    <tr>
                                        <th>Date & Time</th>
                                        <th>Event</th>
                                        <th>Teams/Participants</th>
                                        <th>Venue</th>
                                        <th>Round</th>
                                        <th>Status</th>
                                        <th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>
                                            <div>
                                                <strong>March 15, 2024</strong><br>
                                                <small class="text-muted">2:00 PM - 4:00 PM</small>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="d-flex align-items-center">
                                                <i class="bi bi-trophy text-warning me-2"></i>
                                                <div>
                                                    <strong>Basketball Finals</strong><br>
                                                    <small class="text-muted">Men's Division</small>
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            <div>
                                                <strong>Team Alpha</strong><br>
                                                <small class="text-muted">vs Team Beta</small>
                                            </div>
                                        </td>
                                        <td>Main Court</td>
                                        <td><span class="badge bg-warning">Finals</span></td>
                                        <td><span class="badge bg-success">Scheduled</span></td>
                                        <td>
                                            <div class="btn-group" role="group">
                                                <button class="btn btn-sm btn-outline-primary" title="Edit">
                                                    <i class="bi bi-pencil"></i>
                                                </button>
                                                <button class="btn btn-sm btn-outline-info" title="View Details">
                                                    <i class="bi bi-eye"></i>
                                                </button>
                                                <button class="btn btn-sm btn-outline-danger" title="Cancel">
                                                    <i class="bi bi-x-circle"></i>
                                                </button>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div>
                                                <strong>March 16, 2024</strong><br>
                                                <small class="text-muted">10:00 AM - 12:00 PM</small>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="d-flex align-items-center">
                                                <i class="bi bi-trophy text-primary me-2"></i>
                                                <div>
                                                    <strong>Volleyball Semi-Finals</strong><br>
                                                    <small class="text-muted">Women's Division</small>
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            <div>
                                                <strong>Team Delta</strong><br>
                                                <small class="text-muted">vs Team Epsilon</small>
                                            </div>
                                        </td>
                                        <td>Volleyball Court A</td>
                                        <td><span class="badge bg-info">Semi-Finals</span></td>
                                        <td><span class="badge bg-warning">Pending</span></td>
                                        <td>
                                            <div class="btn-group" role="group">
                                                <button class="btn btn-sm btn-outline-primary" title="Edit">
                                                    <i class="bi bi-pencil"></i>
                                                </button>
                                                <button class="btn btn-sm btn-outline-info" title="View Details">
                                                    <i class="bi bi-eye"></i>
                                                </button>
                                                <button class="btn btn-sm btn-outline-danger" title="Cancel">
                                                    <i class="bi bi-x-circle"></i>
                                                </button>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div>
                                                <strong>March 17, 2024</strong><br>
                                                <small class="text-muted">3:00 PM - 5:00 PM</small>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="d-flex align-items-center">
                                                <i class="bi bi-trophy text-success me-2"></i>
                                                <div>
                                                    <strong>Badminton Finals</strong><br>
                                                    <small class="text-muted">Mixed Doubles</small>
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            <div>
                                                <strong>Pair A</strong><br>
                                                <small class="text-muted">vs Pair B</small>
                                            </div>
                                        </td>
                                        <td>Badminton Hall</td>
                                        <td><span class="badge bg-warning">Finals</span></td>
                                        <td><span class="badge bg-danger">Postponed</span></td>
                                        <td>
                                            <div class="btn-group" role="group">
                                                <button class="btn btn-sm btn-outline-primary" title="Edit">
                                                    <i class="bi bi-pencil"></i>
                                                </button>
                                                <button class="btn btn-sm btn-outline-info" title="View Details">
                                                    <i class="bi bi-eye"></i>
                                                </button>
                                                <button class="btn btn-sm btn-outline-success" title="Reschedule">
                                                    <i class="bi bi-calendar-plus"></i>
                                                </button>
                                            </div>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>

                <!-- Pagination -->
                <nav aria-label="Schedule pagination" class="mt-4">
                    <ul class="pagination justify-content-center">
                        <li class="page-item disabled">
                            <a class="page-link" href="#" tabindex="-1">Previous</a>
                        </li>
                        <li class="page-item active"><a class="page-link" href="#">1</a></li>
                        <li class="page-item"><a class="page-link" href="#">2</a></li>
                        <li class="page-item"><a class="page-link" href="#">3</a></li>
                        <li class="page-item">
                            <a class="page-link" href="#">Next</a>
                        </li>
                    </ul>
                </nav>
            </main>
        </div>
    </div>

    <script src="<?php echo $url->base_url(); ?>public/assets/js/coreui.bundle.min.js"></script>
    <script>
        function filterSchedule() {
            // Add filter logic here
            console.log('Filtering schedule...');
        }

        function clearFilter() {
            // Clear all filter inputs
            document.getElementById('sportFilter').value = '';
            document.getElementById('categoryFilter').value = '';
            document.getElementById('dateFrom').value = '';
            document.getElementById('dateTo').value = '';
        }
    </script>
</body>
</html>
