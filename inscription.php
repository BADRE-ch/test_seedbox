
<?php 
 include("includes/header.php"); 

 if(isset($_SESSION['user'])){
    header("Location:http://localhost/test_seedbox/indexAdmin.php");


}
//  logic
if(isset($_POST['submit'])){
    $user->inscrire($_POST);
}
 
 
 
 ?>
    <div class="container-fluid" style="margin-top:25px;  text-align: center;">
        <div class="row">
            <div class="col-sm-4 offset-sm-4">
            <div class="card">
                    <div class="card-header ">
                        Inscription
                    </div>
                    <div class="card-body">
                        <!-- //code de generation d'erreur -->
                        <?php
                        if(isset($_SESSION['error'])){
                        echo  '<div class="alert alert-danger" role="alert">';
                        echo  $_SESSION['error'];
                        echo  '</div>';
                        }
                        ?>
                        <form method="post">
                            <fieldset class="form-group">
                                <label for="name" class=" float-left">Nom </label>
                                <input type="text" class="form-control"  name="name" id="name" placeholder="" value="<?php echo @$_POST['name'] ?>">
                        </fieldset>
                        <fieldset class="form-group">
                                <label for="email" class=" float-left">Email</label>
                                <input type="email" class="form-control" value="<?php echo @$_POST['email'] ?>" name="email" id="email" placeholder="">
                        </fieldset>
                        <fieldset class="form-group">
                                <label for="pwd" class=" float-left">Mot de passe </label>
                                <input type="password" class="form-control"  name="pwd" value="<?php echo @$_POST['pwd'] ?>" id="pwd" placeholder="">
                        </fieldset>

                        <input class="btn btn-primary float-right" type="submit" value="inscription" name="submit">
                        </form>

                    </div>
            </div>
        </div>
    </div>

    <?php  include("includes/footer.php");  ?>