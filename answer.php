
<html>
  <body class="text-center">

 <div class="title-section mx-auto card text-center text-light bg-success ">
    <h1 class=" display-1 text-light">Assesmen Peserta PLS</h1>
    </div>
    <br><br>
  
<?php
    session_start();
        
    session_destroy();

    include "connect.php";
   
  


    $cek = "SELECT * FROM login where noreg = '$_SESSION[noreg]'";
    $res = $db->query($cek);
    while ($rs = $res->fetch_assoc()) {
      echo "<h1 style=font-weight:bold; class='mx-auto text-center display-4'>". $rs['nama'] ."</h1>"; 
      echo "<br>";
    }
    
 
    
$cek = $db->query("SELECT * FROM question WHERE id_user = '$_SESSION[noreg]'");


        if($_SESSION['result']=="yes"){
            while($data = $cek->fetch_assoc()){
            // echo "<h1 class='section-title'>".  $_GET['msg']. "</h1>";
            echo "<div class='container section-title justify-content-center align-center d-flex '>";
            echo "<h1 class='section-title display-3'>" . 'Anda masuk kedalam kelompok : <br><br> '."<span style=font-size:90px class='m-0 badge rounded-pill bg-success text-light'>". $data['res_minat'] ."</span>". "</h1>";
            echo "</div>";
            echo "<br>";

            // session_abort();
            }
            } else {
                header("Location: index.php");
                session_destroy();
            
        }
            
                ?>
                </body>
                </html>
                <html>
                <link
                  rel="stylesheet"
                  href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css"
                  integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N"
                  crossorigin="anonymous"
                />
                
                <h1 class="section-title">Terimakasih telah mengisi, pastikan anda mengingat hasil ini. </h1>
            </html>

            <html>
<link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css"
      integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N"
      crossorigin="anonymous"
    />
    <link rel="stylesheet" href="style.css">
<div class="cr fixed-bottom text-center">
Aplikasi dibuat oleh Tim Mentor SKAWAN
<br>
<span class="text-muted small">© Muhammad Naufal Fadhilah</span>

</div>
</html>