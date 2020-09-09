
<?php
session_start();
if(isset($_SESSION['ID'])){
    unset($_SESSION['ID']);
    $_SESSION['ID']=0;
    
    header("Location: mainpage.php");
}
?>

