<?php
try{
    $my_bd=NEW PDO('mysql:host=localhost;dbname=db_ajnd','root','');
}
catch(Exception $e){
    header('location: ../error.php');
}
?>