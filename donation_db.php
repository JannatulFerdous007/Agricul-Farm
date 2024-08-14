<?php
// create connection with MySQL server
$conn = mysqli_connect('localhost', 'root');

// check connection
if ($conn) {
    echo "Connection successful";

} else {
    echo "No Connection";
}

// select database for the connection
mysqli_select_db($conn, 'agricul_farm');

// user input ids = POST attribute of contact
if (isset($_POST['donate_btn'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $amount = $_POST['amount'];
    $payment_mode = $_POST['payment_mode'];
    $payment_id = $_POST['payment_id'];
    $message = $_POST['message'];

    // insert data into donate table 
    $query = "insert into donate (name, email, amount, payment_mode, payment_id, message) values('$name', '$email', '$amount', '$payment_mode', '$payment_id', '$message')";

    // executes the given query on selected database
    mysqli_query($conn, $query);

    // after successfully send the msg, go back to home page 
    header('location:tnx.php');
}