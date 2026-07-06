<?php
session_start();
include("Database.php");

$error = "";

if (isset($_SESSION['UID'])) {
    header("Location: Dashboard.php");
    exit();
};

if (isset($_POST["login"])) {

    $email = trim($_POST["email"]);
    $password = trim($_POST["password"]);

    $sql = "SELECT * FROM user WHERE email = ?";
    $stmt = $connect->prepare($sql);
    $stmt->bind_param("s", $email);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows == 1) {

        $user = $result->fetch_assoc();

        // For plain text passwords
        if ($password === $user['password']) {

            $_SESSION['UID'] = $user['id'];
            $_SESSION['FNAME'] = $user['firstname'];
            $_SESSION['LNAME'] = $user['lastname'];

            header("Location: Dashboard.php");
            exit();
        } else {
            $error = "Incorrect Password!";
        }

    } else {
        $error = "Email not found!";
    }

    $stmt->close();
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>BarangayCentral - Welcome</title>

    <style>
        @import url('https://fonts.googleapis.com/css2?family=Bebas+Neue&family=Oleo+Script:wght@400;700&family=Oswald:wght@200..700&family=Playfair:ital,opsz,wght@0,5..1200,300..900;1,5..1200,300..900&display=swap');

        body{
            background-color: gray;
        }

        .welcome-box{
            color: gray;
            background-color: white;
            height: 500px;
            width: 300px;
            right: 525px;
            top: 60px;
            position: absolute;
            font-style: italic;
            font-weight: bold;
            box-shadow: 0px 4px 8px black;
        }

        .welcome-title{
            position: absolute;
            top: 50px;
            left: 500px;
        }

        .welcome-input-user{
            position: absolute;
            top: 300px;
            left: 60px;
        }

        .six7{
            position: absolute;
            font-family: sans-serif;
            font-size: 10px;
            top: 150px;
            color: gray;
            left: -440px;
            font-style: normal;
        }

        .BgyCent{
            position: absolute;
            font-family: 'Playfair', serif;
            top: 100px;
            color: gray;
            font-size: 35px;
            left: -475px;
        }

        .BGYLOGOS{
            position: absolute;
            top: 25px;
            left: -455px;
            width: 208px;
            height: 94px;
        }

        .input-user,
        .input-pass{
            border-radius: 5px;
            border: 1px solid black;
            height: 35px;
            width: 225px;
            left: -25px;
            position: absolute;
            font-family: 'Playfair', serif;
            padding-left: 10px;
        }

        .input-user{
            top: -25px;
        }

        .input-pass{
            top: 25px;
        }

        .login-button{
            position: absolute;
            top: 75px;
            left: 50px;
            color: white;
            background-color: gray;
            border: none;
            padding: 10px 20px;
            border-radius: 5px;
            cursor: pointer;
            font-family: 'Playfair', serif;
        }

        .login-button:hover{
            background-color: black;
        }

        .signup-banner{
            position: absolute;
            top: 425px;
            left: 50px;
            font-size: 12px;
        }

        .error{
            position: absolute;
            top: 115px;
            left: -35px;
            width: 250px;
            color: red;
            font-size: 13px;
            text-align: center;
        }
    </style>
</head>

<body>

<div class="welcome-box">

    <div class="welcome-title">
        <h1 class="BgyCent">BarangayCentral</h1>
        <h3 class="six7">In Partnership with Barangay Six Seven</h3>
        <img src="Images/BrgyLOGO.png" class="BGYLOGOS">
    </div>

    <div class="welcome-input-user">

        <?php
        if($error != ""){
            echo "<div class='error'>$error</div>";
        }
        ?>

        <form action="" method="POST">
            <input type="email" name="email" class="input-user" placeholder="Enter your email address" required>
            <input type="password" name="password" class="input-pass" placeholder="Enter your password" required>
            <button type="submit" name="login" class="login-button"> Login </button>
        </form>

    </div>

    <div class="signup-banner">
        <h3>Don't have an account? <a href="Register.php">Sign Up</a></h3>
    </div>

</div>

</body>
</html>