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

    <main>
    <form enctype="multipart/form-data" method="POST" action="/start_over/process_registration.php">
    <input type="hidden" name="MAX_FILE_SIZE" value="750000">
    <fieldset>
        <h2>Find Your Match</h2>
        <blockquote>Where celebrity singles meet</blockquote>
        <hr>
        <label id="username-label">Create Username: <input type="text" name="username" id="username" placeholder="jsmith" required /></label><br> 
        <br><label id="email-label">E-Mail Address: <input type="email" name="email_address" id="email_address" placeholder="jd123@abc.com" required /></label><br> 
        <br><label id="name-label">First Name: <input type="text" name="first_name" id="first_name" placeholder="John" required /></label><br>
        <br><label id="name-label">Last Name: <input type="text" name="last_name" id="last_name" placeholder="Smith" required /></label><br>
        <br><label id="password">Create Password: <input type="password" name="password" id="password" placeholder="12345" required /></label><br>
        <br><label id="birthdate">Enter Birthdate: <input type="date" name="birth_date" id="birth_date" placeholder="1994-08-27" required /></label><br>
        <br><label id="location">Current State: <input type="text" name="location" id="location" placeholder="CA" required /></label><br>
        <br><label id="profile_img">Profile Pic: <input type="file" name="profile_img" id="profile_img" /></label><br>
        <br><input type="submit" value="Submit" id="submit">
    </fieldset>
      </form>
</main>
<?php require('mysqli_connect.php'); ?>
</body>
<?php require "includes/footer.php"; ?>
</html>
