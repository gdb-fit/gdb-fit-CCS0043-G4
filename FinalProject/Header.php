<?php
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}

if (!isset($_SESSION['UID'])) {
    header("Location: Welcome.php");
    exit();
}
?>

        <div class="welcome-title">
            <h1 class="BgyCent">BarangayCentral</h1>
            <h3 class="six7">In Partnership with Barangay Six Seven</h3>
            <img src="Images/BrgyLOGO.png" class="BGYLOGOS">
        </div>
        <div class = 'navigation-bar'>
            <nav>
                <ul class = "banner-header">
                    <a href = 'Dashboard.php' class = "button-1"> Dashboard</a>
                    <a href = 'Logout.php' class = "button-2">Logout</a>
                    <a href = 'User.php' class = "button-3">User Profile</a>
                </ul>
            </nav>
        </div>
