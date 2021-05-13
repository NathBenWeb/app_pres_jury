<?php

// class ClientPublicModel extends Driver{
//     public function signIn($loginEmail, $pass){
//         $sql = "SELECT * FROM users
//                 WHERE (login = :logEmail OR email = :logEmail) AND pass = :pass";
//         $result = $this -> getRequest($sql, ["logEmail" => $loginEmail, "pass" => $pass]);
        
//         $row = $result -> fetch(PDO::FETCH_OBJ);

//         return $row;
//     }

//     // Méthode requête création d'utilisateur qui s'assure par la condition que l'utilisateur créé n'existe pas déjà dans la bdd avant de valider sa création
//     public function register(User $usReg){
//         $sql = "SELECT * FROM users WHERE  email = :email";
//         $result = $this -> getRequest($sql, ["email" => $usReg -> getEmail()]);

//         if($result -> rowCount() == 0){
//             $req = "INSERT INTO users(firstname, name, login, pass, email, status, id_g
//                     VALUES (:firstname, :name , :login, :pass, :email, :status, :id_g)";

//             $tabUser = ["firstname"=>$usReg->getFirstname(), "name"=>$usReg->getName(), "login"=>$usReg->getLogin(), "pass"=>$usReg->getPass(), "email"=>$usReg->getEmail(),  "status"=>$usReg->getStatus(), "id_g"=>$usReg->getGrade()->getId_g()];
//             $res = $this -> getRequest($req, $tabUser);
//             return $res;
//         }else{
//             return "Cet utilisateur existe déjà";}
//     }   
// }