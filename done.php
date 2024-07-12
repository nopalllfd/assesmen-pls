<?php
session_start();
?>
<html>
<link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css"
      integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N"
      crossorigin="anonymous"
    />
    <link rel="stylesheet" href="style.css">
    <div class="title-section mx-auto card text-center text-light bg-success ">
    <h1 class=" display-1 text-light">Assesmen Peserta PLS</h1>
    </div>
    <br><br>
    <div class="section-title text-center align-items-center justify-content-center align-center">
<section class="container mx-auto my-auto align-items-center align-center h-100 justify-content-center text-center align-items-center justify-content-center align-center">
<?php
include "connect.php";

$cek = "SELECT * FROM login where noreg = '$_SESSION[noreg]'";
$res = $db->query($cek);
while ($rs = $res->fetch_assoc()) {
  echo "<h1 style=font-weight:bold; class='mx-auto text-center display-4 '>". $rs['nama'] ."</h1>"; 
  echo "<br>";
}


$sel = "SELECT * FROM question where id_user='$_SESSION[noreg]'";
$res = $db->query($sel);
while ($data = $res->fetch_assoc()) {
    echo "<div class='container section-title justify-content-center align-center d-flex '>";
    echo "<h1 class='section-title display-3'>" . 'Anda masuk kedalam kelompok : <br><br> '."<span style=font-size:90px class='m-0 badge rounded-pill bg-success text-light'>". $data['res_minat'] ."</span>". "</h1>";
    echo "</div>";
    echo "<br>";
}


?>
                <h1 class="section-title">Terimakasih telah mengisi, pastikan anda mengingat hasil ini. </h1>

</section>
    </div>
    <script
      src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"
      integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
      crossorigin="anonymous"
    ></script>
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct"
      crossorigin="anonymous"
    ></script>
</html>
