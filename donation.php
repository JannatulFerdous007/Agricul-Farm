<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Donation</title>

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

<body>

    <!-- include header file -->
    <?php include("header.php") ?>


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
                        <h1 class="text-center" style="color:white;"> <b> Donate to </b> </h1>
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
                                        <div class="panel-heading">
                                            <h3 class="text-center" style="color:white;"> <b>Thought For Agricul Farm
                                                </b> </h3>
                                        </div>
                                        <br>
                                        <!-- body of the panel -->
                                        <div class="panel-body">
                                            <!-- user input sent to the server for processing through donation_db.php file in post mathod -->
                                            <form role="form" action="donation_db.php" method="POST"
                                                enctype="multipart/form-data">
                                                <!-- form for the users to fillup -->
                                                <div class="form-group">
                                                    <input type="text" class="form-control" name="name" id="name"
                                                        placeholder="Enter your name" required>
                                                    <small class="text-danger name"></small>
                                                </div>
                                                <div class="form-group">
                                                    <input type="email" class="form-control" name="email" id="email"
                                                        placeholder="Enter your email" required>
                                                    <small class="text-danger email"></small>
                                                </div>
                                                <div class="form-group">
                                                    <input type="number" class="form-control" name="amount" id="amount"
                                                        placeholder="Enter amount" required>
                                                    <small class="text-danger amount"></small>
                                                </div>
                                                <div class="form-group">
                                                    <input type="text" class="form-control" name="message" id="message"
                                                        placeholder="Enter your message">
                                                </div>
                                                <div id="paypal-button-container" class="mt-5"></div>
                                                <?php
                                                $amount = ['amount'];
                                                ?>
                                                <!-- submit button  -->
                                                <!-- <center><button type="submit" class="btn btn-danger">Donate</button></center> -->
                                                <center>
                                                    <!-- Set up a container element for the button --><br>

                                                </center>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

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

    <?php
    include 'footer.php';
    ?>

    <!-- Replace "test" with sandbox Business account app client ID -->
    <script
        src="https://www.paypal.com/sdk/js?client-id=ASeBvwx9DMoKk8bvgYwJf0229BM5IdlKzpNcvplP_DiZvxCZ2mlD_hZUgjbrTMwSL4v1hq0ox8LxIrve&currency=USD"></script>

    <script>
        paypal.Buttons({

            onClick() {
                var name = $('#name').val();
                var email = $('#email').val();
                var amount = $('#amount').val();
                var message = $('#message').val();

                if (name.length == 0) {
                    $('.name').text("*This field is required");
                } else {
                    $('.name').text("");
                }
                if (email.length == 0) {
                    $('.email').text("*This field is required");
                } else {
                    $('.email').text("");
                }
                if (amount.length == 0) {
                    $('.amount').text("*This field is required");
                } else {
                    $('.amount').text("");
                }

                if (name.length == 0 || email.length == 0 || amount.length == 0) {
                    return false;
                }

            },
            // Sets up the transaction when a payment button is clicked
            createOrder: (data, actions) => {
                return actions.order.create({
                    purchase_units: [{
                        amount: {
                            value: '1'
                        }
                    }]
                });
            },
            // Finalize the transaction after payer approval
            onApprove: (data, actions) => {
                return actions.order.capture().then(function (orderData) {
                    const transaction = orderData.purchase_units[0].payments.captures[0];

                    var name = $('#name').val();
                    var email = $('#email').val();
                    var amount = $('#amount').val();
                    var message = $('#message').val();

                    var data = {
                        'name': name,
                        'email': email,
                        'amount': amount,
                        'payment_mode': "Paid by Paypal",
                        'payment_id': transaction.id,
                        'message': message,
                        'donate_btn': true
                    };

                    $.ajax({
                        method: "POST",
                        url: "donation_db.php",
                        data: data,
                        success: function (response) {
                            if (response == 201) {
                                alertify.success('You donate successfully');
                                // actions.redirect('u_orders.php');
                                window.location.href = 'tnx.php';
                            }

                        }
                    });
                });
            }
        }).render('#paypal-button-container');
    </script>