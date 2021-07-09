<?php

/* # PHP EXO 1
Vous devez créer une fonction qui renvoie la longueur d’une chaîne de caractères passées en paramètre et afficher le résultat
*/

function longChaine($string) {
    
    return strlen($string);
}

echo (longChaine("Bonjour tout le monde !")) ;

echo ("<br><br>");

/*  # PHP EXO 2
Vous devez créer une fonction qui prend en paramètre une phrase et qui renvoie cette phrase avec la première lettre de chaque mot en majuscule. Vous l'affichez ensuite à l'écran
*/

function majuscules($string) {
    
    return ucwords($string); 
    
    
}

echo (majuscules("Bonjour tout le monde !")) ;

echo ("<br><br>");

/*
 # PHP EXO 3 Vous devez créer une fonction qui ajoute un élément au début d’un tableau. Puis une seconde qui affiche le tableau.
*/

function insereDebutTableau ($arr,$elem) {

array_unshift($arr,$elem);

print_r($arr);

}

 $arr=array("orange","citron");

 insereDebutTableau ($arr,"poire") ;

echo ("<br><br>");

/*
 # PHP EXO 4 Vous devez créer une fonction qui prend en paramètre une chaîne de caractères et qui renvoie la même chaîne mais inversée.
*/

function inverse($string) {
    
    return strrev($string);   
    
}

 echo (inverse("bonjour")) ;

echo ("<br><br>");

/*
 # PHP EXO 5 Vous devez créer une fonction qui prend en paramètre une chaîne de caractères et qui renvoie "Cette chaîne est un palindrome" si c'en est un ou "Cette chaîne n'est pas un palidrome" dans le cas contraire.
*/


function inverse2($string) {
    
    return strrev($string);   
    
}


 $string = "Kayak" ;
 
 $string = strtolower($string);

 $revString = inverse2($string) ;
 
 if ($string === $revString ) {
 
 echo "c'est un palindrome" ;
 
 }
 
 else {
 
 echo "ce n'est pas un palindrome" ;
 
 }

echo ("<br><br>");


/*
   # PHP EXO 6 Vous devez créer une fonction qui prend en paramètre un integer et qui renvoie le même integer inversé.
*/
    
function invInteger($number) {
    
    return  strrev($number) ;  
    
}

echo (invInteger(645)) ;

echo ("<br><br>");

/*
 # PHP EXO 7 Vous devez créer une fonction qui affiche tous les entiers entre 0 et 100, excepte modulo 3 et modulo 5.
*/
 

function nbreEntiers($nbre) {

if ($nbre %3 ===0 && $nbre %5 ===0) {return "fizzbuzz";}


if ($nbre %3 ===0) {return "fizz";}

elseif ($nbre %5 ===0) {return "buzz";}

return $nbre;

}
 
for ($i=0; $i <=100; $i++ ) {

	echo nbreEntiers($i)."<br>" ;
}

echo ("<br><br>");


/*
 # PHP EXO 8 pour les chauds de chez chauds 
 
 Vous devez créer une fonction qui affiche un calendrier du mois en cours (au moins le numéro des jours, sinon vous pouvez aussi afficher le nom et le numéro du jour.
*/

$date = '2021-07-01';
$end = '2021-07-' . date('t', strtotime($date)); //get end date of month

echo "date : $date -> $end<br><br>" ;
 
 while(strtotime($date) <= strtotime($end)) {
        $day_num = date('d', strtotime($date));
        $day_name = date('l', strtotime($date));
        $date = date("Y-m-d", strtotime("+1 day", strtotime($date)));
        echo "$day_num  : $day_name<br>";
    }
 

?>