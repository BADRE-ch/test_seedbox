
<?php
require_once 'serveurs.php';

class User extends mysqli{
    function __construct()
    {
        Parent::__construct("localhost","root","","bdserveurs");
        if ($this->connect_error) {
            $_SESSION['error']="DB connection problem !!";
            return;
    }
}


// methode pour l'inscription
public function inscrire($data){
    // hache du mot de passe
    $pass=password_hash($data['pwd'],PASSWORD_DEFAULT);
    
    
    $q="SELECT * FROM admin WHERE email='$data[email]' ";
    $res=$this->query($q);
    // tester la presence de l'email dans la base
    if($res->num_rows>0){
        $_SESSION['error']="Cet email est deja utilise par une autre personne.";
        return;
    }else{
        // inserer dans la base de donnees bdserveurs/table:admin---- cas d'email inexistant dans la base
        $q="INSERT INTO admin (name,email,password) VALUES('$data[name]','$data[email]','$pass')";
        $res=$this->query($q);
        if($res){
            $user=$this->getuser($data['email']);
            $_SESSION['id']=$user->id;			
            header("Location:http://test_seedbox/login.php");
        }else{
            $_SESSION['error']="Une erreur quelque part";


        }

    }

}
// methode pour chercher le user et transformer le resultat en objet
public function getuser($email){
    $q="SELECT *FROM admin WHERE email='$email'" ;  
    $res=$this->query($q);
    $row=$res->fetch_object();
    return $row;
}



    public function auth($email,$pass){
        $q="SELECT id FROM admin WHERE email='$email' ";
        $res=$this->query($q);
        if($res->num_rows>0){
            $row=$res->fetch_object();
            $q="SELECT * FROM admin WHERE id='$row->id'";
            $res=$this->query($q);
            $row=$res->fetch_object();
            if(password_verify($pass,$row->password) ){
                $_SESSION['user']=$row;
                header("Location:http://localhost/test_seedbox/indexAdmin.php");
            }else{
            $_SESSION['error']="Mot de passe incorrect";
        }
        }else{
            $_SESSION['error']="Cet email n'est pas inscrit ou compte pas active";
        }
}
	  public function getTable(){
        $sql ="select * from serveurs";

        $res = $this->query($sql);

        
        $table = "<table class='table'>"
                . "<thead class='thead-dark'>";
        
        $table .="<tr>"
                   
                . "</th>"
                    . "<th>Id</th>"
                    . "<th>Marque</th>"
                    . "<th>Modéle</th>"
                    . "<th>Processeur</th>"
                    . "<th>Ram</th>"
                    . "<th>Cache</th>"
                    . "<th>Image</th>"
                    . "<th>ACTION</th>"
                . "</tr></thead><tbody>";
        
        while($file = mysqli_fetch_assoc($res)){
            $table .= "<tr>"
                        . "<td>".$file["ids"]."</td>"
                        . "<td>".$file["marque"]."</td>"
                        . "<td>".$file["modele"]."</td>"
                        . "<td>".$file["micro"]."</td>"
                        . "<td>".$file["ram"]."</td>"
                        . "<td>".$file["cache"]."</td>"
                        . "<td><img src='images/".($file["image"])."' width=80 height=80></td>"
                        
                        . "<td><a onClick=rendreVisible('divFiche')  href=\"javascript:getElem('".$file["ids"]."','".$file["marque"]."','".$file["modele"]."','".$file["micro"]."','".$file["ram"]."','".$file["cache"]."','".$file["image"]."')\">Action</a>
                    </td>"
                    . "</tr>";  
        }
        $table .="</tbody></table>";
        $_SESSION['image']=$file["image"];
        $res->close();
        return $table;
 
    }
    
    public function insert($obj){
        
        $prod = new serveur();
        $prod = $obj;
        $sql="insert into serveurs (marque,modele,micro,ram,cache,image) values('".$prod->getMarque()."','".$prod->getModele()."','".$prod->getMicro()."','".$prod->getRam()."','".$prod->getCache()."','".$prod->getImage()."')";

        if($this->query($sql)){
            echo "<script>swal({title:'Effectuer',text:'Enregistrement effectuer',type:'success'});</script>";
        }else{
            echo "<script>swal({title:'Erreur',text:'Enregistrement non effectuer',type:'error'});</script>";
        }  

    }
    
    
     public function update($ids,$obj){
         $prod=new serveur();
         $prod=$obj;
         
        $sql="UPDATE serveurs set marque = '".$prod->getMarque()."',modele = '".$prod->getModele()."',micro = '".$prod->getMicro()."', ram = '".$prod->getRam()."',cache = '".$prod->getCache()."',image ='".$prod->getImage()."' where ids=$ids";

        if($this->query($sql)){
            echo "<script>swal({title:'Effectuer',text:'Modification bien effectuer',type:'success'});</script>";
        }else{
            echo "<script>swal({title:'Erreur',text:'Modification non effectuer',type:'error'});</script>";
        }  

    }
    
    public function supprimer($ids){
        $sql="delete from serveurs where ids=$ids";

        if($this->query($sql)){
            echo "<script>swal({title:'Effectuer',text:'Suppression bien effectuer',type:'success'});</script>";
        }else{
            echo "<script>swal({title:'Erreur',text:'Suppression non effectuer',type:'error'});</script>";
        }  

    }
    public function getFiltre($variable, $element){
        $sql ="select * from serveurs where $element like '%$variable%'";

        $res = $this->query($sql);

       
        
        $table = "<table class='table'>"
                . "<thead class='thead-dark'>";
        
        $table.="<tr>"
                     . "</th>"
                    . "<th>Id</th>"
                    . "<th>Marque</th>"
                    . "<th>Modele</th>"
                    . "<th>Processeur</th>"
                    . "<th>Ram</th>"
                    . "<th>Cache</th>"
                    . "<th>Image</th>"
                    . "<th>ACTION</th>"
                . "</tr></thead><tbody>";
        
         while($fila = mysqli_fetch_assoc($res)){
            $table .= "<tr>"
                        . "<td>".$fila["ids"]."</td>"
                        . "<td>".$fila["marque"]."</td>"
                        . "<td>".$fila["modele"]."</td>"
                        . "<td>".$fila["micro"]."</td>"
                        . "<td>".$fila["ram"]."</td>"
                        . "<td>".$fila["cache"]."</td>"
                        . "<td><img src='../images/".($fila["image"])."' width=80 height=80></td>"
                        
                        . "<td><a onClick=rendreVisible('divFiche')  href=\"javascript:getElem('".$fila["ids"]."','".$fila["marque"]."','".$fila["modele"]."','".$fila["micro"]."','".$fila["ram"]."',".$fila["cache"].",'".$fila["image"]."')\">Select</a></td>"
                    . "</tr>";  
        }
        $table .="</tbody></table>";
        $res->close();
        return $table;
 
    }
    
}
?>
