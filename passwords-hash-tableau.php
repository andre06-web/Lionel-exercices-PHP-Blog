<!DOCTYPE html>
<html>
<body>

<?php

echo password_hash("mars13", PASSWORD_DEFAULT)."<br><br>";


$bdd = array("jonathan"=>"$2y$10$1LWW0riHB6iieQKd/S.qDu3BU9XRgopEth0bO6d.IFz2WjCK.bf7S", 'lionel'=>'$2y$10$Y/zRRlX2AMUIElijeh/cEeyq6V/kQI0XgfV5OrTB.AQ7q16yfXZGa', "emmanuel"=>"$2y$10$0YeD45HWQoz7ltGPBEMGROaA./d//J98F.001idVQJvy7XpWv41mC");

$login="lionel" ; 

$mdp="mars13";

$hash = '$2y$10$Y/zRRlX2AMUIElijeh/cEeyq6V/kQI0XgfV5OrTB.AQ7q16yfXZGa'; //mars13

if (password_verify('mars13', $hash)) {
    echo 'Le mot de passe est valide !';
} else {
    echo 'Le mot de passe est invalide.';
}

 
foreach($bdd as $x => $x_value) {
 
if ($x === $login && password_verify($mdp, $x_value)) {


echo $x; echo $x_value ;

echo "identifiants corrects" ;
 
}

else {echo "identifiants incorrects" ;

echo $x; echo $x_value ;

}


}


 
?>

</body>
</html>
