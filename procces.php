<?php
include("connect.php");
session_start();
if(isset($_POST['btn'])){
    $noreg = $_POST['noreg'];
    $_SESSION['noreg'] = $noreg;
    $result = $db->query("SELECT * FROM login WHERE noreg='$noreg'");
    if($result->num_rows>0){
        $sel = $db->query("SELECT * FROM question where id_user='$noreg'");
        // $sel = $db->query("SELECT * FROM `question` JOIN login ON login.noreg=question.id_user");
        if ($sel->num_rows>0) {
            $_SESSION['noreg'] = $noreg;
            header("location:done.php?message=sudah mengisi");

        } else {
        while($data = $result->fetch_assoc()){
$_SESSION['ID']= "yes";
header("location:home.php?nama='$data[nama]'<br> Jurusan :  '$data[jurusan]'");
        }
}
    } else {
        header("location:index.php?data salah");
    }

}




?>