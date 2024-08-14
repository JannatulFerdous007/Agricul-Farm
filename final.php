<?php

session_start();

?>

<html>

<head>
	<title>PHP Quizer</title>
	<link rel="stylesheet" type="text/css" href="css/quiz.css">
</head>

<body>

	<?php include("header.php") ?>

	<main>
		<div class="container" style="width: 45vw; height:25vw">

			<h2 style="color:white">Your Result</h2>
			<p style="color:white">Congratulation You have completed this test succesfully.</p>
			<p style="color:white">Your <strong>Score</strong> is <?php echo $_SESSION['score']; ?> </p>
			<?php unset($_SESSION['score']); ?>

		</div>

	</main>
</body>
<!--footer-->

<section class="footer">

	<div class="footer-row">
		<img src="images/logo1.jpg" alt="">
		<div class="footer-col">
			<h1>Agricul Farm</h1>
			<p>Ius case noluisse iracundia ne, mei no possim- <br> offendit explicari. Vel ea nulla doming recteque.</p>
		</div>

		<div class="footer-col">
			<h2>Contact Us</h2>
			<p>Address: 5611 Wellington Road,<br> Suite 115, Gainesville, VA 20155</p>
			<p>Tell: 800 853 6429</p>
			<p>email@example.com</p>


		</div>

		<div class="footer-col">
			<h2>Usefull Links</h2>
			<p>About Us</p>
			<p>Services</p>
			<p>News</p>
			<p>Career</p>
		</div>

		<div class="footer-col">
			<h2>Social Media</h2>
			<p>Twitter</p>
			<p>Facebook</p>
			<p>Instragram</p>
		</div>


	</div>



</section>

</html>