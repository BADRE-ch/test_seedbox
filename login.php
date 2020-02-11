
<?php  include("includes/header.php"); 
// securite
 if(isset($_SESSION['user'])){
    header("Location:http://localhost/test_seedbox/login.php");


}

if(isset($_POST['submit'])){
    $user->auth($_POST['email'],$_POST['pwd']);
}


?>
    <div class="container-fluid" style="margin-top:25px;  text-align: center;">
        <div class="row">
            <div class="col-sm-4 offset-sm-4">
            <div class="card">
                    <div class="card-header ">
                        Connection
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
                                <label for="email" class=" float-left">Email </label>
                                <input type="email" class="form-control"  name="email" id="email" placeholder="Entrer votre email">
                        </fieldset>
                        <fieldset class="form-group">
                                <label for="pwd" class="float-left">Mot de passe </label>
                                <input type="password" class="form-control"  name="pwd" id="pwd" placeholder="Entrer votre mot de passe">
                        </fieldset>

                        <input class="btn btn-primary float-right" type="submit" value="login" name="submit">
                        </form>

                    </div>
            </div>
        </div>
    </div>

    <?php  include("includes/footer.php");  ?>