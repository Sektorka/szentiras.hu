<?php

  require("design.php");
  require("biblemenu.php");
  require("bibleconf.php");
  require("biblefunc.php");

  portalhead("Biblia - Magyar�zatok");
  bibleleftmenu();

  if (!(empty($reftrans) or empty($did))) {
    showcomm($db,$reftrans,$did);
  }

  portalfoot();

?>