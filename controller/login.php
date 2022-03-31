<?php
    if(isset($_POST["pass"])){
        if($_POST["pass"]=="admin"){
            $_SESSION["id"]=1;
        }else{
            echo "Hibás jelszó!";
        }
    }
    if(isset($_SESSION["id"]) and !empty($_SESSION["id"]) and $_REQUEST['action'] == 'logout'){
        session_unset();
        header('Location: index.php?page=index');
        exit();
    }
    include "view/login.php";
?>