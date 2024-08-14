<?php

$host = "localhost";
$user = "root";
$pass = "";
$db = "agricul_farm";

$connection = mysqli_connect($host, $user, $pass, $db);

if (mysqli_connect_errno()) {
	die("Database Connection Failed" . mysqli_connect_error() . "(" . mysqli_connect_errno() . ")");
}

$conn = mysqli_connect($host, $user, $pass, $db);

function formatDate1($date)
{
	return date('Y-m-d', strtotime($date));
}

function formatDate2($date2)
{
	return date('g:i a', strtotime($date2));
}

function formatDate3($date3)
{
	return date('l', strtotime($date3));
}