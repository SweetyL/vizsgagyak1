<?php
    if(isset($_POST["nev"]) and isset($_POST["email"]) and isset($_POST["szulido"]) and isset($_POST["nem"])){
        $_SESSION["error"] = "";
        if(strlen($_POST['nev']) == 0) $_SESSION["error"] .= "Nem írtál be nevet!<br>";
        if(strlen($_POST['email']) == 0) $_SESSION["error"] .= "Nem írtál be emailt!<br>";
        if(strlen($_POST['szulido']) == 0) $_SESSION["error"] .= "Nem írtál be születési dátumot!<br>";
        if(strlen($_POST['nem']) == 0) $_SESSION["error"] .= "Nem írtál választottál nemet!<br>";
        if(!empty($_SESSION["error"])){
            header('Location: index.php?page=response');
            exit();
        }
        //    ADD ENGINE   //
        $sql = "INSERT INTO `jelentkezes`(`nev`, `email`, `szulido`, `nem`) VALUES ('".$_POST["nev"]."','".$_POST["email"]."','".$_POST["szulido"]."','".$_POST["nem"]."')";
        $result = $conn->query($sql);
        $_SESSION["ok"] = "Sikeres regisztrálás!";
        header('Location: index.php?page=response');
        exit();
    }

    include "view/regisztraciok.php";
?>