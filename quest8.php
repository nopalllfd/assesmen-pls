<?php
session_start();
?>
<html>
<div class="title-section mx-auto card text-center text-light bg-secondary ">
        <h1 class=" display-1 text-light">Assesmen Peserta PLS</h1>
    </div>
<link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css"
      integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N"
      crossorigin="anonymous"
    />
    <link rel="stylesheet" href="style.css">
    <?php
    include "connect.php";
    if($_SESSION['ID']=="yes"){
        $cek = $db->query("SELECT * FROM login WHERE noreg = '$_SESSION[noreg]'");
if ($cek->num_rows>0) {
    echo "<div class='title-section mx-auto text-center '>";
   while ($data = $cek->fetch_assoc()) {
    echo "<h1 class='title-section mx-auto text-center display-4'> Nama :  $data[nama]</h1>";
    echo "<h1 class='title-section mx-auto text-center display-4'> Jurusan :  $data[jurusan]</h1>";
   }
    echo "</div>";
}

    } else {
        header("Location: index.php");
    }


   
    ?>
</html>

<?php
ob_start();
$questions = [
    "8.	Jika anda diminta harus mengikuti salah satu dari lomba berikut, yang mana akan anda pilih ?
" => ["a. Lomba Menyanyi", "b. Loma Lari", "c. cerdas Cermat", "d. Lomba Debat"],
  
];

$correct_answers = [
    "8" => "a", 
];
?>

<!DOCTYPE html>
<html>
<head>
    <title>Assesmen Peserta PLS</title>
        <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css"
      integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N"
      crossorigin="anonymous"
    />
    <link rel="stylesheet" href="style.css">
</head>
<body class="mx-auto">
    
    <div class="">
        <br>
        <br>
    <form class="col-10 mx-auto" method="POST" action="">
        <?php
        foreach ($questions as $question => $choices) {
            echo "<p>$question</p>";
            echo "<br>";
            foreach ($choices as $choice) {
                $value = substr($choice, 0, 1);
                echo "<label><input style='transform: scale(4)' class='radio p-5' type='radio' name='answers[$question]' value='$value' required> <span class=''>$choice</span></label><br>";
                echo "<br>";
            }
            

        }
        ?>
        <br>
          <div class="container">
          <input
          style="height: 75px;"
            name="submit"
              type="submit"
              class="btn btn-primary col-12 btn-lg"
            > 
          </input>
          </div>
    </form>
    </div>
    <?php
    $noreg = $_SESSION['noreg'];
    if (isset($_POST['submit'])) {
        $res = $db->query("SELECT * FROM login WHERE noreg = '$noreg'");
        if($res->num_rows>0){

            while($data = $res->fetch_assoc()){
            
          

          
        $_SESSION['result']= "yes";
        $answers = $_POST['answers'];
        $ans=1;
        $score = 0;
$_SESSION['countA'];
        $_SESSION['countB'];
        $_SESSION['countC'];
        $_SESSION['countD'];

        foreach ($correct_answers as $key => $correct_answer) {
          
            // Hitung jawaban
            if (isset($answers[$question])) {
                
           

                
                switch ($answers[$question]) {
                    case 'a':
                         $_SESSION['countA']++;
                         $sql = "UPDATE `question` SET `a8` = '$answers[$question] ' WHERE `question`.`id_user` = '$noreg';";

                         $db->query($sql);
                        break;
                    case 'b':
                         $_SESSION['countB']++;
                         $sql = "UPDATE `question` SET `a8` = '$answers[$question] ' WHERE `question`.`id_user` = '$noreg';";

                         $db->query($sql);
                        break;
                    case 'c':
                        $_SESSION['countC']++;
                        $sql = "UPDATE `question` SET `a8` = '$answers[$question] ' WHERE `question`.`id_user` = '$noreg';";

                        $db->query($sql);
                    
                        break;
                    case 'd':
                         $_SESSION['countD']++;
                         $sql = "UPDATE `question` SET `a8` = '$answers[$question] ' WHERE `question`.`id_user` = '$noreg';";

                         $db->query($sql);
                    
                        break;
                }
            }
            header("Location: quest9.php?message=$_GET[message]");

        }

        }
    }
    

    }

    ?>
</body>
</html>

<html>
<div class="cr fixed-bottom text-center">
Aplikasi dibuat oleh Tim Mentor SKAWAN
<br>
<span class="text-muted small">© Muhammad Naufal Fadhilah</span>

</div>
</html>