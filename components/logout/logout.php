<?php
require_once '../../includes/functions.php';

// Check if logout confirmation was submitted
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['confirm_logout'])) {
    // Initialize the session
    session_start();
    
    // Unset all of the session variables
    $_SESSION = array();
    
    // Destroy the session
    session_destroy();
     
    redirect('../../index.php');
    exit;
}

// If not submitted, show confirmation page
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Logout Confirmation</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="../..//main.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card shadow">
                    <div class="card-header bg-primary text-white">
                        <h4 class="card-title mb-0">Logout Confirmation</h4>
                    </div>
                    <div class="card-body">
                        <p class="lead">Are you sure you want to logout?</p>
                        <form method="POST" action="logout.php">
                            <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                                <a href="../dashboard/dashboard.php" class="btn btn-secondary me-md-2">
                                    <i class="bi bi-x-circle"></i> Cancel
                                </a>
                                <button type="submit" name="confirm_logout" class="btn btn-danger">
                                    <i class="bi bi-box-arrow-right"></i> Yes, Logout
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>