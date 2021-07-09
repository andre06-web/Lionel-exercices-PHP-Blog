<?php
   session_start();
   @$login=$_POST["login"];
   @$pass=$_POST["pass"];
   @$valider=$_POST["valider"];
   $bonLogin="lionel";
// $bonPass="mars13";
   $erreur="";
   
$bdd = array("lionel"=>"$2y$10$kljDdizK1iV99bY6sGrDm.ZSkwOXnRXcJr9NPU19hpkS7JhGy9oem");

 if(isset($valider)){

//$login="lionel" ; 

//$mdp="mars13";

$hash = '$2y$10$MzpRyyXLS1/bKVoBRKLJxebbh1BblN/BTzTl4m.Z3zmpQB87a6dkG';

if ($login=="lionel" &&password_verify($pass, $hash)) {
    echo 'Le mot de passe est valide !';
    
             $_SESSION["autoriser"]="oui";
             
         header("location:session.php");
         
} else {
    echo 'Le mot de passe est invalide.';
}


/*
foreach($bdd as $x => $x_value) {

if ($login=="lionel" && password_verify($pass, $hash)) {

echo "identifiants corrects" ;
          $_SESSION["autoriser"]="oui";
         header("location:session.php");
}

else {  echo 'Les identifiants de connexion sont invalides !'; }


}
*/

}



?>
<!DOCTYPE html>
<html>
   <head>
      <meta charset="utf-8" />
      <style>
         *{
            font-family:arial;
         }
         body{
            margin:20px;
         }
         input{
            border:solid 1px #2222AA;
            margin-bottom:10px;
            padding:16px;
            outline:none;
            border-radius:6px;
         }
         .erreur{
            color:#CC0000;
            margin-bottom:10px;
         }
      </style>
   </head>
   <body onLoad="document.fo.login.focus()">
      <h1>Authentification</h1>
      <div class="erreur"><?php echo $erreur ?></div>
      <form name="fo" method="post" action="">
         <input type="text" name="login" placeholder="Login" /><br />
         <input type="password" name="pass" placeholder="Mot de passe" /><br />
         <input type="submit" name="valider" value="S'authentifier" />
      </form>
   </body>
</html>