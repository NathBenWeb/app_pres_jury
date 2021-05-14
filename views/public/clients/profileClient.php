<?php ob_start();?>
        
    <div class="row">
               <div class="col-4 offset-4  ">
                    <?php if(isset($valid)){  ?>
                        <div class="alert alert-success text-center"><?= $valid;?></div>
                    <?php } ?>
                </div>
        </div>

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
    echo $_SESSION['AuthClient']->login_client;
     } ?>Modifiez votre profile</h1>

         <form action="<?php $_SERVER['PHP_SELF'] ?>" method="post" class="text-center" enctype="multipart/form-data">
                <div class="row mt-3  ">
                  <div class="row border border-warning mt-4">
                        <div class="col-6">
                            <label for="name">Name</label>
                            <input type="text" id="name" name="name" class="form-control" placeholder="Please enter a name" value="<?=$editClie->getName_client();?>">
                        </div>
                        <div class="col-6 mb-4">
                            <label for="firstname">Firstname</label>
                            <input type="text" id="firstname" name="firstname" class="form-control" placeholder="Please enter a firstname" value="<?=$editClie->getFirstname_client();?>">
                        </div>
                  </div>
                    <div class="row mt-3 border border-secondary">
                        <div class="col-8 mt-3 ">
                            <label for="address">Address</label>
                            <input type="text" id="address" name="address" class="form-control" placeholder="Please enter an address" value="<?=$editClie->getAddress();?>">
                        </div>
                        <div class="col-4 mt-3">
                            <label for="cp">Cp</label>
                            <input type="text" id="cp" name="cp" class="form-control" placeholder="Please enter a cp" value="<?=$editClie->getCp();?>">
                        </div>
                        <div class="col-6">
                            <label for="town">Town</label>
                            <input type="text" id="town" name="town" class="form-control" placeholder="Please enter a town" value="<?=$editClie->getCity();?>">
                        </div>
                        <div class="col-6 mb-5">
                            <label for="country">Country</label>
                            <input type="text" id="country" name="country" class="form-control" placeholder="Please enter a country" value="<?=$editClie->getCountry();?>">
                        </div>
                    </div>
                <div class="row mt-3 border border-secondary">
                    <div class="col-4  mt-3">
                        <label for="mail">Mail</label>
                        <input type="text" id="mail" name="mail" class="form-control" placeholder="Please enter a mail" value="<?=$editClie->getEmail_client();?>">
                    </div>
                    <div class="col-4 mt-3">
                        <label for="login">Login</label>
                        <input type="text" id="login" name="login" class="form-control" placeholder="Please enter a login" value="<?=$editClie->getLogin_client();?>">
                    </div>
                    <div class="col-12 mb-5">
                       <label for="password">Password</label>
                       <input type="password" id="password" name="password" class="form-control" placeholder="Please enter a password" value="<?=$editClie->getPass_client();?>">
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

