<?php
session_start();
if (isset($_SESSION['nome'])) {
    header('location: index.php');
   
}else{
   header('location: /TSI-PHP-2202/bancodedados/login/index.php');
    
}