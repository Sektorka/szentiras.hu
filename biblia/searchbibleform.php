<?php

  require("design.php");
  require("biblemenu.php");
  require("bibleconf.php");
  require("biblefunc.php");

  portalhead("Keres�s a Bibli�ban");
  bibleleftmenu();

  textframehead();

    echo "<p class='cim'>Keres�s a Bibli�ban</p>";

    echo "<form action='searchbible.php' method='get'>\n";

    /* displaytextfield ($name,$size,$maxlength,$value,$comment,) */
    /* displaytextarea ($name,$cols,$rows,$value,$comment) */
    /* displayoptionlist($name,$size,$rs,$valuefield,$listfield,$default,$comment) */

    displaytextfield("texttosearch",30,40,"","Keresend�:","alap");
    echo "<br>\n";
    displayoptionlist("reftrans",5,listbible($db),"did","name","1","Ford�t�s:","alap");
    echo "<br>\n";
    echo "<input type=reset value='T�rl�s' class='alap'> &nbsp;&nbsp;\n";
    echo "<input type=submit value='K�ld�s' class='alap'>\n";
    echo "</form>\n";

    textframefoot();

  portalfoot();

?>