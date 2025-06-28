<?php
// components/sidebar.php
if (!isset($_SESSION)) {
    session_start();
}
?>

<nav id="sidebar" class="col-md-3 col-lg-2 d-md-block bg-dark sidebar collapse">
    <div class="position-sticky pt-3">
        <div class="sidebar-header text-center">
            <h4 class="text-white">Secure Test Project</h4>
            <hr class="bg-light">
        </div>
        <ul class="nav flex-column">
            <li class="nav-item">
                <a class="nav-link <?php echo basename($_SERVER['PHP_SELF']) === 'dashboard.php' ? 'active' : ''; ?>" 
                   href="../dashboard/dashboard.php">
                    <i class="bi bi-speedometer2 me-2"></i>
                    Dashboard
                </a>
            </li>
            
            <?php if (($_SESSION['role'] ?? '') === 'admin'): ?>
            <li class="nav-item">
                <a class="nav-link <?php echo basename($_SERVER['PHP_SELF']) === 'user_management.php' ? 'active' : ''; ?>" 
                   href="user_management.php">
                    <i class="bi bi-people-fill me-2"></i>
                    User Management
                </a>
            </li>
            <?php endif; ?>
            
            <li class="nav-item">
                <a class="nav-link <?php echo basename($_SERVER['PHP_SELF']) === 'profile.php' ? 'active' : ''; ?>" 
                   href="profile.php">
                    <i class="bi bi-person me-2"></i>
                    Profile
                </a>
            </li>
            
            <li class="nav-item">
                <a class="nav-link <?php echo basename($_SERVER['PHP_SELF']) === 'reports.php' ? 'active' : ''; ?>" 
                   href="reports.php">
                    <i class="bi bi-file-earmark-text me-2"></i>
                    Reports
                </a>
            </li>
            
            <li class="nav-item">
                <a class="nav-link" href="../logout/logout.php">
                    <i class="bi bi-box-arrow-right me-2"></i>
                    Logout
                </a>
            </li>
        </ul>
    </div>
</nav>

<!-- Mobile Toggle Button -->
<button class="navbar-toggler position-fixed d-md-none" 
        type="button" 
        data-bs-toggle="collapse" 
        data-bs-target="#sidebar"
        style="top: 10px; left: 10px; z-index: 1030;">
    <i class="bi bi-list text-white"></i>
</button>