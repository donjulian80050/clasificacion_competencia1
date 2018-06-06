<?php

session_start();
if($_SESSION['validacion']!=1){
    header('location:index.php');
    exit();
}

?>