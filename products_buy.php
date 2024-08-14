<?php

@include 'config.php';

if (isset($_POST['add_to_cart'])) {

   $product_name = $_POST['product_name'];
   $product_price = $_POST['product_price'];
   $product_image = $_POST['product_image'];
   $product_quantity = 1;

   $select_cart = mysqli_query($conn, "SELECT * FROM `cart` WHERE name = '$product_name'");

   if (mysqli_num_rows($select_cart) > 0) {
      $message[] = 'product already added to cart';
   } else {
      $insert_product = mysqli_query($conn, "INSERT INTO `cart`(name, price, image, quantity) VALUES('$product_name', '$product_price', '$product_image', '$product_quantity')");
      $message[] = 'product added to cart succesfully';
   }

}

?>
<style>
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
<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>products</title>

   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/products_style_bcc.css">
   <link rel="stylesheet" href="css/p_style.css">
</head>

<body>

   <?php

   if (isset($message)) {
      foreach ($message as $message) {
         echo '<div class="message"><span>' . $message . '</span> <i class="fas fa-times" onclick="this.parentElement.style.display = `none`;"></i> </div>';
      }
      ;
   }
   ;

   ?>

   <!-- Header Start  -->
   <header class="header">

      <div class="flex">

         <a href="#" class="logo">Agricul Farm</a>

         <nav class="navbar">
            <a href="index.php">Home</a>
            <a href="products_buy.php">view products</a>
         </nav>

         <?php

         $select_rows = mysqli_query($conn, "SELECT * FROM `cart`") or die('query failed');
         $row_count = mysqli_num_rows($select_rows);

         ?>

         <a href="cart.php" class="cart">cart <span>
               <?php echo $row_count; ?>
            </span> </a>

         <div id="menu-btn" class="fas fa-bars"></div>

      </div>

   </header>
   <!-- Header End  -->

   <div class="container">

      <section class="products">

         <h1 class="heading">latest products</h1>

         <div class="box-container">

            <?php

            $select_products = mysqli_query($conn, "SELECT * FROM `products`");
            if (mysqli_num_rows($select_products) > 0) {
               while ($fetch_product = mysqli_fetch_assoc($select_products)) {
                  ?>

                  <form action="" method="post">
                     <div class="box">
                        <img src="uploaded_img/<?php echo $fetch_product['image']; ?>" alt="">
                        <h3>
                           <?php echo $fetch_product['name']; ?>
                        </h3>
                        <div class="price">$<?php echo $fetch_product['price']; ?>/-</div>
                        <input type="hidden" name="product_name" value="<?php echo $fetch_product['name']; ?>">
                        <input type="hidden" name="product_price" value="<?php echo $fetch_product['price']; ?>">
                        <input type="hidden" name="product_image" value="<?php echo $fetch_product['image']; ?>">
                        <input type="submit" class="btn" value="add to cart" name="add_to_cart">
                     </div>
                  </form>

                  <?php
               }
               ;
            }
            ;
            ?>

         </div>

      </section>

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

   <script type="text/javascript">
      // Initialize Variables
      var closePopup = document.getElementById("popupclose");
      var overlay = document.getElementById("overlay");
      var popup = document.getElementById("popup");
      var button = document.getElementById("button");
      // Close Popup Event
      closePopup.onclick = function () {
         overlay.style.display = 'none';
         popup.style.display = 'none';
      };
      // Show Overlay and Popup
      button.onclick = function () {
         overlay.style.display = 'block';
         popup.style.display = 'block';
      }
   </script>

</body>

</html>