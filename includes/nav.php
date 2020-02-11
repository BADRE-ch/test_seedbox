<nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="#">Application gestion serveurs <div fxLayout="column-reverse" fxLayoutAlign="start start" fxLayoutGap="gappx">
            
        </div></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class=" navbar-nav " style="width:100%">

                <!-- //ici pr que le client loguer ne peux pas voir connection et inscription car il est deja dans ca session -->
                <?php
                    if(!isset ($_SESSION['user'])){
                ?>
                <li class="nav-item float-sm-right " style="margin-left:auto;">
                    <a class="nav-link" href="login.php">Connection</a>
                </li>
                <li class="nav-item float-sm-right">
                    <a class="nav-link" href="inscription.php">Inscription</a>
                </li>
                <!-- fermeture de la 1ere condition -->
                    <?php }else{ ?>
                <li class="nav-item float-sm-right" style="margin-left:auto;">
                    <a class="nav-link float-sm-right" href="logout.php" >Deconnection</a>
                </li>
                <!-- fermeture de else -->
                <?php } ?>
            </ul>
        </div>
    </nav>