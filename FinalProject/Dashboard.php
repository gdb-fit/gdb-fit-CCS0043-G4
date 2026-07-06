<?php
    session_start();
    if (!isset($_SESSION['UID'])) {
        header("Location: Welcome.php");
        exit();
    }
?>
<html>
    <head>
        <title> Homepage - Resident </title>
        <link rel="stylesheet" href="FINALStyle.css">
    </head>
    <body>
    <?php include("Header.php"); ?>
        <div class = "left-box">
                <h1 class = "left-title"> RESPONSE TEAM </h1>
                <p class = "left-text"> In case of emergency, <br> contact the response <br> team immediately.  <br> Choose below on what <br> team you want to <br> respond to your need.</p>
                <a href = "Emergency.php" class = "Emergency"> Click for Responders </a>
        </div>
        <div class = "right-box">
                <h1 class = "right-title"> SERVICES </h1>
                <p class = "right-text"> Need something? <br> choose what <br> kind of service <br> you need. Services is now <br> brought to you conveniently!</p> 
                <select name = "Actions" class = "Dropdown-Right">
                        <option value = '' selected disabled class = "Dropdown-option">Choose a service</option>
                        <option value = 'Suggest.php' class = "Dropdown-option"> REQUEST </option>
                        <option value = 'Request.php' class = "Dropdown-option"> SUGGEST </option>
                        <option value = 'Report.php' class = "Dropdown-option"> REPORT </option>
                </select>
        </div>
        <div class = "lower-left-box">
                <h1 class = "lower-left-title"> CONNECT WITH US </h1>
                <p class = "lower-left-text"> Connect with our <br> industrious and friendly <br> officers. Talk with them easily! </p> 
                <select name = "Actions" class = "Dropdown-Lower-Left">
                        <option value = '' selected disabled class = "Dropdown-option">Choose to chat</option>
                        <option value = 'Suggest.php' class = "Dropdown-option"> Kap. Umali </option>
                        <option value = 'Request.php' class = "Dropdown-option"> Kagawad Gian </option>
                        <option value = 'Report.php' class = "Dropdown-option"> Kagawad Lhanz </option>
                </select>
        </div>
        <div class = "lower-right-box">
                <h1 class = "lower-right-title"> NEWS </h1>
                <p class = "lower-right-text"> Stay updated with the <br> latest news from <br> our barangay. </p>
                <a href = 'News.php' class = "button-Lower-Right"> Click here to read </a>
        </div>
        <div class = "rightmost-box">
                <h1 class = "rightmost-title"> ABOUT OUR BARANGAY </h1>
                <p class = "rightmost-text"> Learn more about <br> our Barangay. Its humble <br> beginnings, successes, and background. </p>
                <a href = 'News.php' class = "button-Rightmost"> Click here to read </a>
        </div>
        <div class = "lower-rightmost-box">
                <h1 class = "lower-rightmost-title"> MEET OUR OFFICIALS </h1>
                <p class = "lower-rightmost-text"> Meet the servant leaders of our <br> barangay and learn about their <br> roles and responsibilities. </p>
                <a href = 'News.php' class = "button-Lower-Rightmost"> Click here to read </a>
        </div>
        <div class = "Announcement-box">
                <h1 class = "announce-head"> ANNOUNCEMENTS </h1>
                <div class = "Inner-Announcement-box">
                    
                </div>
                
        </div>
        <div class = 'footer'>
            <footer>

            </footer>
        </div>
</body>
</html>