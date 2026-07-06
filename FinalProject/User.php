<?php
    session_start();
    include("Database.php");

    $id = $_SESSION['UID'];

    $mysql = "SELECT lastname, firstname, email, homeaddress, bloodtype, nationality, pwd, emergencycontact, contactnumber FROM user WHERE id = ?";
    $stmt = $connect->prepare($mysql);
    $stmt->bind_param("i", $id);
    $stmt->execute();

    $result = $stmt->get_result();
    $row = $result->fetch_assoc();

    $connect->close();
?>

<html>
    <head>
        <title> User Profile - Resident </title>
        <link rel="stylesheet" href="FINALStyle.css">
    </head>
    <body>
        <?php
            include("Header.php");
        ?>
        <div>
            <img src = "Images/Profile-Pic.png" class = "Profile">
        </div>
        <?php if($row) { ?>
        <div class = "user-profile-resident">
            <h1 class = "LastName"> Last Name: </h1>
            <div class = "container-ln">
                <?php echo "<p class = 'UserValue-LN'>" .htmlspecialchars($row['lastname']). "</p>";?>
            </div>
            <h1 class = "FirstName"> First Name: </h1>
            <div class = "container-fn">
                <?php echo "<p class = 'UserValue-FN'>" .htmlspecialchars($row['firstname']). "</p>";?>
            </div>
            <h3 class = "EmailAddress"> Email Address: </h3>
            <div class = "container-ea">
                <?php echo "<p class = 'UserValue-EM'>" .htmlspecialchars($row['email']). "</p>"; ?>            
            </div>
            <h3 class = "Address"> Address: </h3> 
            <div class = "container-a">
                <?php echo "<p class = 'UserValue-ADD'>" .htmlspecialchars($row['homeaddress']). "</p>"; ?>
            </div>
            <h3 class = "BloodType"> Blood Type: </h3>
            <div class = "container-bt">
                <?php echo "<p class = 'UserValue-BT'>" .htmlspecialchars($row['bloodtype']). "</p>"; ?> 
            </div>
            <h3 class = "Nationality"> Nationality: </h3>
            <div class = "container-nt">
                <?php echo "<p class = 'UserValue-NAT'>" .htmlspecialchars($row['nationality']). "</p>"; ?>
            </div>
            <h3 class = "PWD"> PWD: </h3>
            <div class = "container-pwd">
                <?php echo "<p class = 'UserValue-PWD'>" .htmlspecialchars($row['pwd']). "</p>"; ?>
            </div>
            <h3 class = "ContactNumber"> Contact Number: </h3>
            <div class = "container-cn">
                <?php echo "<p class = 'UserValue-CN'>" .htmlspecialchars($row['contactnumber']). "</p>"; ?> 
            </div>
            <h3 class = "EmergencyContact"> Emergency Contact: </h3>
            <div class = "container-ec">
                <?php echo "<p class = 'UserValue-EC'>" .htmlspecialchars($row['emergencycontact']). "</p>";?> 
            </div>
         </div>
        <?php } ?>
    </body>
</html>