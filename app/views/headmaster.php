<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Headmaster Dashboard - SUNN Intramurals</title>
    <link href="https://cdn.jsdelivr.net/npm/@coreui/coreui@5.0.0/dist/css/coreui.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.0/font/bootstrap-icons.css">
</head>
<body class="c-app">
    <!-- Sidebar -->
    <div class="c-sidebar c-sidebar-dark c-sidebar-fixed c-sidebar-lg-show" id="sidebar">
        <div class="c-sidebar-brand d-lg-down-none">
            <i class="bi bi-person-badge me-2"></i>
            <span>Headmaster Panel</span>
        </div>
        <ul class="c-sidebar-nav">
            <li class="c-sidebar-nav-item">
                <a class="c-sidebar-nav-link c-active" href="#" onclick="showSection('dashboard')">
                    <i class="bi bi-speedometer2 c-sidebar-nav-icon"></i>
                    Dashboard
                </a>
            </li>
            <li class="c-sidebar-nav-item">
                <a class="c-sidebar-nav-link" href="#" onclick="showSection('input-scores')">
                    <i class="bi bi-pencil-square c-sidebar-nav-icon"></i>
                    Input Scores
                </a>
            </li>
            <li class="c-sidebar-nav-item">
                <a class="c-sidebar-nav-link" href="#" onclick="showSection('schedule')">
                    <i class="bi bi-calendar-event c-sidebar-nav-icon"></i>
                    View Schedule
                </a>
            </li>
            <li class="c-sidebar-nav-item">
                <a class="c-sidebar-nav-link" href="#" onclick="showSection('reports')">
                    <i class="bi bi-file-earmark-text c-sidebar-nav-icon"></i>
                    Generate Reports
                </a>
            </li>
            <li class="c-sidebar-nav-item">
                <a class="c-sidebar-nav-link" href="#" onclick="showSection('ongoing-games')">
                    <i class="bi bi-play-circle c-sidebar-nav-icon"></i>
                    Ongoing Games
                </a>
            </li>
            <li class="c-sidebar-nav-divider"></li>
            <li class="c-sidebar-nav-item">
                <a class="c-sidebar-nav-link" href="#">
                    <i class="bi bi-box-arrow-right c-sidebar-nav-icon"></i>
                    Logout
                </a>
            </li>
        </ul>
    </div>

    <!-- Main Content -->
    <div class="c-wrapper c-fixed-components">
        <div class="c-body">
            <main class="c-main">
                <div class="container-fluid">
                    <!-- Dashboard Section -->
                    <div id="dashboard" class="content-section">
                        <div class="fade-in">
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="card">
                                        <div class="card-body p-4">
                                            <div class="d-flex justify-content-between align-items-center mb-4">
                                                <div>
                                                    <h1 class="h2 mb-0">
                                                        <i class="bi bi-speedometer2 me-2 text-primary"></i>Headmaster Dashboard
                                                    </h1>
                                                    <p class="text-muted mb-0">Basketball Division - Welcome back!</p>
                                                </div>
                                                <div class="text-end">
                                                    <small class="text-muted">Last updated: <?php echo date('M d, Y H:i'); ?></small>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Stats Cards -->
                            <div class="row">
                                <div class="col-sm-6 col-lg-3">
                                    <div class="card text-white bg-primary">
                                        <div class="card-body pb-0 d-flex justify-content-between align-items-start">
                                            <div>
                                                <div class="fs-4 fw-semibold">8</div>
                                                <div>Basketball Games</div>
                                                <div class="progress progress-white progress-xs my-2">
                                                    <div class="progress-bar" role="progressbar" style="width: 75%"></div>
                                                </div>
                                                <small class="opacity-80">This week</small>
                                            </div>
                                            <div class="dropdown">
                                                <i class="bi bi-trophy fs-1"></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-6 col-lg-3">
                                    <div class="card text-white bg-success">
                                        <div class="card-body pb-0 d-flex justify-content-between align-items-start">
                                            <div>
                                                <div class="fs-4 fw-semibold">5</div>
                                                <div>Completed</div>
                                                <div class="progress progress-white progress-xs my-2">
                                                    <div class="progress-bar" role="progressbar" style="width: 62%"></div>
                                                </div>
                                                <small class="opacity-80">Games finished</small>
                                            </div>
                                            <div class="dropdown">
                                                <i class="bi bi-check-circle fs-1"></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-6 col-lg-3">
                                    <div class="card text-white bg-warning">
                                        <div class="card-body pb-0 d-flex justify-content-between align-items-start">
                                            <div>
                                                <div class="fs-4 fw-semibold">2</div>
                                                <div>Ongoing</div>
                                                <div class="progress progress-white progress-xs my-2">
                                                    <div class="progress-bar" role="progressbar" style="width: 25%"></div>
                                                </div>
                                                <small class="opacity-80">Live games</small>
                                            </div>
                                            <div class="dropdown">
                                                <i class="bi bi-play-circle fs-1"></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-6 col-lg-3">
                                    <div class="card text-white bg-info">
                                        <div class="card-body pb-0 d-flex justify-content-between align-items-start">
                                            <div>
                                                <div class="fs-4 fw-semibold">1</div>
                                                <div>Upcoming</div>
                                                <div class="progress progress-white progress-xs my-2">
                                                    <div class="progress-bar" role="progressbar" style="width: 12%"></div>
                                                </div>
                                                <small class="opacity-80">Next game</small>
                                            </div>
                                            <div class="dropdown">
                                                <i class="bi bi-clock fs-1"></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Recent Activities and Schedule -->
                            <div class="row">
                                <div class="col-lg-8">
                                    <div class="card">
                                        <div class="card-header">
                                            <i class="bi bi-activity me-2"></i>Recent Activities
                                        </div>
                                        <div class="card-body">
                                            <div class="list-group list-group-flush">
                                                <div class="list-group-item border-0 py-3">
                                                    <div class="d-flex align-items-center">
                                                        <div class="bg-success rounded-circle p-2 me-3">
                                                            <i class="bi bi-check text-white"></i>
                                                        </div>
                                                        <div>
                                                            <h6 class="mb-1">Game Result Submitted</h6>
                                                            <p class="mb-1 text-muted">Team Alpha vs Team Beta - 85:78</p>
                                                            <small class="text-muted">2 hours ago</small>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="list-group-item border-0 py-3">
                                                    <div class="d-flex align-items-center">
                                                        <div class="bg-warning rounded-circle p-2 me-3">
                                                            <i class="bi bi-clock text-white"></i>
                                                        </div>
                                                        <div>
                                                            <h6 class="mb-1">Game Starting Soon</h6>
                                                            <p class="mb-1 text-muted">Team Gamma vs Team Delta in 30 minutes</p>
                                                            <small class="text-muted">30 minutes</small>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="card">
                                        <div class="card-header">
                                            <i class="bi bi-calendar me-2"></i>Today's Schedule
                                        </div>
                                        <div class="card-body">
                                            <div class="mb-3">
                                                <strong>2:00 PM</strong>
                                                <p class="mb-1">Team Alpha vs Team Beta</p>
                                                <span class="badge bg-success">Completed</span>
                                            </div>
                                            <div class="mb-3">
                                                <strong>4:00 PM</strong>
                                                <p class="mb-1">Team Gamma vs Team Delta</p>
                                                <span class="badge bg-warning">Starting Soon</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Input Scores Section -->
                    <div id="input-scores" class="content-section" style="display: none;">
                        <div class="fade-in">
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="card">
                                        <div class="card-header">
                                            <i class="bi bi-pencil-square me-2"></i>Input Basketball Scores
                                        </div>
                                        <div class="card-body">
                                            <form>
                                                <div class="row mb-3">
                                                    <div class="col-md-6">
                                                        <label class="form-label">Select Game</label>
                                                        <select class="form-select">
                                                            <option>Team Alpha vs Team Beta - March 15, 2024</option>
                                                            <option>Team Gamma vs Team Delta - March 15, 2024</option>
                                                        </select>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <label class="form-label">Game Status</label>
                                                        <select class="form-select">
                                                            <option>Completed</option>
                                                            <option>Ongoing</option>
                                                            <option>Postponed</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="row mb-3">
                                                    <div class="col-md-6">
                                                        <label class="form-label">Team A Score</label>
                                                        <input type="number" class="form-control" placeholder="Enter score">
                                                    </div>
                                                    <div class="col-md-6">
                                                        <label class="form-label">Team B Score</label>
                                                        <input type="number" class="form-control" placeholder="Enter score">
                                                    </div>
                                                </div>
                                                <div class="mb-3">
                                                    <label class="form-label">Game Notes</label>
                                                    <textarea class="form-control" rows="3" placeholder="Additional notes about the game..."></textarea>
                                                </div>
                                                <button type="submit" class="btn btn-primary">
                                                    <i class="bi bi-save me-1"></i>Submit Score
                                                </button>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Schedule Section -->
                    <div id="schedule" class="content-section" style="display: none;">
                        <div class="fade-in">
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="card">
                                        <div class="card-header">
                                            <i class="bi bi-calendar-event me-2"></i>Basketball Schedule
                                        </div>
                                        <div class="card-body p-0">
                                            <div class="table-responsive">
                                                <table class="table table-hover mb-0">
                                                    <thead>
                                                        <tr>
                                                            <th>Date</th>
                                                            <th>Time</th>
                                                            <th>Teams</th>
                                                            <th>Venue</th>
                                                            <th>Status</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr>
                                                            <td>March 15, 2024</td>
                                                            <td>2:00 PM</td>
                                                            <td>Team Alpha vs Team Beta</td>
                                                            <td>Main Court</td>
                                                            <td><span class="badge bg-success">Completed</span></td>
                                                        </tr>
                                                        <tr>
                                                            <td>March 15, 2024</td>
                                                            <td>4:00 PM</td>
                                                            <td>Team Gamma vs Team Delta</td>
                                                            <td>Main Court</td>
                                                            <td><span class="badge bg-warning">Ongoing</span></td>
                                                        </tr>
                                                        <tr>
                                                            <td>March 16, 2024</td>
                                                            <td>10:00 AM</td>
                                                            <td>Team Epsilon vs Team Zeta</td>
                                                            <td>Main Court</td>
                                                            <td><span class="badge bg-info">Upcoming</span></td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Reports Section -->
                    <div id="reports" class="content-section" style="display: none;">
                        <div class="fade-in">
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="card">
                                        <div class="card-header d-flex justify-content-between align-items-center">
                                            <span><i class="bi bi-file-earmark-text me-2"></i>Basketball Reports</span>
                                            <button class="btn btn-success btn-sm" onclick="downloadBasketballReport()">
                                                <i class="bi bi-download me-1"></i>Download Report
                                            </button>
                                        </div>
                                        <div class="card-body p-0">
                                            <div class="table-responsive">
                                                <table class="table table-hover mb-0" id="basketballReport">
                                                    <thead>
                                                        <tr>
                                                            <th>Date</th>
                                                            <th>Teams</th>
                                                            <th>Score</th>
                                                            <th>Winner</th>
                                                            <th>Status</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr>
                                                            <td>March 15, 2024</td>
                                                            <td>Team Alpha vs Team Beta</td>
                                                            <td>85 - 78</td>
                                                            <td>Team Alpha</td>
                                                            <td><span class="badge bg-success">Completed</span></td>
                                                        </tr>
                                                        <tr>
                                                            <td>March 14, 2024</td>
                                                            <td>Team Gamma vs Team Delta</td>
                                                            <td>92 - 88</td>
                                                            <td>Team Gamma</td>
                                                            <td><span class="badge bg-success">Completed</span></td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Ongoing Games Section -->
                    <div id="ongoing-games" class="content-section" style="display: none;">
                        <div class="fade-in">
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="card border-danger">
                                        <div class="card-header bg-danger text-white">
                                            <i class="bi bi-broadcast me-2"></i>LIVE - Main Court
                                        </div>
                                        <div class="card-body text-center">
                                            <div class="row">
                                                <div class="col-5">
                                                    <h4>Team Gamma</h4>
                                                    <h1 class="display-3 text-primary">45</h1>
                                                </div>
                                                <div class="col-2 d-flex align-items-center justify-content-center">
                                                    <h3>VS</h3>
                                                </div>
                                                <div class="col-5">
                                                    <h4>Team Delta</h4>
                                                    <h1 class="display-3 text-danger">42</h1>
                                                </div>
                                            </div>
                                            <hr>
                                            <div class="row">
                                                <div class="col-6">
                                                    <strong>Quarter:</strong> 3rd
                                                </div>
                                                <div class="col-6">
                                                    <strong>Time:</strong> 08:45
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="card border-warning">
                                        <div class="card-header bg-warning text-dark">
                                            <i class="bi bi-clock me-2"></i>Starting Soon
                                        </div>
                                        <div class="card-body text-center">
                                            <h5>Team Epsilon vs Team Zeta</h5>
                                            <p class="text-muted">Scheduled: 6:00 PM</p>
                                            <p class="text-muted">Venue: Main Court</p>
                                            <div class="countdown">
                                                <h3 class="text-warning">Starting in 15 minutes</h3>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </main>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/@coreui/coreui@5.0.0/dist/js/coreui.bundle.min.js"></script>
    <script>
        function showSection(sectionId) {
            // Hide all sections
            const sections = document.querySelectorAll('.content-section');
            sections.forEach(section => {
                section.style.display = 'none';
            });
            
            // Show selected section
            document.getElementById(sectionId).style.display = 'block';
            
            // Update active nav link
            const navLinks = document.querySelectorAll('.c-sidebar-nav-link');
            navLinks.forEach(link => {
                link.classList.remove('c-active');
            });
            event.target.classList.add('c-active');
        }

        function downloadBasketballReport() {
            const table = document.getElementById('basketballReport');
            let csv = [];
            
            // Get headers
            const headers = [];
            table.querySelectorAll('thead th').forEach(th => {
                headers.push(th.textContent.trim());
            });
            csv.push(headers.join(','));
            
            // Get data rows
            table.querySelectorAll('tbody tr').forEach(tr => {
                const row = [];
                tr.querySelectorAll('td').forEach(td => {
                    row.push('"' + td.textContent.trim().replace(/"/g, '""') + '"');
                });
                csv.push(row.join(','));
            });
            
            // Download CSV
            const csvContent = csv.join('\n');
            const blob = new Blob([csvContent], { type: 'text/csv' });
            const url = window.URL.createObjectURL(blob);
            const a = document.createElement('a');
            a.href = url;
            a.download = 'basketball_report_' + new Date().toISOString().split('T')[0] + '.csv';
            document.body.appendChild(a);
            a.click();
            document.body.removeChild(a);
            window.URL.revokeObjectURL(url);
        }
    </script>
</body>
</html>
