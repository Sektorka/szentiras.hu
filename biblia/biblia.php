<?php

  echo"<html>\n";
  echo "<head>\n";
  echo"<meta http-equiv='Content-Type' content='text/html; charset=iso-8859-2'>\n";
  echo "<title>Biblia</title>";
  echo"<link rel='stylesheet' href='/include/style.css'>\n";
  echo"</head>\n";
  echo"<body bgcolor='#FFFFFF' topmargin='0' leftmargin='0'>\n";

  require("bibleconf.php");
  require("biblefunc.php");

    if (!(empty($konyv)and empty($fejezet) and empty($vers))) {
       if (empty($forditas)) {
         $reftrans=1;
       } else {
         switch($forditas) {
            case "protestans":
            case "protest�ns":
            case "prot":
            case "pr":
               $reftrans=2;
               break;
            case "katolikus":
            case "kat":
            case "rk":
               $reftrans=1;
               break;
         }
       }
       $parts=explode("-",$vers);
       if (!empty($parts[1])) {
          $fromvers=$parts[0];
          $tovers=$parts[1];
       } else {
          $fromvers=$parts[0];
          $tovers=$parts[0];
       }
       showverse($db, $reftrans, $konyv, $fejezet, $fromvers, $tovers);
    }

   echo "<p class='kicsi' align='center'> A fenti bibliai r�sz a <i>"  . gettransname($db, $reftrans);
   echo "</i> ford�t�s�b�l val�, melyet a kiad� enged�ly�vel ad k�zre a ";
   echo "<a href='http://www.kereszteny.hu/mkie' class='minilink'>Magyar Kereszt�ny Internet Egyes�let</a><br>";
   echo "<a href='http://www.kereszteny.hu/biblia' class='minilink'>Biblia az Interneten</a> - ";
   echo "<a href='http://www.kereszteny.hu' class='minilink'>Magyar Kereszt�ny Port�l</a>";

   echo "</body></html>";

?>