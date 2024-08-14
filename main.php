<?php
include 'db.php';
$query = "SELECT * FROM questions";
$total_questions = mysqli_num_rows(mysqli_query($connection, $query));


?>
<html>

<head>
	<title>PHP Quizer</title>
	<link rel="stylesheet" type="text/css" href="css/quiz.css">
</head>

<body>

	<?php include("header.php") ?>


	<main>
		<div class="container" style="width: 40vw; height:20vw">
			<h2>
				<p style="color:white;font-size: 30px">Test Your Knowledge</p>
			</h2>
			<p>
			<p style="color:white;font-size: 20px">Agriculture Related Quiz</p>
			</p>
			<ul>
				<li><strong>Number of Questions:</strong>
					<?php echo $total_questions; ?>
				</li>
				<li><strong>Type:</strong> Multiple Choise</li>
				<li><strong>Estimated Time:</strong> <?php echo $total_questions * 1.5; ?></li>

			</ul>


		</div>
		&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;

		<a href="question.php?n=1" class="start">Start Quize</a>
	</main>


	<!--footer-->

	<section class="footer">

		<div class="footer-row">
			<img src="images/logo1.jpg" alt="">
			<div class="footer-col">
				<h1>Agricul Farm</h1>
				<p>Ius case noluisse iracundia ne, mei no possim- <br> offendit explicari. Vel ea nulla doming recteque.
				</p>
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