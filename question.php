<?php
include 'db.php';
session_start();
//Set Question Number
$number = $_GET['n'];

//Query for the Question
$query = "SELECT * FROM questions WHERE question_number = $number";

// Get the question
$result = mysqli_query($connection, $query);
$question = mysqli_fetch_assoc($result);

//Get Choices
$query = "SELECT * FROM options WHERE question_number = $number";
$choices = mysqli_query($connection, $query);
// Get Total questions
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
		<div class="container" style="width: 45vw; height:25vw">
			<div class="current">Question <?php echo $number; ?> of <?php echo $total_questions; ?> </div>
			<p class="question">
				<?php echo $question['question_text']; ?>
			</p>
			<form method="POST" action="process.php">
				<ul class="choicess">
					<?php while ($row = mysqli_fetch_assoc($choices)) { ?>
						<li><input type="radio" name="choice" value="<?php echo $row['id']; ?>">
							<?php echo $row['coption']; ?>
						</li>
						<?php } ?>


				</ul>
				<input type="hidden" name="number" value="<?php echo $number; ?>">
				<br>
				&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;

				<input type="submit" name="submit" value="Submit">


			</form>


		</div>
		&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;
		&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;
		&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;
		<a href="main.php?n=1" class="start">Back</a>
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