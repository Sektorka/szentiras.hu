<?php

function keresleftmenu(){
  leftmenuhead();
  leftmenugrouphead();
  leftmenuentry("Kezd�lap","/");
  leftmenuentry("Lapszemle","/lapszemle");
  leftmenugroupfoot();
  leftmenupause();
  leftmenugrouphead();
  leftmenuentry("Kateg�ri�k","/keres");
  leftmenuentry("R�szletes keres�s","/keres/advsearchform.php");
  leftmenuentry("Keres�s a lapok sz�veg�ben","/keres/fulltextsearchform.php");
  leftmenuentry("�j link","/keres/addnew.php");
  leftmenugroupfoot();
  leftmenupause();
  leftmenugrouphead();
  leftmenuentry("Egyh�zak","/keres/showcat.php?did=1");
  leftmenuentry("Lelki t�pl�l�k","/keres/showcat.php?did=9");
  leftmenuentry("Oktat�s","/keres/showcat.php?did=13");
  leftmenugroupfoot();
  leftmenupause();
  leftmenugrouphead();
  leftmenusearchform();
  leftmenugroupfoot();
  leftmenufoot();
}

function keresadminleftmenu(){
  leftmenuhead();
  leftmenugrouphead();
  leftmenuentry("Kateg�ri�k","/keres");
  leftmenuentry("R�szletes keres�s","/keres/advsearchform.php");
  leftmenuentry("Keres�s a lapok sz�veg�ben","/keres/fulltextsearchform.php");
  leftmenuentry("�j link","/keres/addnew.php");
  leftmenugroupfoot();
  leftmenupause();
  leftmenugrouphead();
  leftmenuentry("Moder�l�s","/keres/admin/modlinklist.php");
  leftmenuentry("Kateg�ria szerkeszt�se","/keres/admin/modcatlist.php");
  leftmenuentry("�j kateg�ria","/keres/admin/modcat.php?action=new");
  adminsearchform();
  leftmenugroupfoot();
  leftmenufoot();
}

function adminsearchform(){

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
echo" <form action='/keres/admin/modlinksearch.php' method='post'>\n";
echo" <input type=text name='search' size=10 maxlength=20 class='alap' class='alap'>&nbsp;\n";
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

function catlisthead($width) {

echo "<table border='0' cellpadding='0' cellspacing='2' width='".$width ."'>\n";
echo "<tr><td>\n";
echo "<table border='0' cellpadding='0' cellspacing='0' width='100%'>\n";
echo "<tr><td width='100%' height='30' align='center'>\n";
echo "<p class='cim'>Kereszt�ny Keres�</p>\n";
echo "</tr></td></table>\n";
echo "<table border='0' cellpadding='0' cellspacing='10' width='100%'>\n";
echo "<tr><td width='50%' valign='top'>\n";
}

function catlistmid() {
echo "</td><td width='50%' valign='top'>\n";
}

function catlistfoot() {
echo "</tr></td></table>\n";
echo "</td></tr></table>\n";
}



?>
