<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Agricul Farm</title>

    <!-- link font-awsome css & bootstrap files-->
    <!-- <link rel="stylesheet" href="css/style.css"> -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <!-- alertify js -->
    <link rel="stylesheet" href="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/css/alertify.min.css" />
    <!-- Bootstrap theme -->
    <link rel="stylesheet" href="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/css/themes/bootstrap.min.css" />

    <!-- <link href="css/bootstrap.min.css" rel="stylesheet"> -->

    <!-- style body with img -->
    <style>
        body {
            /* background-image: url('img/bg23.jpg');
            background-size: cover; */
            background-color: white;
        }
    </style>
</head>

<?php
// Include configuration file 
include_once 'config.php';

// Include database connection file 
include_once 'dbConnect.php';
?>
<!-- sets a max-width -->
<div class="container" style="border: 2px solid black; background:#4CAF50; padding:60px; margin:80px;">
    <!-- make horizontal layout to contain column -->
    <div class="row">
        &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;
        <!-- use 10 sm column out of 12 -->
        <div class="col-sm-10">&emsp;&emsp;
            <!-- use panel info type -->
            <div class="panel panel-info">
                <!-- add text on the center in heading of the panel  -->
                <div class="panel-heading">
                    <h1 class="text-center" style="color:white;"> <b> Payment details </b> </h1>
                </div>
                <!-- body of the panel -->
                <div class="panel-body">
                    <!-- sets a max-width -->
                    <div class="container">
                        <!-- make horizontal layout to contain column -->
                        <div class="row">
                            &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;
                            <!-- use 6 sm column out of 12 -->
                            <div class="col-sm-6">
                                <!-- use panel primary type -->
                                <div class="panel panel-primary">
                                    <!-- add text on in heading of the panel  -->
                                    <br>
                                        <form action="<?php echo PAYPAL_URL; ?>" method="post" id="paypal_form">
                                            <input type="hidden" name="business" value="<?php echo PAYPAL_ID; ?>">

                                            <!-- Important For PayPal Checkout -->
                                            <label>Enter Product Name</label>
                                            <input type="text" class="form-control" name="item_name" id="item"
                                                required>
                                            <label>Enter Price</label>
                                            <input type="number" class="form-control" required="" name="amount"
                                                id="amount">
                                            <input type="hidden" name="currency_code"
                                                value="<?php echo PAYPAL_CURRENCY; ?>">

                                            <!-- Specify a Buy Now button. -->
                                            <input type="hidden" name="cmd" value="_xclick">
                                            <!-- Specify URLs -->
                                            <input type="hidden" name="return" value="<?php echo PAYPAL_RETURN_URL; ?>">
                                            <input type="hidden" name="cancel_return"
                                                value="<?php echo PAYPAL_CANCEL_URL; ?>">
                                                <br>
                                                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;
                                            <!-- Display the payment button. -->
                                            <input type="submit" name="submit" border="0" value="Pay Now">
                                        </form>

                                        <script type="text/javascript">
                                            jQuery(document).ready(function () {
                                                jQuery("#paypal_form").submit(function () {
                                                    setData(jQuery("#amount").val(), jQuery("#item").val());
                                                });
                                                function setData(amount, item) {
                                                    var xhttp = new XMLHttpRequest();
                                                    xhttp.onreadystatechange = function () {

                                                    };
                                                    xhttp.open("GET", "insertData.php?amount=" + amount + "&item=" + item, true);
                                                    xhttp.send();
                                                }
                                            });
                                        </script>