
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reports - SUNN Intramurals</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.0/font/bootstrap-icons.css">
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
                            <i class="bi bi-bar-chart me-2 text-primary"></i>Reports
                        </h1>
                        <p class="text-muted mb-0">Generate and download comprehensive reports</p>
                    </div>
                    <div class="btn-toolbar mb-2 mb-md-0">
                        <div class="btn-group me-2">
                            <button type="button" class="btn btn-success" onclick="downloadAllResults()">
                                <i class="bi bi-download me-1"></i>Download All Results
                            </button>
                            <button type="button" class="btn btn-warning" onclick="downloadMedalTally()">
                                <i class="bi bi-award me-1"></i>Download Medal Tally
                            </button>
                        </div>
                    </div>
                </div>

                <!-- Report Summary Cards -->
                <div class="row mb-4">
                    <div class="col-xl-3 col-md-6 mb-4">
                        <div class="card stat-card bg-gradient-primary text-white h-100">
                            <div class="card-body">
                                <div class="d-flex justify-content-between align-items-center">
                                    <div>
                                        <div class="fs-2 fw-bold">24</div>
                                        <div class="fs-6 opacity-75">Total Events</div>
                                        <small class="opacity-75">Completed: 18</small>
                                    </div>
                                    <div class="stat-icon">
                                        <i class="bi bi-calendar-event"></i>
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
                                        <div class="fs-2 fw-bold">12</div>
                                        <div class="fs-6 opacity-75">Participating Teams</div>
                                        <small class="opacity-75">Active: 12</small>
                                    </div>
                                    <div class="stat-icon">
                                        <i class="bi bi-people"></i>
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
                                        <div class="fs-2 fw-bold">156</div>
                                        <div class="fs-6 opacity-75">Total Athletes</div>
                                        <small class="opacity-75">Registered</small>
                                    </div>
                                    <div class="stat-icon">
                                        <i class="bi bi-person-badge"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-xl-3 col-md-6 mb-4">
                        <div class="card stat-card bg-gradient-info text-white h-100">
                            <div class="card-body">
                                <div class="d-flex justify-content-between align-items-center">
                                    <div>
                                        <div class="fs-2 fw-bold">54</div>
                                        <div class="fs-6 opacity-75">Total Medals</div>
                                        <small class="opacity-75">Awarded</small>
                                    </div>
                                    <div class="stat-icon">
                                        <i class="bi bi-award"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Medal Tally Section -->
                <div class="card shadow-sm mb-4">
                    <div class="card-header bg-warning text-dark d-flex justify-content-between align-items-center">
                        <h5 class="mb-0">
                            <i class="bi bi-trophy me-2"></i>Overall Medal Tally
                        </h5>
                        <button class="btn btn-dark btn-sm" onclick="downloadMedalTally()">
                            <i class="bi bi-download me-1"></i>Download
                        </button>
                    </div>
                    <div class="card-body p-0">
                        <div class="table-responsive">
                            <table class="table table-hover mb-0" id="medalTallyTable">
                                <thead class="table-light">
                                    <tr>
                                        <th>Rank</th>
                                        <th>Team</th>
                                        <th class="text-center">
                                            <i class="bi bi-award text-warning"></i> Gold
                                        </th>
                                        <th class="text-center">
                                            <i class="bi bi-award text-secondary"></i> Silver
                                        </th>
                                        <th class="text-center">
                                            <i class="bi bi-award text-warning"></i> Bronze
                                        </th>
                                        <th class="text-center">Total</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr class="table-warning">
                                        <td><strong>1</strong></td>
                                        <td>
                                            <div class="d-flex align-items-center">
                                                <i class="bi bi-trophy text-warning me-2"></i>
                                                <strong>Team Alpha</strong>
                                            </div>
                                        </td>
                                        <td class="text-center"><span class="badge bg-warning">8</span></td>
                                        <td class="text-center"><span class="badge bg-secondary">5</span></td>
                                        <td class="text-center"><span class="badge bg-warning">3</span></td>
                                        <td class="text-center"><strong>16</strong></td>
                                    </tr>
                                    <tr>
                                        <td><strong>2</strong></td>
                                        <td>
                                            <div class="d-flex align-items-center">
                                                <i class="bi bi-award text-secondary me-2"></i>
                                                <strong>Team Beta</strong>
                                            </div>
                                        </td>
                                        <td class="text-center"><span class="badge bg-warning">6</span></td>
                                        <td class="text-center"><span class="badge bg-secondary">7</span></td>
                                        <td class="text-center"><span class="badge bg-warning">4</span></td>
                                        <td class="text-center"><strong>17</strong></td>
                                    </tr>
                                    <tr>
                                        <td><strong>3</strong></td>
                                        <td>
                                            <div class="d-flex align-items-center">
                                                <i class="bi bi-award text-warning me-2"></i>
                                                <strong>Team Gamma</strong>
                                            </div>
                                        </td>
                                        <td class="text-center"><span class="badge bg-warning">4</span></td>
                                        <td class="text-center"><span class="badge bg-secondary">3</span></td>
                                        <td class="text-center"><span class="badge bg-warning">6</span></td>
                                        <td class="text-center"><strong>13</strong></td>
                                    </tr>
                                    <tr>
                                        <td>4</td>
                                        <td><strong>Team Delta</strong></td>
                                        <td class="text-center"><span class="badge bg-warning">2</span></td>
                                        <td class="text-center"><span class="badge bg-secondary">4</span></td>
                                        <td class="text-center"><span class="badge bg-warning">2</span></td>
                                        <td class="text-center"><strong>8</strong></td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>

                <!-- Detailed Results Section -->
                <div class="card shadow-sm mb-4">
                    <div class="card-header bg-primary text-white d-flex justify-content-between align-items-center">
                        <h5 class="mb-0">
                            <i class="bi bi-list-ul me-2"></i>Detailed Results Report
                        </h5>
                        <button class="btn btn-light btn-sm" onclick="downloadAllResults()">
                            <i class="bi bi-download me-1"></i>Download
                        </button>
                    </div>
                    <div class="card-body p-0">
                        <div class="table-responsive">
                            <table class="table table-hover mb-0" id="resultsTable">
                                <thead class="table-light">
                                    <tr>
                                        <th>Event</th>
                                        <th>Category</th>
                                        <th>Date</th>
                                        <th>Winner</th>
                                        <th>Runner-up</th>
                                        <th>Third Place</th>
                                        <th>Score/Time</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>
                                            <div class="d-flex align-items-center">
                                                <i class="bi bi-trophy text-warning me-2"></i>
                                                <strong>Basketball</strong>
                                            </div>
                                        </td>
                                        <td><span class="badge bg-primary">Men's Finals</span></td>
                                        <td>March 15, 2024</td>
                                        <td>
                                            <span class="badge bg-warning">
                                                <i class="bi bi-award me-1"></i>Team Alpha
                                            </span>
                                        </td>
                                        <td>
                                            <span class="badge bg-secondary">
                                                <i class="bi bi-award me-1"></i>Team Beta
                                            </span>
                                        </td>
                                        <td>
                                            <span class="badge bg-warning">
                                                <i class="bi bi-award me-1"></i>Team Gamma
                                            </span>
                                        </td>
                                        <td>85-78</td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="d-flex align-items-center">
                                                <i class="bi bi-volleyball text-info me-2"></i>
                                                <strong>Volleyball</strong>
                                            </div>
                                        </td>
                                        <td><span class="badge bg-success">Women's Finals</span></td>
                                        <td>March 18, 2024</td>
                                        <td>
                                            <span class="badge bg-warning">
                                                <i class="bi bi-award me-1"></i>Team Delta
                                            </span>
                                        </td>
                                        <td>
                                            <span class="badge bg-secondary">
                                                <i class="bi bi-award me-1"></i>Team Epsilon
                                            </span>
                                        </td>
                                        <td>
                                            <span class="badge bg-warning">
                                                <i class="bi bi-award me-1"></i>Team Zeta
                                            </span>
                                        </td>
                                        <td>3-1</td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="d-flex align-items-center">
                                                <i class="bi bi-award text-primary me-2"></i>
                                                <strong>Swimming 100m</strong>
                                            </div>
                                        </td>
                                        <td><span class="badge bg-info">Individual</span></td>
                                        <td>March 20, 2024</td>
                                        <td>
                                            <span class="badge bg-warning">
                                                <i class="bi bi-award me-1"></i>John Doe
                                            </span>
                                        </td>
                                        <td>
                                            <span class="badge bg-secondary">
                                                <i class="bi bi-award me-1"></i>Jane Smith
                                            </span>
                                        </td>
                                        <td>
                                            <span class="badge bg-warning">
                                                <i class="bi bi-award me-1"></i>Mike Johnson
                                            </span>
                                        </td>
                                        <td>1:02.45</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>

                <!-- Event Statistics -->
                <div class="row">
                    <div class="col-lg-6 mb-4">
                        <div class="card shadow-sm">
                            <div class="card-header bg-info text-white">
                                <h5 class="mb-0">
                                    <i class="bi bi-pie-chart me-2"></i>Events by Sport
                                </h5>
                            </div>
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-6">
                                        <div class="text-center mb-3">
                                            <h4 class="text-primary">8</h4>
                                            <small class="text-muted">Basketball</small>
                                        </div>
                                    </div>
                                    <div class="col-6">
                                        <div class="text-center mb-3">
                                            <h4 class="text-success">6</h4>
                                            <small class="text-muted">Volleyball</small>
                                        </div>
                                    </div>
                                    <div class="col-6">
                                        <div class="text-center mb-3">
                                            <h4 class="text-warning">4</h4>
                                            <small class="text-muted">Swimming</small>
                                        </div>
                                    </div>
                                    <div class="col-6">
                                        <div class="text-center mb-3">
                                            <h4 class="text-info">6</h4>
                                            <small class="text-muted">Track & Field</small>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-6 mb-4">
                        <div class="card shadow-sm">
                            <div class="card-header bg-success text-white">
                                <h5 class="mb-0">
                                    <i class="bi bi-graph-up me-2"></i>Participation Stats
                                </h5>
                            </div>
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-6">
                                        <div class="text-center mb-3">
                                            <h4 class="text-primary">89</h4>
                                            <small class="text-muted">Male Athletes</small>
                                        </div>
                                    </div>
                                    <div class="col-6">
                                        <div class="text-center mb-3">
                                            <h4 class="text-danger">67</h4>
                                            <small class="text-muted">Female Athletes</small>
                                        </div>
                                    </div>
                                    <div class="col-6">
                                        <div class="text-center mb-3">
                                            <h4 class="text-success">12</h4>
                                            <small class="text-muted">Teams</small>
                                        </div>
                                    </div>
                                    <div class="col-6">
                                        <div class="text-center mb-3">
                                            <h4 class="text-warning">24</h4>
                                            <small class="text-muted">Events</small>
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

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        function downloadAllResults() {
            // Convert table to CSV
            const table = document.getElementById('resultsTable');
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
            a.download = 'intramural_results_' + new Date().toISOString().split('T')[0] + '.csv';
            document.body.appendChild(a);
            a.click();
            document.body.removeChild(a);
            window.URL.revokeObjectURL(url);
        }

        function downloadMedalTally() {
            // Convert medal tally table to CSV
            const table = document.getElementById('medalTallyTable');
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
            a.download = 'medal_tally_' + new Date().toISOString().split('T')[0] + '.csv';
            document.body.appendChild(a);
            a.click();
            document.body.removeChild(a);
            window.URL.revokeObjectURL(url);
        }
    </script>
</body>
</html>

