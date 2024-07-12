
<?php
include "connect.php";
$questions = [
    "1. Apa ibu kota dari Indonesia?" => ["a. Jakarta", "b. Surabaya", "c. Bandung", "d. Medan"],
    
];

?>

<html>
    
<form action="" method="POST">

<?php
        foreach ($questions as $question => $choices) {

            echo "<p>$question</p>";
            foreach ($choices as $choice) {
                $value = substr($choice, 0, 1);
                echo "<label><input type='radio' name='answers[$question]' value='$value' required> $choice</label><br>";
               
            }
          
            
        }  
        ?>
        <input type="button" type="submit" name="submit" value="submit"> 


</form>
</html>
<?php
if(isset($_POST['submit'])){
 
        $sql = ("INSERT INTO `question` (`id`, `nama`, `noreg`, `jurusan`, `a1`, `a2`, `a3`, `a4`, `a5`, `a6`, `a7`, `a8`, `a9`, `a10`, `res_minat`) VALUES ('20', 'nopssss', 'X09', '', '$answers[$question]', '', '', '', '', '', '', '', '', '', '');");
         $db->query($sql);

}

?>