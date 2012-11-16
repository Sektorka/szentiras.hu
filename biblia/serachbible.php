<?php

  require("design.php");
  require("biblemenu.php");
  require("bibleconf.php");
  require("biblefunc.php");

  portalhead("Keres�s eredm�nyei");
  bibleleftmenu();

  if (!(empty($texttosearch) or empty($reftrans))) {

   $script = explode("?",$_SERVER['REQUEST_URI']);
   if (empty($offset)) {$offset = 0;}
   if (empty($rows)) {$rows=50;}

   $texttosearch = preg_replace("/_/"," ",$texttosearch);

    echo "<p class='cim'>A keres�s eredm�nyei<p>\n";
    echo "<span class='alap'><b> Keres�kifejez�s:</b><br>\n";
    echo "Keresend�: $texttosearch";
    echo "; ford�t�s: ". dlookup($db,"name","tdtrans","did=$reftrans") . " </span><br>\n";

    list($res1, $res2, $res3, $res4)=advsearchbible($db,$texttosearch,$reftrans,$offset,$rows);
    if ($res2 > 0) {
        $begin=$res3+1;
        if ($begin + $res4 > $res2 ) {
           $end = $res2;
        } else {
           $end = $begin + $res4 -1;
        }
        echo "<p class='kiscim'> $begin - $end. tal�lat az �sszesen $res2-b�l.</p>";
        showverses($res1,"showchapter.php",$reftrans);
        showversesnextprev($script[0]."?texttosearch=$texttosearch&reftrans=$reftrans", $res2, $res3, $res4,"&");
    } else {
		$_GET['quotation'] = $texttosearch;
		include 'quote.php';
		
		echo "<br>".quotetion('verses')."<br>";
        //echo "Nincs tal�lat!<br>";
    }
  }



  portalfoot();

?>