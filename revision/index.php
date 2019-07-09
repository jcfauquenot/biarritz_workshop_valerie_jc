<?php 

// include header
include 'header.php';

/* 
echo "Hello fellowship";
 */
$porteurAnneau = "fredon";
$createurDeLanneau = "Sauron";
$nombreCompagnie = 12;
$anneauAuDoight = FALSE;
$middleEarth = NULL;
$phrasePorteur = "l'anneau est porté par ".$porteurAnneau." et ".$createurDeLanneau." le recherche";
$createurDeLanneau ="Sonron";
$wizard =" Gandalf";

$porteurAnneau = "toto";
/* $nombreCompagnie = $nombreCompagnie  + 1; */
$nombreCompagnie++;

echo $nombreCompagnie."\n";
echo $middleEarth."\n";
// 
echo  $phrasePorteur."\n";
echo strtoupper($createurDeLanneau)."\n";
$createurDeLanneau = strtoupper($createurDeLanneau);
echo $createurDeLanneau."\n";

include 'footer.php';
require 'wizard.php';