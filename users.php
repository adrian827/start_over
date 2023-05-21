<!DOCTYPE html>
<html>
<head>
    <title>Celebrity Match Maker</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Limelight&family=Poiret+One&display=swap" rel="stylesheet">
    <style>
    <?php include "css/styles.css"; ?>
    </style>
</head>
<body>
<?php require "includes/header.php"; ?>


        <?php 
        require('mysqli_connect.php');
        echo "<h2 id='users'>Celebrity Users</h2>";
        $query = "SELECT * FROM USER ORDER BY username";
        $result = mysqli_query($connection, $query);

        ##echo "<table><thead><td class='center'>ID</td><td>Username</td><td>Email</td><td>First Name</td><td>Last Name</td><td>Birth Date</td><td>Location</td><td>Profile Pic</td></thead>";
        echo "<div class='grid-container'>";
        while ($row = mysqli_fetch_assoc($result)) {
            echo "<div class='grid-item'>" . $row['profile_img'] . "<br>" . $row['first_name'] . " " . $row['last_name'] . "<br>" . $row['location'] . "</div>";
            ##echo "<tr><td class='center'>" . $row['user_id'] . "</td><td>" . $row['username'] . "</td><td>" . $row['email_address'] . "</td><td>" . $row['first_name'] . "</td><td>" . $row['last_name'] . "</td><td>" . $row['birth_date'] . "</td><td>" . $row['location'] . "</td><td>" . $row['profile_img'] . "</td></tr>";
        
        }
        echo "</div>";
        ##echo "</table>";

        ?>
        

        <?php require "includes/footer.php"; ?>
</body>
</html>