<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Input Scores - SUNN Intramurals</title>
</head>
<body class="c-app">
    <?php include 'navbar.php'; ?>
    
    <!-- Main content -->
    <div class="container-fluid">
        <div class="row">
            <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4 main-content">
                <!-- Header -->
                <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-4">
                    <div>
                        <h1 class="h2 mb-0">
                            <i class="bi bi-pencil-square me-2 text-primary"></i>Input Scores
                        </h1>
                        <p class="text-muted mb-0">Enter match results and update game scores</p>
                    </div>
                </div>

                <!-- Game Selection -->
                <div class="card shadow-sm mb-4">
                    <div class="card-header bg-primary text-white">
                        <h5 class="mb-0">
                            <i class="bi bi-calendar-event me-2"></i>Select Game
                        </h5>
                    </div>
                    <div class="card-body">
                        <div class="row g-3">
                            <div class="col-md-4">
                                <label class="form-label">Sport</label>
                                <select class="form-select" id="sportSelect">
                                    <option value="">Select Sport</option>
                                    <option value="basketball">Basketball</option>
                                    <option value="volleyball">Volleyball</option>
                                    <option value="badminton">Badminton</option>
                                    <option value="swimming">Swimming</option>
                                </select>
                            </div>
                            <div class="col-md-4">
                                <label class="form-label">Category</label>
                                <select class="form-select" id="categorySelect">
                                    <option value="">Select Category</option>
                                    <option value="mens">Men's</option>
                                    <option value="womens">Women's</option>
                                    <option value="mixed">Mixed</option>
                                </select>
                            </div>
                            <div class="col-md-4">
                                <label class="form-label">Game Date</label>
                                <input type="date" class="form-control" id="gameDate">
                            </div>
                        </div>
                        <div class="mt-3">
                            <button class="btn btn-primary" onclick="loadGames()">
                                <i class="bi bi-search me-1"></i>Load Games
                            </button>
                        </div>
                    </div>
                </div>

                <!-- Available Games -->
                <div class="card shadow-sm mb-4" id="gamesCard" style="display: none;">
                    <div class="card-header bg-success text-white">
                        <h5 class="mb-0">
                            <i class="bi bi-list-ul me-2"></i>Available Games
                        </h5>
                    </div>
                    <div class="card-body p-0">
                        <div class="table-responsive">
                            <table class="table table-hover mb-0">
                                <thead class="table-light">
                                    <tr>
                                        <th>Time</th>
                                        <th>Teams</th>
                                        <th>Round</th>
                                        <th>Status</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody id="gamesTableBody">
                                    <tr>
                                        <td>2:00 PM</td>
                                        <td>Team Alpha vs Team Beta</td>
                                        <td>Semi-Finals</td>
                                        <td><span class="badge bg-warning">Pending</span></td>
                                        <td>
                                            <button class="btn btn-sm btn-primary" onclick="selectGame(1)">
                                                <i class="bi bi-pencil me-1"></i>Input Score
                                            </button>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>

                <!-- Score Input Form -->
                <div class="card shadow-sm" id="scoreForm" style="display: none;">
                    <div class="card-header bg-warning text-dark">
                        <h5 class="mb-0">
                            <i class="bi bi-trophy me-2"></i>Input Match Score
                        </h5>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <!-- Team 1 -->
                            <div class="col-md-5">
                                <div class="card border-primary">
                                    <div class="card-header bg-primary text-white text-center">
                                        <h5 class="mb-0" id="team1Name">Team Alpha</h5>
                                    </div>
                                    <div class="card-body text-center">
                                        <label class="form-label">Final Score</label>
                                        <input type="number" class="form-control form-control-lg text-center" 
                                               id="team1Score" placeholder="0" min="0">
                                        
                                        <!-- Basketball/Volleyball Quarters/Sets -->
                                        <div class="mt-3" id="team1Breakdown">
                                            <label class="form-label">Quarter Scores</label>
                                            <div class="row g-2">
                                                <div class="col-3">
                                                    <input type="number" class="form-control text-center" 
                                                           placeholder="Q1" min="0">
                                                </div>
                                                <div class="col-3">
                                                    <input type="number" class="form-control text-center" 
                                                           placeholder="Q2" min="0">
                                                </div>
                                                <div class="col-3">
                                                    <input type="number" class="form-control text-center" 
                                                           placeholder="Q3" min="0">
                                                </div>
                                                <div class="col-3">
                                                    <input type="number" class="form-control text-center" 
                                                           placeholder="Q4" min="0">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- VS -->
                            <div class="col-md-2 d-flex align-items-center justify-content-center">
                                <h2 class="text-muted">VS</h2>
                            </div>

                            <!-- Team 2 -->
                            <div class="col-md-5">
                                <div class="card border-danger">
                                    <div class="card-header bg-danger text-white text-center">
                                        <h5 class="mb-0" id="team2Name">Team Beta</h5>
                                    </div>
                                    <div class="card-body text-center">
                                        <label class="form-label">Final Score</label>
                                        <input type="number" class="form-control form-control-lg text-center" 
                                               id="team2Score" placeholder="0" min="0">
                                        
                                        <!-- Basketball/Volleyball Quarters/Sets -->
                                        <div class="mt-3" id="team2Breakdown">
                                            <label class="form-label">Quarter Scores</label>
                                            <div class="row g-2">
                                                <div class="col-3">
                                                    <input type="number" class="form-control text-center" 
                                                           placeholder="Q1" min="0">
                                                </div>
                                                <div class="col-3">
                                                    <input type="number" class="form-control text-center" 
                                                           placeholder="Q2" min="0">
                                                </div>
                                                <div class="col-3">
                                                    <input type="number" class="form-control text-center" 
                                                           placeholder="Q3" min="0">
                                                </div>
                                                <div class="col-3">
                                                    <input type="number" class="form-control text-center" 
                                                           placeholder="Q4" min="0">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Additional Details -->
                        <div class="row mt-4">
                            <div class="col-md-6">
                                <label class="form-label">Game Status</label>
                                <select class="form-select" id="gameStatus">
                                    <option value="completed">Completed</option>
                                    <option value="ongoing">Ongoing</option>
                                    <option value="postponed">Postponed</option>
                                    <option value="cancelled">Cancelled</option>
                                </select>
                            </div>
                            <div class="col-md-6">
                                <label class="form-label">MVP (Optional)</label>
                                <input type="text" class="form-control" id="mvp" placeholder="Player name">
                            </div>
                        </div>

                        <div class="mt-3">
                            <label class="form-label">Match Notes (Optional)</label>
                            <textarea class="form-control" id="matchNotes" rows="3" 
                                      placeholder="Add any additional notes about the match..."></textarea>
                        </div>

                        <!-- Action Buttons -->
                        <div class="mt-4 text-center">
                            <button class="btn btn-success btn-lg me-2" onclick="submitScore()">
                                <i class="bi bi-check-circle me-1"></i>Submit Score
                            </button>
                            <button class="btn btn-secondary btn-lg" onclick="cancelInput()">
                                <i class="bi bi-x-circle me-1"></i>Cancel
                            </button>
                        </div>
                    </div>
                </div>
            </main>
        </div>
    </div>

    <script src="<?php echo $url->base_url(); ?>public/assets/js/coreui.bundle.min.js"></script>
    <script>
        function loadGames() {
            // Show games card
            document.getElementById('gamesCard').style.display = 'block';
            // Hide score form
            document.getElementById('scoreForm').style.display = 'none';
        }

        function selectGame(gameId) {
            // Show score form
            document.getElementById('scoreForm').style.display = 'block';
            // Scroll to form
            document.getElementById('scoreForm').scrollIntoView({ behavior: 'smooth' });
        }

        function submitScore() {
            // Add validation and submission logic here
            alert('Score submitted successfully!');
        }

        function cancelInput() {
            // Hide score form
            document.getElementById('scoreForm').style.display = 'none';
        }
    </script>
</body>
</html>
