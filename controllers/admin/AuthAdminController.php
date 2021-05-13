<?php
// session_start();

class AuthAdminController{
    public static function isLoggedAdmin(){
        if(!isset($_SESSION['Auth'])){
            header('location:index.php?action=login_admin');
            exit;
        }
    }

    public static function logoutAdmin(){
        unset($_SESSION['Auth']);
        header('location:index.php?action=shop');
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