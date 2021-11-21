<?php
session_start();
require('http/db.php');
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Import -->
  <?php include 'components/Head.php' ?>
</head>


<body>
  <!-- modal -->
  <?php include 'components/confirmModal.php'; ?>
  <!-- Header -->
  <?php include 'views/Header.php'; ?>
  <!-- Banner -->
  <?php include 'views/Banner.php'; ?>
  <!-- Main -->
  <?php include 'views/Main.php'; ?>
  <!-- Footer -->
  <?php include 'views/Footer.php'; ?>
  <!-- Arrow scroll top -->
  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>
  <!-- Script -->
  <?php include 'components/Script.php'; ?>
  <!-- controller -->
  <script src="controller/form.js"></script>

  <!-- close -->
  <script src="controller/main.js"></script>
  <script>
    <?php
    if (isset($_SESSION["save"])) {
      $ID_FR = isset($_SESSION["idCard"]) ? $_SESSION["idCard"] : '';
      $queryTotalVat = "SELECT sum FROM cal WHERE ID_FR = '" . $ID_FR . "'";
      $resultTotalVat = $conn->query($queryTotalVat);
      $totalVat = 0;
      if ($resultTotalVat->num_rows > 0) {
        $rowTotalVat = $resultTotalVat->fetch_assoc();
        $totalVat = $rowTotalVat["sum"];
      }
    ?>
      alert("บันทึกแล้วเรียบร้อย ภาษีคืนฉันซิปัจจุบัน <?php echo number_format($totalVat); ?> บาท");
    <?php
      unset($_SESSION["save"]);
    }
    ?>
  </script>
</body>

</html>