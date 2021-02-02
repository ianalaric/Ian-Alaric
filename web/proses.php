<html> 
<head> 
  <meta charset="utf-8"> 
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <link rel="stylesheet" href="assets/css/bootstrap.css"> 
</head> 
<body> 
  
  <?php
  include "koneksi.php";

  $namalengkap  = $_REQUEST['namalengkap'];
  $email  = $_REQUEST['email'];
  $pesan  = $_REQUEST['pesan'];
  $mysqli  = "INSERT INTO list (namalengkap, email, pesan) VALUES ('$namalengkap', '$email','$pesan')";
  $result  = mysqli_query($conn, $mysqli);

  if ($result) {
    echo "Input berhasil"; exit;
  } else {
    echo "Input gagal"; exit;
  }

  mysqli_close($conn);
?>

  <script src="assets/js/jquery.js"></script> 
  <script src="assets/js/popper.js"></script> 
  <script src="assets/js/bootstrap.js"></script>

</body> 
</html>