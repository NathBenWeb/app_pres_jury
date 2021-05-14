<?php
// session_start();

class AuthController{
    public static function isLogged(){
        if(!isset($_SESSION['Auth'])){
            header('location:index.php?action=login_admin');
            exit;
        }
    }

    public static function logout(){
        unset($_SESSION['Auth']);
        header('location:index.php?action=login_admin');
        exit;
    }

    public static function logoutClient(){
        unset($_SESSION['Auth']);
        header('location:index.php?action=shop');
        exit;
    }

    public static function accessUser2(){
        if($_SESSION['Auth']->id_g == 2){
            echo "Vous n'avez pas les droits d'accès à cette page";
        exit;
        }
    }

    public static function accessUser3(){
        if($_SESSION['Auth']->id_g == 3){
            echo "Vous n'avez pas les droits d'accès à cette page";
        exit;
        }
    }
}