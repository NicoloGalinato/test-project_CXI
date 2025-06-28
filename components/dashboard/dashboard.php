<?php
require_once '../../includes/functions.php';

if (!isLoggedIn()) {
    redirect('../../index.php');
}

ob_start(); // Start output buffering for modular nav
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.0/font/bootstrap-icons.css" rel="stylesheet">
    <link href="../../main.css" rel="stylesheet">
</head>
<body>
    <div class="container-fluid">
        <div class="row">

            <!-- Main Content -->
             <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="alert alert-success">
                            <h2>Welcome, <?php echo htmlspecialchars($_SESSION['fname']); ?>!</h2>
                            <p>This is your secure dashboard.</p>
                         </div>
                            
                        <!-- Dashboard Cards -->
                        <div class="row">
                            <div class="col-md-4 mb-4">
                                <div class="card text-white bg-primary h-100">
                                    <div class="card-body">
                                        <h5 class="card-title"><i class="bi bi-people-fill"></i> Users</h5>
                                        <p class="card-text">Manage system users</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4 mb-4">
                                <div class="card text-white bg-success h-100">
                                    <div class="card-body">
                                        <h5 class="card-title"><i class="bi bi-graph-up"></i> Analytics</h5>
                                        <p class="card-text">View system statistics</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4 mb-4">
                                <div class="card text-white bg-info h-100">
                                    <div class="card-body">
                                        <h5 class="card-title"><i class="bi bi-bell-fill"></i> Notifications</h5>
                                        <p class="card-text">View recent alerts</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End of Main Content -->
        </div>
    </div>


    <!-- Modular nav -->
    <?php
    $content = ob_get_clean(); // Store buffered content
    $pageTitle = "Dashboard";
    include '../../layouts/main.php';
    ?>
    <!-- Modular nav -->



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        // Enable tooltips
        var tooltipTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="tooltip"]'))
        var tooltipList = tooltipTriggerList.map(function (tooltipTriggerEl) {
            return new bootstrap.Tooltip(tooltipTriggerEl)
        });
    </script>
</body>
</html>