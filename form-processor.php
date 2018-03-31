<?php
	// step 1: create a database connection
	$dbhost = '66.147.242.186';
	$dbuser = "urcscon3_granad";
	$dbpass = "coffee1N";
	$dbname = "urcscon3_granad";
	$connection = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);

	// you really should escape all strings
	$fname = Trim(stripslashes($_POST['fname']));
	$lname = Trim(stripslashes($_POST['lname']));
	$email = Trim(stripslashes($_POST['email']));
	$major = $_POST['major'];
	$textarea = Trim(stripslashes($_POST['textarea'])); 


	// step2: Perform a Database Query
	$query = "INSERT INTO urcscon3_granad (fname, lname, email, major, textarea) VALUES ('$fname', '$lname', '$email', '$major', '$textarea')";
	$result = mysqli_query($connection, $query);
?>

<?php include "inc/html-top.inc"; ?>

	<body>
		<header>

		</header>
			<div class="container">
				
				<?php
					if ($result) {
						echo "Success! The query did not error out";
					} else {
						die ("Database query failed!");}
 				?>

			<section>
				
				<h2>Thank You!</h2>

				<p>To go back, click:</p>
				<a class="Home Page" href = "index.php">Here</a>

			</section>

	</div>
	</body>
</html>
<?php
// Step4: Release returned data (if any) - do not need in this case
// mysqli_free_result($result);

// Step5: Close the Connection to the Database
mysqli_close($connection);
?>
