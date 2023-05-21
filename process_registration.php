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
        <?php 
        require('mysqli_connect.php');
        $username = $_POST['username'];
        $email_address = $_POST['email_address'];
        $first_name = $_POST['first_name'];
        $last_name = $_POST['last_name'];
        $password = $_POST['password'];
        $birth_date = $_POST['birth_date'];
        $location = $_POST['location'];
        $profile_img = $_POST['profile_img'];



        $q = "INSERT INTO USER (username, email_address, first_name, last_name, password, birth_date, location, profile_img)
        VALUES ('$username', '$email_address', '$first_name', '$last_name', '$password', '$birth_date', '$location', '$profile_img' )";
        $r = @mysqli_query($connection, $q);

        if ($r) { // If it ran OK.
            echo "<p>You are now registered with our system. Please browse localhost phpMyAdmin to view updated data.</p>";
            }
          else { // if there was an error and it did not run correctly show the error message from the system
            echo "<p>An error occurred. " . mysqli_error($connection) . "</p>";
          }
          mysqli_close($connection);
        
        ?>
        <?php # Script 11.2 - upload_image.php

// Check if the form has been submitted:
if ($_SERVER['REQUEST_METHOD'] == 'POST') {

	// Check for an uploaded file:
	if (isset($_FILES['profile_img'])) {

		// Validate the type. Should be JPEG or PNG.
		$allowed = ['image/pjpeg', 'image/jpeg', 'image/JPG', 'image/X-PNG', 'image/PNG', 'image/png', 'image/x-png'];
		if (in_array($_FILES['profile_img']['type'], $allowed)) {

			// Move the file over.
			if (move_uploaded_file ($_FILES['profile_img']['tmp_name'], "uploads/{$_FILES['profile_img']['name']}")) {
				echo '<p><em>The file has been uploaded!</em></p>';
			} // End of move... IF.

		} else { // Invalid type.
			echo '<p class="error">Please upload a JPEG or PNG image.</p>';
		}

	} // End of isset($_FILES['upload']) IF.

	// Check for an error:
	if ($_FILES['profile_img']['error'] > 0) {
		echo '<p class="error">The file could not be uploaded because: <strong>';

		// Print a message based upon the error.
		switch ($_FILES['profile_img']['error']) {
			case 1:
				print 'The file exceeds the upload_max_filesize setting in php.ini.';
				break;
			case 2:
				print 'The file exceeds the MAX_FILE_SIZE setting in the HTML form.';
				break;
			case 3:
				print 'The file was only partially uploaded.';
				break;
			case 4:
				print 'No file was uploaded.';
				break;
			case 6:
				print 'No temporary folder was available.';
				break;
			case 7:
				print 'Unable to write to the disk.';
				break;
			case 8:
				print 'File upload stopped.';
				break;
			default:
				print 'A system error occurred.';
				break;
		} // End of switch.

		print '</strong></p>';

	} // End of error IF.

	// Delete the file if it still exists:
	if (file_exists ($_FILES['profile_img']['tmp_name']) && is_file($_FILES['profile_img']['tmp_name']) ) {
		unlink ($_FILES['profile_img']['tmp_name']);
	}

} // End of the submitted conditional.
?>
        <hr>
        <a id="ulink" href='/start_over/users.php'>Check Out Current Users</a>
        </main>
        </body>
        <?php require "includes/footer.php"; ?>
</html>
