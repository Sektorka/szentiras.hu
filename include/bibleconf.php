<?php
/* General constants */
$baseurl = "http://www.kereszteny.hu/biblia/";
/* Database */
require("phpdb.inc");
$dbconndie = "Nem siker�lt kapcsol�dni az adatb�zishoz: 1";
$db = new phpDB();
$db->pconnect("localhost", "root", "Felpecz") or die($dbconndie);
$db->selectDB("bible");
?>
