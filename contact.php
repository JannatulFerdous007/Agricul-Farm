<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact</title>

    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.min.css">
    <!-- <link href="css/bootstrap.min.css" rel="stylesheet"> -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="home_style.css">

    
    <!-- style body with img -->
    <style>
        body {
            background-color: azure;
        }
    </style>
</head>

<body>
    <?php include 'header2.php' ?>

    <!-- include header file -->

    <!-- sets a max-width -->
    <div class="container">
        <!-- make horizontal layout to contain column -->
        <div class="row">
            &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;
            <!-- use 10 sm column out of 12 -->
            <div class="col-sm-12"> &emsp;&emsp;
                <!-- use panel info type -->
                <div class="panel panel-info">
                    <!-- add text on the center in heading of the panel  -->
                    <div class="panel-heading">
                        <h1 class="text-center"> <b> Contact Us </b> </h1>
                    </div>
                    <!-- body of the panel -->
                    <div class="panel-body">
                        <!-- sets a max-width -->
                        <div class="container">
                            <!-- make horizontal layout to contain column -->
                            <div class="row">
                                &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;
                                <!-- use 6 sm column out of 12 -->
                                <div class="col-sm-8">
                                    <br> <br>
                                    <!-- use panel primary type -->
                                    <div class="panel panel-success">
                                        <!-- add text on in heading of the panel  -->
                                        <div class="panel-heading">
                                            <h3> <i> Fillup the form for any query. Thank you! </i> </h3>
                                        </div>
                                        <!-- body of the panel -->
                                        <div class="panel-body">
                                            <!-- user input sent to the server for processing through contactDB.php file in post mathod -->
                                            <form role="form" action="contactDB.php" method="POST">
                                                <!-- form for the users to fillup -->
                                                <div class="form-group">
                                                    <input type="text" class="form-control" name="user" id="user"
                                                        placeholder="Enter your name">
                                                </div>
                                                <div class="form-group">
                                                    <input type="email" class="form-control" name="email" id="email"
                                                        placeholder="Enter your email">
                                                </div>
                                                <div class="form-group">
                                                    <input type="text" class="form-control" name="mobile" id="mobile"
                                                        placeholder="Enter your mobile number">
                                                </div>
                                                <div class="form-group">
                                                    <input type="text" class="form-control" name="comment" id="comment"
                                                        placeholder="Enter your message">
                                                </div>
                                                <!-- submit button  -->
                                                <center><button type="submit" class="btn btn-danger">Send
                                                        Message</button></center>
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

</body>

</html>