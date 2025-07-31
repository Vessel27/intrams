<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Results - SUNN Intramurals</title>
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
                            <i class="bi bi-trophy me-2 text-primary"></i>Results
                        </h1>
                        <p class="text-muted mb-0">View competition results and standings</p>
                    </div>
                    <div class="btn-toolbar mb-2 mb-md-0">
                        <button type="button" class="btn btn-outline-primary">
                            <i class="bi bi-download me-1"></i>Export Results
                        </button>
                    </div>
                </div>

                <!-- Filter Section -->
                <div class="card shadow-sm mb-4">
                    <div class="card-body">
                        <div class="row g-3">
                            <div class="col-md-3">
                                <select class="form-select">
                                    <option selected>All Sports</option>
                                    <option value="basketball">Basketball</option>
                                    <option value="volleyball">Volleyball</option>
                                    <option value="swimming">Swimming</option>
                                </select>
                            </div>
                            <div class="col-md-3">
                                <select class="form-select">
                                    <option selected>All Categories</option>
                                    <option value="finals">Finals</option>
                                    <option value="semifinals">Semi-Finals</option>
                                    <option value="quarterfinals">Quarter-Finals</option>
                                </select>
                            </div>
                            <div class="col-md-3">
                                <input type="date" class="form-control">
                            </div>
                            <div class="col-md-3">
                                <button class="btn btn-primary w-100">
                                    <i class="bi bi-search me-1"></i>Filter
                                </button>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Recent Results -->
                <div class="row mb-4">
                    <div class="col-lg-6 mb-4">
                        <div class="card shadow-sm">
                            <div class="card-header bg-primary text-white">
                                <h5 class="mb-0">
                                    <i class="bi bi-trophy me-2"></i>Basketball Finals
                                </h5>
                                <small>March 15, 2024 - Main Court</small>
                            </div>
                            <div class="card-body">
                                <div class="row text-center">
                                    <div class="col-5">
                                        <h4 class="text-primary">Team Alpha</h4>
                                        <h2 class="display-4 text-success fw-bold">85</h2>
                                        <span class="badge bg-success">WINNER</span>
                                    </div>
                                    <div class="col-2 d-flex align-items-center justify-content-center">
                                        <h3 class="text-muted">VS</h3>
                                    </div>
                                    <div class="col-5">
                                        <h4 class="text-secondary">Team Beta</h4>
                                        <h2 class="display-4 text-danger fw-bold">78</h2>
                                        <span class="badge bg-secondary">RUNNER-UP</span>
                                    </div>
                                </div>
                                <hr>
                                <div class="text-center">
                                    <small class="text-muted">Final Score</small>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-6 mb-4">
                        <div class="card shadow-sm">
                            <div class="card-header bg-warning text-dark">
                                <h5 class="mb-0">
                                    <i class="bi bi-volleyball me-2"></i>Volleyball Semi-Finals
                                </h5>
                                <small>March 18, 2024 - Volleyball Court</small>
                            </div>
                            <div class="card-body">
                                <div class="row text-center">
                                    <div class="col-5">
                                        <h4 class="text-primary">Team Gamma</h4>
                                        <h2 class="display-4 text-success fw-bold">3</h2>
                                        <span class="badge bg-success">WINNER</span>
                                    </div>
                                    <div class="col-2 d-flex align-items-center justify-content-center">
                                        <h3 class="text-muted">VS</h3>
                                    </div>
                                    <div class="col-5">
                                        <h4 class="text-secondary">Team Delta</h4>
                                        <h2 class="display-4 text-danger fw-bold">1</h2>
                                        <span class="badge bg-secondary">ELIMINATED</span>
                                    </div>
                                </div>
                                <hr>
                                <div class="text-center">
                                    <small class="text-muted">Sets Won</small>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Results Table -->
                <div class="card shadow-sm">
                    <div class="card-header bg-white border-bottom">
                        <h5 class="mb-0">
                            <i class="bi bi-list-ul me-2 text-primary"></i>All Results
                        </h5>
                    </div>
                    <div class="card-body p-0">
                        <div class="table-responsive">
                            <table class="table table-hover mb-0">
                                <thead class="table-light">
                                    <tr>
                                        <th>Event</th>
                                        <th>Date</th>
                                        <th>Teams/Participants</th>
                                        <th>Score/Result</th>
                                        <th>Status</th>
                                        <th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>
                                            <div class="d-flex align-items-center">
                                                <i class="bi bi-trophy text-warning me-2"></i>
                                                <div>
                                                    <strong>Basketball Finals</strong>
                                                    <br><small class="text-muted">Men's Division</small>
                                                </div>
                                            </div>
                                        </td>
                                        <td>March 15, 2024</td>
                                        <td>
                                            <small>Team Alpha vs Team Beta</small>
                                        </td>
                                        <td>
                                            <span class="badge bg-success">85-78</span>
                                        </td>
                                        <td><span class="badge bg-success">Completed</span></td>
                                        <td>
                                            <button class="btn btn-sm btn-outline-primary me-1">
                                                <i class="bi bi-eye"></i>
                                            </button>
                                            <button class="btn btn-sm btn-outline-secondary">
                                                <i class="bi bi-download"></i>
                                            </button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="d-flex align-items-center">
                                                <i class="bi bi-award text-info me-2"></i>
                                                <div>
                                                    <strong>Swimming 100m Freestyle</strong>
                                                    <br><small class="text-muted">Individual</small>
                                                </div>
                                            </div>
                                        </td>
                                        <td>March 20, 2024</td>
                                        <td>
                                            <small>John Doe, Jane Smith, Mike Johnson</small>
                                        </td>
                                        <td>
                                            <span class="badge bg-info">1:02.45</span>
                                        </td>
                                        <td><span class="badge bg-success">Completed</span></td>
                                        <td>
                                            <button class="btn btn-sm btn-outline-primary me-1">
                                                <i class="bi bi-eye"></i>
                                            </button>
                                            <button class="btn btn-sm btn-outline-secondary">
                                                <i class="bi bi-download"></i>
                                            </button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="d-flex align-items-center">
                                                <i class="bi bi-volleyball text-warning me-2"></i>
                                                <div>
                                                    <strong>Volleyball Semi-Finals</strong>
                                                    <br><small class="text-muted">Women's Division</small>
                                                </div>
                                            </div>
                                        </td>
                                        <td>March 18, 2024</td>
                                        <td>
                                            <small>Team Gamma vs Team Delta</small>
                                        </td>
                                        <td>
                                            <span class="badge bg-warning">3-1</span>
                                        </td>
                                        <td><span class="badge bg-success">Completed</span></td>
                                        <td>
                                            <button class="btn btn-sm btn-outline-primary me-1">
                                                <i class="bi bi-eye"></i>
                                            </button>
                                            <button class="btn btn-sm btn-outline-secondary">
                                                <i class="bi bi-download"></i>
                                            </button>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>

                <!-- Standings Section -->
                <div class="row mt-4">
                    <div class="col-lg-6">
                        <div class="card shadow-sm">
                            <div class="card-header bg-primary text-white">
                                <h5 class="mb-0">
                                    <i class="bi bi-bar-chart me-2"></i>Basketball Standings
                                </h5>
                            </div>
                            <div class="card-body p-0">
                                <div class="table-responsive">
                                    <table class="table table-sm mb-0">
                                        <thead class="table-light">
                                            <tr>
                                                <th>Rank</th>
                                                <th>Team</th>
                                                <th>W</th>
                                                <th>L</th>
                                                <th>Points</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr class="table-warning">
                                                <td><i class="bi bi-trophy text-warning"></i> 1</td>
                                                <td><strong>Team Alpha</strong></td>
                                                <td>5</td>
                                                <td>0</td>
                                                <td>10</td>
                                            </tr>
                                            <tr>
                                                <td>2</td>
                                                <td>Team Beta</td>
                                                <td>4</td>
                                                <td>1</td>
                                                <td>8</td>
                                            </tr>
                                            <tr>
                                                <td>3</td>
                                                <td>Team Gamma</td>
                                                <td>3</td>
                                                <td>2</td>
                                                <td>6</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-6">
                        <div class="card shadow-sm">
                            <div class="card-header bg-warning text-dark">
                                <h5 class="mb-0">
                                    <i class="bi bi-bar-chart me-2"></i>Volleyball Standings
                                </h5>
                            </div>
                            <div class="card-body p-0">
                                <div class="table-responsive">
                                    <table class="table table-sm mb-0">
                                        <thead class="table-light">
                                            <tr>
                                                <th>Rank</th>
                                                <th>Team</th>
                                                <th>W</th>
                                                <th>L</th>
                                                <th>Sets</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr class="table-warning">
                                                <td><i class="bi bi-trophy text-warning"></i> 1</td>
                                                <td><strong>Team Delta</strong></td>
                                                <td>4</td>
                                                <td>0</td>
                                                <td>12-2</td>
                                            </tr>
                                            <tr>
                                                <td>2</td>
                                                <td>Team Epsilon</td>
                                                <td>3</td>
                                                <td>1</td>
                                                <td>10-5</td>
                                            </tr>
                                            <tr>
                                                <td>3</td>
                                                <td>Team Zeta</td>
                                                <td>2</td>
                                                <td>2</td>
                                                <td>8-8</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </main>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
