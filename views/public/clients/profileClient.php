<?php ob_start();?>
        
    
                    <?php if(isset($valid)){  ?>
                        <div class="alert alert-success text-center"><?= $valid;?></div>
                    <?php } ?>
            <div class="accordion accordion-flush" id="accordionFlushExample">
  <div class="accordion-item">
    <h2 class="accordion-header" id="flush-headingOne">
      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne">
        Profile
      </button>
    </h2>
    <div id="flush-collapseOne" class="accordion-collapse collapse" aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample">
      <div class="accordion-body">

      <div class="container">
     <div class="row">
         <div class="col-8 offset-2">
        
<h1 class="display-6 text-center font-verdana text-decoration-underline"><?php if(isset($_SESSION['AuthClient'])){
    echo $_SESSION['AuthClient']->firstname_client;
     } ?> veuillez modifiez votre profile</h1>

         <form action="<?php $_SERVER['PHP_SELF'] ?>" method="post" class="text-center" enctype="multipart/form-data">
                <div class="row mt-3  ">
                  <div class="row border border-warning mt-4">
                        <div class="col-6">
                            <label for="name">Name</label>
                            <input type="text" id="name" name="name" class="form-control" placeholder="Please enter a name" value="<?=$editProfile->getName_client();?>">
                        </div>
                        <div class="col-6 mb-4">
                            <label for="firstname">Firstname</label>
                            <input type="text" id="firstname" name="firstname" class="form-control" placeholder="Please enter a firstname" value="<?=$editProfile->getFirstname_client();?>">
                        </div>
                  </div>
                    <div class="row mt-3 border border-secondary">
                        <div class="col-8 mt-3 ">
                            <label for="address">Address</label>
                            <input type="text" id="address" name="address" class="form-control" placeholder="Please enter an address" value="<?=$editProfile->getAddress();?>">
                        </div>
                        <div class="col-4 mt-3">
                            <label for="cp">Cp</label>
                            <input type="text" id="cp" name="cp" class="form-control" placeholder="Please enter a cp" value="<?=$editProfile->getCp();?>">
                        </div>
                        <div class="col-6">
                            <label for="city">Ville</label>
                            <input type="text" id="city" name="city" class="form-control" placeholder="Please enter a town" value="<?=$editProfile->getCity();?>">
                        </div>
                        <div class="col-6 mb-5">
                            <label for="country">Country</label>
                            <input type="text" id="country" name="country" class="form-control" placeholder="Please enter a country" value="<?=$editProfile->getCountry();?>">
                        </div>
                    </div>
                <div class="row mt-3 border border-secondary">
                    <div class="col-4  mt-3">
                        <label for="email">Mail</label>
                        <input type="text" id="email" name="email" class="form-control" placeholder="Please enter a mail" value="<?=$editProfile->getEmail_client();?>">
                    </div>
                    <div class="col-4 mt-3">
                        <label for="login">Login</label>
                        <input type="text" id="login" name="login" class="form-control" placeholder="Please enter a login" value="<?=$editProfile->getLogin_client();?>">
                    </div>
                    <div class="col-12 mb-5">
                       <label for="pass">Password</label>
                       <input type="password" id="pass" name="pass" class="form-control" placeholder="Please enter a password" value="<?=$editProfile->getPass_client();?>">
                   </div>
                </div>
                <button type="submit" class="btn btn-primary  col-12 mt-3" name="soumis">Modifier</button>
            </form>
         </div>
     </div>
 </div>
      
      </div>
    </div>
  </div>
</div>



<?php
    $contenu = ob_get_clean();
    require_once('./views/public/templatePublic.php');
?>

