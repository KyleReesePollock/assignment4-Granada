<!-- include html top for links and doctype -->
<?php include "inc/html-top.inc";?>

	<body>
		<!--header-->

		<!-- navigation bar-->

		<section class = "banner">
            <?php include "inc/header.inc"; ?>
            <?php include "inc/nav.inc"; ?>
        </section>

		<!--Slider-->

		<div class= "container" style="z-index: 1;">


		<div class = "slider" style="z-index: -1;"> <!--slider of images of place where each person is from-->
        	<img src="images/xiao.jpg" alt="Xiao">
			<img src="images/jimmy.jpg" alt="Jimmy">
			<img src="images/zubair.jpg" alt="Zubair">
			<img src="images/oliver.jpg" alt="Oliver">
		</div>

		<article> <!-- Article-->
		
		<h2>Xiao Cheng</h2> <!--Image-->
			<figure> 
				<img src="images/xiao.jpg" alt="Xiao Cheng">
				<figcaption>Xiao Cheng</figcaption>
			</figure>
			<p>My name is Xiao Cheng, and my friends all call me Katherine/Kat. I am currently studying at the University of Rochester, majoring in Computer Science and minoring in Philosophy. Comparing to other CS students, my progress is kind of slower, because I transferred to this major in my Sophomore year. Originally, I was considering majoring in Audio and Music Engineering. The reasons why I changed my major were complicated, but mostly because AME was not something I thought it would be. After taking several CS classes, I realized that I am really interested in UI/UX design, 3D modeling, game design, and front-end stuffs. I enjoy seeing the beautiful results that my work turned out to be. I guess I am more of a visual person anyways. <a class="readmore" href = "xiao.php">Read More </a></p>

		<h2>Jimmy Yang</h2>
			<figure> 
				<img src="images/jimmy.jpg" alt="Jimmy Yang">
				<figcaption>Jimmy Yang</figcaption>
			</figure>
			<p>Hello! My name is Jimmy Yang. I am a sophomore and I am double majoring in Economics and Global Perspectives History. I am from a quaint small town called Fargo, ND.<a class="readmore" href = "jimmy.php"> Read More</a></p>

		<h2>Zubair Aziz</h2>
			<figure> 
				<img src="images/zubair.jpg" alt="Zubair Aziz">
				<figcaption>Zubair Aziz</figcaption>
			</figure>
			<p>I am currently a junior, anticipated to graduate in May, 2019. I started off my first year in college majoring in Economics. I had the privilege to enroll in some interesting courses in the department, such as Sports Economics, where we tested out various economic theories in a sports setting, and Econometrics where students are taught how to use the tools that enable us to extract useful information about important economic policy from a set of available data.<a class="readmore" href = "zubair.php"> Read More</a></p>

			<h2>Oliver Striker</h2>
			<figure> 
				<img src="images/oliver.jpg" alt="Oliver Stricker">
				<figcaption>Oliver Stricker</figcaption>
			</figure>
			<p>My name is Oliver Ostriker and I am a junior at the University of Rochester majoring in Financial Economics with minors in both Business and Computer Science. I am originally from Greenwich, Connecticut where I attended Greenwich High School. In High School, I really enjoyed an AP Economics course that I took, and therefore decided I wanted to major in something economics related. Because of this, I came across the University of Rochester which happened to have an incredible economics program. In addition, I had an uncle who lived in Rochester and a sister attending the school, so overall the U of R seemed like a great fit.<a class="readmore" href = "oliver.php"> Read More</a></p>
		</article>

		<!--Aside-->
	<?php include "inc/footer.inc"; ?>
		</div> <!--.container -->
		<?php include "inc/scripts.inc"; ?>
	</body>

		<!--Include footer and js-->
	</body>
</html>