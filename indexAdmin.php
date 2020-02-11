
<?php 

include("includes/header.php");
if(!isset($_SESSION['user'])){
header("Location:http://localhost/test_seedbox/login.php");               }
 
$prod = new serveur();
$user=new User();

?>




<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Page Title</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <link rel="stylesheet" href="bootstrap/css/bootstrap.css">
    <link rel="stylesheet" href="sweetalert/sweetalert2.css">

    
    <script src="bootstrap/js/bootstrap.js"></script>
    <script src="sweetalert/sweetalert2.js"></script>
    
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    
    <script src="js/jquery.js"></script>
    <script>
    function getElem(cod,nom,desc,pu,ex,px,tst){
        
        document.form.txtId.value=cod;
        document.form.txtMarque.value=nom;
        document.form.txtModele.value=desc;
        document.form.txtProc.value=pu;
        document.form.txtRam.value=ex;
        document.form.txtCache.value=px;
        document.form.txtImage.value=tst;
        


           
    }
    function rendreInvisible(elem){
	document.getElementById(elem).style.display='none';
        
        }
        function rendreVisible(elem){
	document.getElementById(elem).style.display='block';
        }
    
    
    </script>
    
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
     <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="./script/myscripts.js"></script> 
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</head>
<body>
    <header>

    </header>
    <div align="center" >
        <h4>Gérer les serveurs</h4><hr>
        <div class="form-group" style="position: relative; margin: auto; width: 500px;">
            <div id="divFiche" style="display: none">
             <a onClick="rendreInvisible('divFiche')" style="background-color: red">Fermer</a><br>
            <form method="POST" action="#" name="form">
                <input type="number" href="" name="txtId" value="" size="60" placeholder="Id"
                       class="form-control" style="display:none"/> 
                 <input type="text" name="txtMarque" value="" size="60" placeholder="Marque"
                       class="form-control"/>
                 <input type="text-area"  name="txtModele" value="" size="60" placeholder="Modéle"
                       class="form-control"/>
                 <input type="text" name="txtProc" value="" size="60" placeholder="Processor"
                       class="form-control"/>
                 <input type="text" name="txtRam" value="" size="60" placeholder="Ram"
                       class="form-control"/>
                 <input type="text" name="txtCache" value="" size="60" placeholder="Cache"
                       class="form-control"/>
                 <input type="file"  name="txtImage"  value="" size="150" placeholder="Image"
                        class="form-control"/>
                 
                 <br>
                 <input type="submit" value="Ajouter" name="btnAjouter" class="btn-primary"/>
                 <input type="submit" value="Supprimer" name="btnSupp" class="btn-danger"/>
                 <input type="submit" value="Modifier" name="btnModif" class="btn-dark" />
            </form>
            </div>
            <br><br><h4>Filtrer</h4><hr>
            <div class="form-inline" style="position: relative; margin: auto; width: 600px;">
                <form method="POST" action="#" name="busRech">
                    <input type="text" name="txtElem" value="" size="10" placeholder="Caractère...?"
                           class="form-control" style="width: 250px;">
                    Recherche par :
                    <select class="form-control" name="txtChoix" style="width: 200px;">
                        <option value="marque">Marque</option>
                        <option value="modele">Modéle</option>    
                         <option value="ram">Ram</option> 
                    </select><br>
                    <input type="submit" value="Recherche" name="busRech" class="btn-success"/>
                    <input type="submit" value="Initialiser" name="btnreset" class="btn-link"/>
                    <hr>
                </form>
            </div>
                <br><br>
                <button class="btn btn-success" onClick="rendreVisible('divFiche')" style="color: green; background-color: blanchedalmond;">Ajouter</button> 
        </div>
        
        
    </div>
<!--                  </div>
                </div>
          </div>
      </div>-->
    
    
<br> 
    <div align="center" style="position: relative; margin: auto; width: 800px;">
    <?php
    if(isset($_REQUEST["btnAjouter"])){
//        $prod->setIdf($_REQUEST["txtId"]);
        $prod->setMarque($_REQUEST["txtMarque"]);
        $prod->setModele($_REQUEST["txtModele"]);
        $prod->setMicro($_REQUEST["txtProc"]);
        $prod->setRam($_REQUEST["txtRam"]);
        $prod->setCache($_REQUEST["txtCache"]);
        $prod->setImage($_REQUEST["txtImage"]);
       
        $user->insert($prod);
        echo $user->getTable(); 
        
    }elseif(isset($_REQUEST["btnSupp"])){
        $codigo = $_REQUEST["txtId"];
        $user->supprimer($codigo);
        echo $user->getTable();
    }elseif(isset($_REQUEST["btnModif"])){
        $codigo = $_REQUEST["txtId"];
//        $prod->setIdf($_REQUEST["txtId"]);
        $prod->setMarque($_REQUEST["txtMarque"]);
        $prod->setModele($_REQUEST["txtModele"]);
        $prod->setMicro($_REQUEST["txtProc"]);
        $prod->setRam($_REQUEST["txtRam"]);
        $prod->setCache($_REQUEST["txtCache"]);
        $prod->setImage($_REQUEST["txtImage"]);
        $user->update($codigo,$prod);
        echo $user->getTable(); 
    }elseif(isset($_REQUEST["busRech"])){ 
        echo $user->getFiltre($_REQUEST["txtElem"],$_REQUEST["txtChoix"]);
    }else{
         echo $user->getTable();
    }
    
    
    
    
    
    
       
    ?>
    </div>
</body>
</html>


