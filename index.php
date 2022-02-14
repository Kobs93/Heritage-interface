<?php
include 'ISport.php';
include 'sport.php';
include 'SportRelais.php';
include 'SportBallon.php';
include 'comparable.php';
include 'club.php';



$listclub[]= new  club(1, "PSG", 234);
$listclub[]= new  club(2,"OM",5);
$listclub[]= new club(3,"OL",23);

$listclub[1]->AjouterSport(new sport("footbal", 33));

$listsport[] = new Sport("football", 11);
$listsport[] = new SportRelais("4*100 m", 1, 400);
$listsport[] = new SportRelais("100 m", 1, 100);
$listsport[] = new SportRelais("200 m", 1, 200);
$listsport[] = new  SportBallon("handball", 8, 40, 50);
$listsport[] = new  SportBallon("basketball", 10, 40, 50);
$listsport[] = new Sport("VTT", 1);
$listsport[] = new Sport("tennis", 2);
$listsport[] = new Sport("e-sport", 10);
$listsportRelais = new SportRelais("braquage", 5, 10000);

/*
foreach ($listsport as $keyListsport => $valueListsport)
{
    echo"Nom du sport:". $valueListsport-> getNomSport(). " ". $valueListsport ->getDescription()."<br>";
}
*/

echo '<br>LISTE DES CLUBS :';
echo "<a href="http://localhost:8042/PSG/%22%3E<br>PSG";
echo "<a href="http://localhost:8042/Nante/%22%3E<br>Nante";
echo "<a href="http://localhost:8042/saint-etienne/%22%3E<br>saint-etienne";
echo "<a href="http://localhost:8042/OM/%22%3E<br>nul à chier";
echo "<a href="http://localhost:8042/Ol/%22%3E<br>pas ouf";

