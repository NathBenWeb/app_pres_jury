<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/css/bootstrap.min.css" integrity="sha384-r4NyP46KrjDleawBgD5tp8Y7UzmLA05oM1iAEQ17CSuDqnUK2+k9luXQOfXJCJ4I" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="./assets/css/templatePublic.css">
    <link rel="icon" type="image/png" sizes="18x18" href="./assets/pictures/logo2.png">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
</head>
<body>
<header>
  <div id="ancre"></div>
  <div id="header" class="navbar">
    <a id class="navbar-brand" href="index.php"><img id="logoHeader" src="./assets/pictures/logo2.png" alt="" class="logo" width="80px"></a>
    <a class="nav-link active" aria-current="page" href="index.php?action=shop"><i class="fas fa-store"></i> Boutique</a>
    <a class="nav-link active" aria-current="page" href="index.php?action=chefs"><i class="fas fa-bread-slice"></i> Vos chefs</a>
    <a class="nav-link" href="index.php?action=checkout" value=""><i class="fas fa-shopping-basket"></i> Votre panier</a>
    <a class="nav-link" href="index.php?action=contact"><i class="fa fa-fw fa-envelope"></i> Contact</a>
    <a class="nav-link" href="index.php?action=about"><i class="far fa-hand-point-right"></i> A propos</a>
    <?php if(!isset($_SESSION['Auth'])){?>
    <a class="nav-link" href="index.php?action=sign_in" value=""> Connexion</a> <!-- Ajouter menu déroulant Mon compte si connecté avec "Hello prénom" qui ramène à une page "mettre à jour mes informations" puis une condition disant que si connecté marquer Déconnexion si non connecté marque Connexion -->
    <a class="nav-link" href="index.php?action=sign_up" value="">S'inscrire</a>
    <?php } ?>
    <?php if(isset($_SESSION['Auth'])){?>
    <a class="nav-link" href="index.php?action=logout_admin" value=""> Déconnexion</a>
    <a class="nav-link" href="index.php?action=profile_client" value=""> Bonjour <?php if(isset($_SESSION['Auth'])){
                  echo $_SESSION['Auth']->firstname_client;
                  } ?></a>
    <?php } ?>
  </div> 
</header>
  <main>
    <?=$contenu;?>
  </main>
<footer>
  <div id="footer" class="navbar">
    <a class="navbar-brand" href="index.php">Un Chef à la maison</a>
    <a class="nav-link active" href="">Conditions générales</a>
    <a class="nav-link active" href="">Politique de confidentialité</a>
    <a class="nav-link active" href="">FAQ</a>
    <a class="nav-link active" id="ancre" href="#ancre"><i class="fas fa-angle-double-up"></i></a>
    <a href="index.php?action=login_admin"><i class="fas fa-users-cog"></i></i></a>
    <span id="footerSpan" class="">Copyright CM <i class="fa fa-copyright" aria-hidden="true"></i> 2021</span>
  </div>
</footer>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js" integrity="sha384-SR1sx49pcuLnqZUnnPwx6FCym0wLsk5JZuNx2bPPENzswTNFaQU1RDvt3wT4gWFG" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.min.js" integrity="sha384-j0CNLUeiqtyaRmlzUHCPZ+Gy5fQu0dQ6eZ/xAww941Ai1SxSY+0EQqNXNE6DZiVc" crossorigin="anonymous"></script>
  <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
  <script src="https://polyfill.io/v3/polyfill.min.js?version=3.52.1&features=fetch"></script>
  <script src="https://js.stripe.com/v3/"></script>
  <script src="https://ajax.aspnetcdn.com/ajax/jQuery/jquery-3.5.1.js"></script>
  <script src="./assets/js/scriptStripe.js"></script>
  <!-- <script src="./assets/js/templatePublic.js"></script> -->
  
  
</body>
</html> 