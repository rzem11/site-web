<?php
    session_start();
    require_once "config1.php";

    if(isset($_POST['Login'])){
        if(empty($_POST['email']) and empty($_POST['password'])){
            header("location:index.php?Empty=Veuillez entrer vos information ci-dessous");
        }
        else{
            $sql="select * from user where email='".$_POST['email']."' and password='".$_POST['password']."'";
            $result=mysqli_query($con,$sql);
            if(mysqli_fetch_assoc($result))
            {
                $_SESSION['user']=$_POST['email'];
                header("location:home.php");
            }
            else
            {
                header("location:index.php?Invalid=Veuillez saisir un email et un mot de passe corrects ");
            }
        }
    }
    
?>