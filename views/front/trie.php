<?php
    session_start();
    if($_SESSION['sort']=='DESC'){
        $_SESSION['sort']='ASC';
        header("Location:cart.php");
       die();
    } 
    
    if($_SESSION['sort']=='ASC'){
        $_SESSION['sort']='DESC';
        header("Location:cart.php");
       die();
    } 
?>