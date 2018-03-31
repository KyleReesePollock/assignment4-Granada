<!-- include html top for links and doctype -->
<?php include "inc/html-top.inc";?>

	<body>
		<!--header-->

		<!-- navigation bar-->

		<section class = "banner">
            <?php include "inc/header.inc"; ?>
            <?php include "inc/nav.inc"; ?>
        </section>

    	<div class="container">

			<article>
				<h2>Let Us Know!</h2>
					<form action="form-processor.php" method="post">
						<label class="fixed" for="fname">First Name:</label>
  						<input type="text" name="fname" id="fname"><br>
  						<label class="fixed" for="lname">Last name:</label>
					  	<input type="text" name="lname" id="lname"><br>
					  	<label class="fixed" for="email">Email: </label>
					  	<input type="email" name="email" id="email"><br>

					<fieldset>
						<legend><h3>What is your major? </h3></legend>
							<input type="radio" name="major" id="Economics" value="Economics">
							<label for="Economics">Economics?</label>
							<input type="radio" name="major" id="ComputerScience" value="ComputerScience">
							<label for="ComputerScience">Computer Science?</label>
							<input type="radio" name="major" id="Neither" value="Neither">
							<label for="Neither">Neither?</label>
							<label for="textarea">Enter your major if neither?</label>
							<textarea name="textarea" cols="50" rows="8" id="textarea">
							</textarea>
					</fieldset>
					<input type="submit" value="Submit">
					</form>

			</article>

		<?php include "inc/footer.inc"; ?>

			</div>
		<?php include "inc/scripts.inc";?>
	</body>
</html>