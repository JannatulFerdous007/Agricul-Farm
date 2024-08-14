<?php include 'db.php';
if (isset($_POST['submit'])) {
	$question_number = $_POST['question_number'];
	$question_text = $_POST['question_text'];
	$correct_choice = $_POST['correct_choice'];
	// Choice Array
	$choice = array();
	$choice[1] = $_POST['choice1'];
	$choice[2] = $_POST['choice2'];
	$choice[3] = $_POST['choice3'];
	$choice[4] = $_POST['choice4'];
	$choice[5] = $_POST['choice5'];

	// First Query for Questions Table

	$query = "INSERT INTO questions (";
	$query .= "question_number, question_text )";
	$query .= "VALUES (";
	$query .= " '{$question_number}','{$question_text}' ";
	$query .= ")";

	$result = mysqli_query($connection, $query);

	//Validate First Query
	if ($result) {
		foreach ($choice as $option => $value) {
			if ($value != "") {
				if ($correct_choice == $option) {
					$is_correct = 1;
				} else {
					$is_correct = 0;
				}



				//Second Query for Choices Table
				$query = "INSERT INTO options (";
				$query .= "question_number,is_correct,coption)";
				$query .= " VALUES (";
				$query .= "'{$question_number}','{$is_correct}','{$value}' ";
				$query .= ")";

				$insert_row = mysqli_query($connection, $query);
				// Validate Insertion of Choices

				if ($insert_row) {
					continue;
				} else {
					die("2nd Query for Choices could not be executed" . $query);
				}
			}
		}
		$message = "Question has been added successfully";
	}
}

$query = "SELECT * FROM questions";
$questions = mysqli_query($connection, $query);
$total = mysqli_num_rows($questions);
$next = $total + 1;


?>
<html>

<head>
	<title>Agricul Farm</title>
	<link rel="stylesheet" type="text/css" href="css/quiz.css">
</head>

<body>
	<?php include("header.php") ?>


	<main>
		<div class="container" style="width: 50vw; height:50vw">

			<h2 style="color:white">Add A Question</h2>
			<?php if (isset($message)) {
			echo "<h4>" . $message . "</h4>";
		} ?>

			<form method="POST" action="add.php">
				<p>
					<label style="color:white">Question Number:</label>
					<input type="number" name="question_number" value="<?php echo $next; ?>">
				</p>
				<p>
					<label style="color:white">Question Text:</label>
					<input type="text" name="question_text">
				</p>
				<p>
					<label style="color:white">Choice 1:</label>
					<input type="text" name="choice1">
				</p>
				<p>
					<label style="color:white">Choice 2:</label>
					<input type="text" name="choice2">
				</p>
				<p>
					<label style="color:white">Choice 3:</label>
					<input type="text" name="choice3">
				</p>
				<p>
					<label style="color:white">Choice 4:</label>
					<input type="text" name="choice4">
				</p>
				<p>
					<label style="color:white">Choice 5:</label>
					<input type="text" name="choice5">
				</p>
				<p>
					<label style="color:white">Correct Option Number</label>
					<input type="number" name="correct_choice">
				</p>
				<br>
				&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;

				<input type="submit" name="submit" value="submit">


			</form>
		</div>
		&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;
		&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;
		&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;
		<a href="q_index.php?n=1" class="start">Back</a>

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