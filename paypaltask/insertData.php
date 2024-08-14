<?php
session_start();

// Include database connection file 
include_once 'dbConnect.php';

$amount = $_GET['amount'];
$item = $_GET['item'];
$status = "pending";

$insert = $db->query("INSERT INTO product(id, price, item) VALUES('" . $item . "','" . $amount . "','" . $item . "')");
$last_id = $db->insert_id;

$_SESSION['product_id'] = $last_id;