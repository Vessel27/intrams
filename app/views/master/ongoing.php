<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ongoing Games - SUNN Intramurals</title>
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
                            <i class="bi bi-play-circle me-2 text-primary"></i>Ongoing Games
                        </h1>
                        <p class="text-muted mb-0">Monitor live games and real-time updates</p>
                    </div>
                    <div class="btn-toolbar mb-2 mb-md-0">
                        <button type="button" class="btn btn-success me-2" onclick="refreshGames()">
                            <i class="bi bi-arrow-clockwise me-1"></i>Refresh
                        </button>
                        <button type="button" class="btn btn-primary">
                            <i class="bi bi-plus-circle me-1"></i>Start New Game
                        </button>
                    </div>
                </div>

                <!-- Live Games Status -->
                <div class="row mb-4">
                    <div class="col-md-3">
                        <div class="card bg-success text-white">
                            <div class="card-body text-center">
                                <i class="bi bi-play-circle display-4 mb-2"></i>
                                <h3 class="mb-0">3</h3>
                                <p class="mb-0">Live Games</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="card bg-warning text-white">
                            <div class="card-body text-center">
                                <i class="bi bi-pause-circle display-4 mb-2"></i>
                                <h3 class="mb-0">2</h3>
                                <p class="mb-0">Halftime</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="card bg-info text-white">
                            <div class="card-body text-center">
                                <i class="bi bi-clock display-4 mb-2"></i>
                                <h3 class="mb-0">4</h3>
                                <p class="mb-0">Starting Soon</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="card bg-danger text-white">
                            <div class="card-body text-center">
                                <i class="bi bi-exclamation-triangle display-4 mb-2"></i>
                                <h3 class="mb-0">1</h3>
                                <p class="mb-0">Delayed</p>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Live Games Cards -->
                <div class="row mb-4">
                    <!-- Basketball Game -->
                    <div class="col-lg-6 mb-4">
                        <div class="card shadow-sm border-success">
                            <div class="card-header bg-success text-white d-flex justify-content-between align-items-center">
                                <div>
                                    <h5 class="mb-0">
                                        <i class="bi bi-trophy me-2"></i>Basketball Finals
                                    </h5>
                                    <small>Main Court - Men's Division</small>
                                </div>
                                <span class="badge bg-light text-success">
                                    <i class="bi bi-broadcast"></i> LIVE
                                </span>
                            </div>
                            <div class="card-body">
                                <!-- Score Display -->
                                <div class="row text-center mb-3">
                                    <div class="col-5">
                                        <h4 class="text-primary mb-1">Team Alpha</h4>
                                        <h1 class="display-3 fw-bold text-success">78</h1>
                                    </div>
                                    <div class="col-2 d-flex align-items-center justify-content-center">
                                        <div class="text-center">
                                            <h3 class="text-muted">VS</h3>
                                            <div class="badge bg-warning text-dark">Q3</div>
                                        </div>
                                    </div>
                                    <div class="col-5">
                                        <h4 class="text-danger mb-1">Team Beta</h4>
                                        <h1 class="display-3 fw-bold text-danger">72</h1>
                                    </div>
                                </div>
                                
                                <!-- Game Timer -->
                                <div class="text-center mb-3">
                                    <h4 class="text-warning">
                                        <i class="bi bi-stopwatch me-2"></i>
                                        <span id="timer1">08:45</span>
                                    </h4>
                                    <small class="text-muted">3rd Quarter</small>
                                </div>
                                
                                <!-- Quarter Scores -->
                                <div class="row text-center small">
                                    <div class="col-6">
                                        <strong>Team Alpha</strong>
                                        <div class="d-flex justify-content-between">
                                            <span>Q1: 18</span>
                                            <span>Q2: 22</span>
                                            <span>Q3: 38</span>
                                            <span>Q4: -</span>
                                        </div>
                                    </div>
                                    <div class="col-6">
                                        <strong>Team Beta</strong>
                                        <div class="d-flex justify-content-between">
                                            <span>Q1: 20</span>
                                            <span>Q2: 19</span>
                                            <span>Q3: 33</span>
                                            <span>Q4: -</span>
                                        </div>
                                    </div>
                                </div>
                                
                                <!-- Action Buttons -->
                                <div class="mt-3 text-center">
                                    <button class="btn btn-sm btn-primary me-2" onclick="updateScore(1)">
                                        <i class="bi bi-pencil me-1"></i>Update Score
                                    </button>
                                    <button class="btn btn-sm btn-warning me-2" onclick="pauseGame(1)">
                                        <i class="bi bi-pause me-1"></i>Pause
                                    </button>
                                    <button class="btn btn-sm btn-success" onclick="viewDetails(1)">
                                        <i class="bi bi-eye me-1"></i>Details
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Volleyball Game -->
                    <div class="col-lg-6 mb-4">
                        <div class="card shadow-sm border-warning">
                            <div class="card-header bg-warning text-dark d-flex justify-content-between align-items-center">
                                <div>
                                    <h5 class="mb-0">
                                        <i class="bi bi-volleyball me-2"></i>Volleyball Semi-Finals
                                    </h5>
                                    <small>Volleyball Court - Women's Division</small>
                                </div>
                                <span class="badge bg-dark text-warning">
                                    <i class="bi bi-pause-circle"></i> HALFTIME
                                </span>
                            </div>
                            <div class="card-body">
                                <!-- Score Display -->
                                <div class="row text-center mb-3">
                                    <div class="col-5">
                                        <h4 class="text-primary mb-1">Team Gamma</h4>
                                        <h1 class="display-3 fw-bold text-success">2</h1>
                                    </div>
                                    <div class="col-2 d-flex align-items-center justify-content-center">
                                        <div class="text-center">
                                            <h3 class="text-muted">VS</h3>
                                            <div class="badge bg-info">Set 3</div>
                                        </div>
                                    </div>
                                    <div class="col-5">
                                        <h4 class="text-danger mb-1">Team Delta</h4>
                                        <h1 class="display-3 fw-bold text-danger">1</h1>
                                    </div>
                                </div>
                                
                                <!-- Current Set Score -->
                                <div class="text-center mb-3">
                                    <h4 class="text-info">
                                        Current Set: 15 - 12
                                    </h4>
                                    <small class="text-muted">Halftime Break</small>
                                </div>
                                
                                <!-- Set Scores -->
                                <div class="row text-center small">
                                    <div class="col-6">
                                        <strong>Team Gamma</strong>
                                        <div class="d-flex justify-content-between">
                                            <span>Set 1: 25</span>
                                            <span>Set 2: 23</span>
                                            <span>Set 3: 15</span>
                                        </div>
                                    </div>
                                    <div class="col-6">
                                        <strong>Team Delta</strong>
                                        <div class="d-flex justify-content-between">
                                            <span>Set 1: 22</span>
                                            <span>Set 2: 25</span>
                                            <span>Set 3: 12</span>
                                        </div>
                                    </div>
                                </div>
                                
                                <!-- Action Buttons -->
                                <div class="mt-3 text-center">
                                    <button class="btn btn-sm btn-success me-2" onclick="resumeGame(2)">
                                        <i class="bi bi-play me-1"></i>Resume
                                    </button>
                                    <button class="btn btn-sm btn-primary me-2" onclick="updateScore(2)">
                                        <i class="bi bi-pencil me-1"></i>Update Score
                                    </button>
                                    <button class="btn btn-sm btn-info" onclick="viewDetails(2)">
                                        <i class="bi bi-eye me-1"></i>Details
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Upcoming Games -->
                <div class="card shadow-sm mb-4">
                    <div class="card-header bg-info text-white">
                        <h5 class="mb-0">
                            <i class="bi bi-clock me-2"></i>Starting Soon
                        </h5>
                    </div>
                    <div class="card-body p-0">
                        <div class="table-responsive">
                            <table class="table table-hover mb-0">
                                <thead class="table-light">
                                    <tr>
                                        <th>Time</th>
                                        <th>Event</th>
                                        <th>Teams</th>
                                        <th>Venue</th>
                                        <th>Status</th>
                                        <th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>
                                            <strong>3:00 PM</strong><br>
                                            <small class="text-muted">In 15 mins</small>
                                        </td>
                                        <td>
                                            <div class="d-flex align-items-center">
                                                <i class="bi bi-trophy text-warning me-2"></i>
                                                <div>
                                                    <strong>Swimming Finals</strong><br>
                                                    <small class="text-muted">100m Freestyle</small>
                                                </div>
                                            </div>
                                        </td>
                                        <td>Individual Event</td>
                                        <td>Swimming Pool</td>
                                        <td><span class="badge bg-warning">Preparing</span></td>
                                        <td>
                                            <button class="btn btn-sm btn-success" onclick="startGame(3)">
                                                <i class="bi bi-play me-1"></i>Start
                                            </button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <strong>4:00 PM</strong><br>
                                            <small class="text-muted">In 1 hr 15 mins</small>
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
                                        <td>Pair A vs Pair B</td>
                                        <td>Badminton Hall</td>
                                        <td><span class="badge bg-info">Scheduled</span></td>
                                        <td>
                                            <button class="btn btn-sm btn-outline-primary" onclick="viewSchedule(4)">
                                                <i class="bi bi-eye me-1"></i>View
                                            </button>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>

                <!-- Game Controls -->
                <div class="card shadow-sm">
                    <div class="card-header bg-dark text-white">
                        <h5 class="mb-0">
                            <i class="bi bi-gear me-2"></i>Game Management
                        </h5>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-4">
                                <h6>Quick Actions</h6>
                                <div class="d-grid gap-2">
                                    <button class="btn btn-success" onclick="startAllScheduled()">
                                        <i class="bi bi-play-circle me-1"></i>Start All Scheduled
                                    </button>
                                    <button class="btn btn-warning" onclick="pauseAllGames()">
                                        <i class="bi bi-pause-circle me-1"></i>Pause All Games
                                    </button>
                                    <button class="btn btn-info" onclick="refreshAllScores()">
                                        <i class="bi bi-arrow-clockwise me-1"></i>Refresh All Scores
                                    </button>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <h6>Announcements</h6>
                                <div class="mb-2">
                                    <textarea class="form-control" rows="3" placeholder="Type announcement..."></textarea>
                                </div>
                                <button class="btn btn-primary btn-sm">
                                    <i class="bi bi-megaphone me-1"></i>Broadcast
                                </button>
                            </div>
                            <div class="col-md-4">
                                <h6>Emergency Controls</h6>
                                <div class="d-grid gap-2">
                                    <button class="btn btn-danger" onclick="emergencyStop()">
                                        <i class="bi bi-stop-circle me-1"></i>Emergency Stop All
                                    </button>
                                    <button class="btn btn-warning" onclick="weatherDelay()">
                                        <i class="bi bi-cloud-rain me-1"></i>Weather Delay
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </main>
        </div>
    </div>

    <script src="<?php echo $url->base_url(); ?>public/assets/js/coreui.bundle.min.js"></script>
    <script>
        // Auto-refresh every 30 seconds
        setInterval(refreshGames, 30000);

        function refreshGames() {
            console.log('Refreshing game data...');
            // Add AJAX call to refresh game data
        }

        function updateScore(gameId) {
            alert(`Opening score update for game ${gameId}`);
            // Add score update modal/form
        }

        function pauseGame(gameId) {
            alert(`Pausing game ${gameId}`);
            // Add pause game logic
        }

        function resumeGame(gameId) {
            alert(`Resuming game ${gameId}`);
            // Add resume game logic
        }

        function startGame(gameId) {
            alert(`Starting game ${gameId}`);
            // Add start game logic
        }

        function viewDetails(gameId) {
            alert(`Viewing details for game ${gameId}`);
            // Add view details modal
        }

        function viewSchedule(gameId) {
            alert(`Viewing schedule for game ${gameId}`);
            // Add schedule view
        }

        function startAllScheduled() {
            if (confirm('Start all scheduled games?')) {
                alert('Starting all scheduled games...');
            }
        }

        function pauseAllGames() {
            if (confirm('Pause all ongoing games?')) {
                alert('Pausing all games...');
            }
        }

        function refreshAllScores() {
            alert('Refreshing all scores...');
        }

        function emergencyStop() {
            if (confirm('EMERGENCY STOP: This will stop all ongoing games. Continue?')) {
                alert('Emergency stop activated!');
            }
        }

        function weatherDelay() {
            if (confirm('Activate weather delay for all outdoor events?')) {
                alert('Weather delay activated!');
            }
        }

        // Timer simulation for live games
        function updateTimer() {
            const timer = document.getElementById('timer1');
            if (timer) {
                let time = timer.textContent.split(':');
                let minutes = parseInt(time[0]);
                let seconds = parseInt(time[1]);
                
                if (seconds > 0) {
                    seconds--;
                } else if (minutes > 0) {
                    minutes--;
                    seconds = 59;
                }
                
                timer.textContent = `${minutes.toString().padStart(2, '0')}:${seconds.toString().padStart(2, '0')}`;
            }
        }

        // Update timer every second
        setInterval(updateTimer, 1000);
    </script>
</body>
</html>
