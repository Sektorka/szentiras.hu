<?php

function bibleleftmenu(){
  leftmenuhead();
  leftmenugrouphead();
//  leftmenuentry("Kezd�lap","/");
//  leftmenuentry("Lapszemle","/lapszemle");
//  leftmenuentry("Keres�","/keres");
//  leftmenuentry("Kur�r","/kurir");
  leftmenugroupfoot();
  leftmenupause();
  leftmenugrouphead();
  leftmenuentry("Bibliaolvas�s","/biblia/showbible.php");
  leftmenuentry("Keres�s a Bibli�ban","/biblia/searchbibleform.php");
  leftmenugroupfoot();
  leftmenupause();
  leftmenugrouphead();
  leftmenuentry("Katolikus ford�t�s","/biblia/showtrans.php?reftrans=1");
  leftmenuentry("Protest�ns ford�t�s","/biblia/showtrans.php?reftrans=2");
  leftmenuentry("G�r�g �jsz�vets�gi honlap","http://www.ujszov.hu/");
  leftmenuentry("�jsz�vets�g: hangf�jlok","/biblia/hang/");
  leftmenuentry("A templom egere","http://templom-egere.kereszteny.hu/");
  leftmenugroupfoot();
  leftmenupause();
  leftmenugrouphead();
  leftmenubiblesearchform();
  leftmenugroupfoot();
  leftmenufoot();
}


function leftmenubiblesearchform(){

echo"                <tr>\n";
echo"                  <td>\n";
echo"                    <table border='0' cellpadding='0' cellspacing='0' width='180'>\n";
echo"                    <tr>\n";
echo"                      <td height='6'><img src='/img/clear.gif'></td>\n";echo"                    </tr>\n";
echo"                    </table>\n";
echo"                  </td>\n";
echo"                </tr>\n";
echo"                <tr>\n";
echo"                  <td>\n";
echo"                    <table border='0' cellpadding='0' cellspacing='0' width='180'>\n";
echo"                    <tr>\n";
echo"                      <td width='10'>&nbsp;</td>\n";
echo"                      <td width='170' align='left'>\n";
echo" <form action='/biblia/searchbible.php' method='get'>\n";
echo" <input type=text name='texttosearch' size=10 maxlength=20 class='alap'>&nbsp;\n";
echo "<input type=hidden name='reftrans' value= '1'>\n";
echo" <input type='image' src='/img/keress.jpg' border=0>\n";
echo" </form>\n";
echo"                    </tr>\n";
echo"                    </table>\n";
echo"                  </td>\n";
echo"                </tr>\n";
echo"                <tr>\n";
echo"                  <td>\n";
echo"                    <table border='0' cellpadding='0' cellspacing='0' width='180'>\n";
echo"                    <tr>\n";
echo"                      <td height='6'><img src='/img/clear.gif'></td>\n";echo"                    </tr>\n";
echo"                    </table>\n";
echo"                  </td>\n";
echo"                </tr>\n";
}

?>