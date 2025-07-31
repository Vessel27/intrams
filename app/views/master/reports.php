<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Generate Reports - SUNN Intramurals</title>
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
                            <i class="bi bi-file-earmark-text me-2 text-primary"></i>Generate Reports
                        </h1>
                        <p class="text-muted mb-0">Create and download comprehensive intramural reports</p>
                    </div>
                </div>

                <!-- Quick Report Generation -->
                <div class="row mb-4">
                    <div class="col-lg-3 col-md-6 mb-3">
                        <div class="card h-100 border-primary">
                            <div class="card-body text-center">
                                <i class="bi bi-trophy display-4 text-primary mb-3"></i>
                                <h5 class="card-title">Medal Tally Report</h5>
                                <p class="card-text text-muted">Complete medal standings by team</p>
                                <button class="btn btn-primary" onclick="generateMedalTally()">
                                    <i class="bi bi-download me-1"></i>Generate
                                </button>
                            </div>
                        </div>
                    </div>
                    
                    <div class="col-lg-3 col-md-6 mb-3">
                        <div class="card h-100 border-success">
                            <div class="card-body text-center">
                                <i class="bi bi-list-check display-4 text-success mb-3"></i>
                                <h5 class="card-title">Results Summary</h5>
                                <p class="card-text text-muted">All event results and scores</p>
                                <button class="btn btn-success" onclick="generateResults()">
                                    <i class="bi bi-download me-1"></i>Generate
                                </button>
                            </div>
                        </div>
                    </div>
                    
                    <div class="col-lg-3 col-md-6 mb-3">
                        <div class="card h-100 border-warning">
                            <div class="card-body text-center">
                                <i class="bi bi-calendar-event display-4 text-warning mb-3"></i>
                                <h5 class="card-title">Schedule Report</h5>
                                <p class="card-text text-muted">Complete event schedule</p>
                                <button class="btn btn-warning" onclick="generateSchedule()">
                                    <i class="bi bi-download me-1"></i>Generate
                                </button>
                            </div>
                        </div>
                    </div>
                    
                    <div class="col-lg-3 col-md-6 mb-3">
                        <div class="card h-100 border-info">
                            <div class="card-body text-center">
                                <i class="bi bi-people display-4 text-info mb-3"></i>
                                <h5 class="card-title">Participation Report</h5>
                                <p class="card-text text-muted">Team and athlete statistics</p>
                                <button class="btn btn-info" onclick="generateParticipation()">
                                    <i class="bi bi-download me-1"></i>Generate
                                </button>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Custom Report Generator -->
                <div class="card shadow-sm mb-4">
                    <div class="card-header bg-primary text-white">
                        <h5 class="mb-0">
                            <i class="bi bi-gear me-2"></i>Custom Report Generator
                        </h5>
                    </div>
                    <div class="card-body">
                        <form id="customReportForm">
                            <div class="row g-3">
                                <div class="col-md-4">
                                    <label class="form-label">Report Type</label>
                                    <select class="form-select" id="reportType" required>
                                        <option value="">Select Report Type</option>
                                        <option value="medal_tally">Medal Tally</option>
                                        <option value="results">Event Results</option>
                                        <option value="schedule">Schedule</option>
                                        <option value="participation">Participation</option>
                                        <option value="statistics">Statistics</option>
                                    </select>
                                </div>
                                <div class="col-md-4">
                                    <label class="form-label">Sport Filter</label>
                                    <select class="form-select" id="sportFilter">
                                        <option value="">All Sports</option>
                                        <option value="basketball">Basketball</option>
                                        <option value="volleyball">Volleyball</option>
                                        <option value="badminton">Badminton</option>
                                        <option value="swimming">Swimming</option>
                                    </select>
                                </div>
                                <div class="col-md-4">
                                    <label class="form-label">Category Filter</label>
                                    <select class="form-select" id="categoryFilter">
                                        <option value="">All Categories</option>
                                        <option value="mens">Men's</option>
                                        <option value="womens">Women's</option>
                                        <option value="mixed">Mixed</option>
                                    </select>
                                </div>
                            </div>
                            
                            <div class="row g-3 mt-2">
                                <div class="col-md-4">
                                    <label class="form-label">Date From</label>
                                    <input type="date" class="form-control" id="dateFrom">
                                </div>
                                <div class="col-md-4">
                                    <label class="form-label">Date To</label>
                                    <input type="date" class="form-control" id="dateTo">
                                </div>
                                <div class="col-md-4">
                                    <label class="form-label">Format</label>
                                    <select class="form-select" id="reportFormat">
                                        <option value="pdf">PDF</option>
                                        <option value="excel">Excel</option>
                                        <option value="csv">CSV</option>
                                    </select>
                                </div>
                            </div>
                            
                            <div class="mt-4">
                                <button type="button" class="btn btn-primary btn-lg" onclick="generateCustomReport()">
                                    <i class="bi bi-file-earmark-arrow-down me-2"></i>Generate Custom Report
                                </button>
                                <button type="reset" class="btn btn-outline-secondary btn-lg ms-2">
                                    <i class="bi bi-arrow-clockwise me-1"></i>Reset
                                </button>
                            </div>
                        </form>
                    </div>
                </div>

                <!-- Report Templates -->
                <div class="card shadow-sm mb-4">
                    <div class="card-header bg-success text-white">
                        <h5 class="mb-0">
                            <i class="bi bi-file-earmark-text me-2"></i>Report Templates
                        </h5>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-6 mb-3">
                                <div class="border rounded p-3">
                                    <h6 class="fw-bold">
                                        <i class="bi bi-file-earmark-pdf text-danger me-2"></i>
                                        Complete Intramural Report
                                    </h6>
                                    <p class="text-muted mb-2">Comprehensive report including all events, results, and statistics</p>
                                    <button class="btn btn-outline-danger btn-sm" onclick="generateCompleteReport()">
                                        <i class="bi bi-download me-1"></i>Download PDF
                                    </button>
                                </div>
                            </div>
                            
                            <div class="col-md-6 mb-3">
                                <div class="border rounded p-3">
                                    <h6 class="fw-bold">
                                        <i class="bi bi-file-earmark-excel text-success me-2"></i>
                                        Event Summary Spreadsheet
                                    </h6>
                                    <p class="text-muted mb-2">Excel format with all event data for analysis</p>
                                    <button class="btn btn-outline-success btn-sm" onclick="generateExcelSummary()">
                                        <i class="bi bi-download me-1"></i>Download Excel
                                    </button>
                                </div>
                            </div>
                            
                            <div class="col-md-6 mb-3">
                                <div class="border rounded p-3">
                                    <h6 class="fw-bold">
                                        <i class="bi bi-file-earmark-text text-primary me-2"></i>
                                        Awards Ceremony Script
                                    </h6>
                                    <p class="text-muted mb-2">Formatted script for awards ceremony with winners</p>
                                    <button class="btn btn-outline-primary btn-sm" onclick="generateCeremonyScript()">
                                        <i class="bi bi-download me-1"></i>Download Script
                                    </button>
                                </div>
                            </div>
                            
                            <div class="col-md-6 mb-3">
                                <div class="border rounded p-3">
                                    <h6 class="fw-bold">
                                        <i class="bi bi-file-earmark-bar-graph text-warning me-2"></i>
                                        Statistical Analysis
                                    </h6>
                                    <p class="text-muted mb-2">Detailed statistics and performance analysis</p>
                                    <button class="btn btn-outline-warning btn-sm" onclick="generateStatistics()">
                                        <i class="bi bi-download me-1"></i>Download Report
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Recent Reports -->
                <div class="card shadow-sm">
                    <div class="card-header bg-info text-white">
                        <h5 class="mb-0">
                            <i class="bi bi-clock-history me-2"></i>Recently Generated Reports
                        </h5>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-hover mb-0">
                                <thead class="table-light">
                                    <tr>
                                        <th>Report Name</th>
                                        <th>Type</th>
                                        <th>Generated</th>
                                        <th>Size</th>
                                        <th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>
                                            <i class="bi bi-file-earmark-pdf text-danger me-2"></i>
                                            Complete_Intramural_Report_2024-03-20.pdf
                                        </td>
                                        <td><span class="badge bg-danger">PDF</span></td>
                                        <td>March 20, 2024 - 2:30 PM</td>
                                        <td>2.4 MB</td>
                                        <td>
                                            <button class="btn btn-sm btn-outline-primary me-1" title="Download">
                                                <i class="bi bi-download"></i>
                                            </button>
                                            <button class="btn btn-sm btn-outline-danger" title="Delete">
                                                <i class="bi bi-trash"></i>
                                            </button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <i class="bi bi-file-earmark-excel text-success me-2"></i>
                                            Medal_Tally_2024-03-19.xlsx
                                        </td>
                                        <td><span class="badge bg-success">Excel</span></td>
                                        <td>March 19, 2024 - 4:15 PM</td>
                                        <td>156 KB</td>
                                        <td>
                                            <button class="btn btn-sm btn-outline-primary me-1" title="Download">
                                                <i class="bi bi-download"></i>
                                            </button>
                                            <button class="btn btn-sm btn-outline-danger" title="Delete">
                                                <i class="bi bi-trash"></i>
                                            </button>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>

            </main>
        </div>
    </div>

    <script src="<?php echo $url->base_url(); ?>public/assets/js/coreui.bundle.min.js"></script>
    <script>
        function generateMedalTally() {
            showGeneratingAlert('Medal Tally Report');
            // Add actual generation logic here
        }

        function generateResults() {
            showGeneratingAlert('Results Summary');
            // Add actual generation logic here
        }

        function generateSchedule() {
            showGeneratingAlert('Schedule Report');
            // Add actual generation logic here
        }

        function generateParticipation() {
            showGeneratingAlert('Participation Report');
            // Add actual generation logic here
        }

        function generateCustomReport() {
            const reportType = document.getElementById('reportType').value;
            if (!reportType) {
                alert('Please select a report type');
                return;
            }
            showGeneratingAlert('Custom Report');
            // Add actual generation logic here
        }

        function generateCompleteReport() {
            showGeneratingAlert('Complete Intramural Report');
            // Add actual generation logic here
        }

        function generateExcelSummary() {
            showGeneratingAlert('Excel Summary');
            // Add actual generation logic here
        }

        function generateCeremonyScript() {
            showGeneratingAlert('Awards Ceremony Script');
            // Add actual generation logic here
        }

        function generateStatistics() {
            showGeneratingAlert('Statistical Analysis');
            // Add actual generation logic here
        }

        function showGeneratingAlert(reportName) {
            alert(`Generating ${reportName}... This may take a few moments.`);
        }
    </script>
</body>
</html>
