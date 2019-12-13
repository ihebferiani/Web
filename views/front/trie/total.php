<?php
    session_start();
            $_SESSION['order']='(qty*Prix)';
            if(isset($_SESSION['sort'])){

    if($_SESSION['sort']=='DESC'){
        $_SESSION['sort']='ASC';
        header("Location:../wishlist.php");
       die();
    } 
    
    if($_SESSION['sort']=='ASC'){
        $_SESSION['sort']='DESC';
        header("Location:../wishlist.php");
       die();
    } }else {
        $_SESSION['sort']='ASC';
        header("Location:../wishlist.php");

    }
?>