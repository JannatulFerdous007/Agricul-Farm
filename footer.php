<script src="JS/jquery-3.6.1.min.js"></script>
<script src="JS/bootstrap.bundle.min.js"></script>
<script src="JS/u_custom.js"></script>
<!-- <script src="JS/owl.carousel.min.js"></script> -->
<!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script> -->
<script src="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/alertify.min.js"></script>
<!-- <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script> -->


<script>
  alertify.set('notifier', 'position', 'top-right');
  <?php
  if (isset($_SESSION['message'])) {
    ?>
        alertify.success('<?= $_SESSION['message']; ?>');
      <?php
      unset($_SESSION['message']);
  }
  ?>
</script>
</body>

</html>