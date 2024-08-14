<?php

include "ins_logic.php";
include "admin_page.php";


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"
        integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap"
        rel="stylesheet">
    <title>Agricul Farm</title>
</head>
<style media="screen">
    body {
        padding: 0px;
        margin: 0px;
    }

    ul {

        list-style-type: none;
        background-color: #0f8d39;
        width: 100%;
        height: 50px;
        margin-top: 0px;

    }

    li {
        float: left;
        margin-left: 30px;
        margin-top: 15px;
    }

    li:hover {
        opacity: 0.8;
    }

    a {
        text-decoration: none;
        color: white;
        font-size: 20px;
        font-weight: bold;
    }

    /*footer*/

    .footer {
        min-height: 25vh;
        width: 100%;
        background-color: #0f8d39;
        margin-top: 20px;
        color: white;
    }

    .footer p {
        color: #fff;
        text-align: left;
    }

    .footer-row {
        display: flex;
        position: relative;
        justify-content: space-between;
        margin-top: 20px;
    }

    .footer-col {
        width: 80%;
        margin-top: 40px;
        margin-left: 1%;
        position: relative;
        overflow: hidden;
    }

    .footer-row img {
        margin-top: 1.5%;
        margin-left: 10%;
        display: flex;
        width: 5%;
        height: 5%;
        border-radius: 200px;
    }
</style>

<body>
    <br><br>
    <div class="container mt-5">
        <form method="POST">
            <input type="text" placeholder="Title" class="form-control my-3 bg-submit text-white text-center"
                name="title">
            <textarea name="content" class="form-control my-3 bg-light text-white" cols="30" rows="10"></textarea>
            <center>
            <button class="btn btn-light" name="new_post">Add Post</button>
</center>
        </form>
    </div>
    <br><br><br>

    <!-- Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"
        integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN"
        crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"
        integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV"
        crossorigin="anonymous"></script>

</body>

</html>