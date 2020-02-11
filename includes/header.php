<?php  
session_start();
$current_url=$_SERVER['SERVER_NAME'].''.$_SERVER['REQUEST_URI'];


include("./user.php");  
$user=new User();



?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <!-- Bootsrap  -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
        integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <title>Essai 1 login system</title>
</head>

<body>

<!-- Ici la condition pour ne pas montrer le nav dans la page d'activation -->
<?php  
if(strpos($current_url,"activate.php")===false){
    include("includes/nav.php"); 

}



?>

