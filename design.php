<?php

function portalhead($title){
header('Content-type: text/html; charset=utf-8'); 
echo"<html>\n";
echo "<head>\n";
echo"<meta http-equiv='Content-Type' content='text/html; charset=UTF-8'>\n";
echo"<meta http-equiv='Content-Script-Type' content='text/javascript'>\n";

echo "<SCRIPT>\n";
echo "<!--\n";
echo "\n";
echo "function newImage(arg) {\n";
echo "    if (document.images) {\n";
echo "        rslt = new Image();\n";
echo "        rslt.src = arg;\n";
echo "        return rslt;\n";
echo "    }\n";
echo "}\n";
echo "\n";
echo "function changeImages() {\n";
echo "    if (document.images && (preloadFlag == true)) {\n";
echo "        for (var i=0; i<changeImages.arguments.length; i+=2) {\n";
echo "            document[changeImages.arguments[i]].src = changeImages.arguments[i+1];\n";
echo "        }\n";
echo "    }\n";
echo "}\n";
echo "\n";
echo "var preloadFlag = false;\n";
echo "function preloadImages() {\n";
echo "    if (document.images) {\n";
echo "        nav_hor_02_over = newImage(\"/img/nav_hor_02-over.gif\");\n";
echo "        nav_hor_03_over = newImage(\"/img/nav_hor_03-over.gif\");\n";
echo "        nav_hor_03_nav_hor_04_over = newImage(\"/img/nav_hor_03-nav_hor_04_over.gif\");\n";
echo "        nav_hor_04_over = newImage(\"/img/nav_hor_04-over.gif\");\n";
echo "        nav_hor_04_nav_hor_05_over = newImage(\"/img/nav_hor_04-nav_hor_05_over.gif\");\n";
echo "        nav_hor_05_over = newImage(\"/img/nav_hor_05-over.gif\");\n";
echo "        nav_hor_05_nav_hor_06_over = newImage(\"/img/nav_hor_05-nav_hor_06_over.gif\");\n";
echo "        nav_hor_06_over = newImage(\"/img/nav_hor_06-over.gif\");\n";
echo "        preloadFlag = true;\n";
echo "    }\n";
echo "}\n";
echo "function ujablak(lap) {window.open(lap, 'Keres-info','width=400,height=250')};\n";
echo "// -->\n";
echo "</SCRIPT>\n";


if (!empty($title)) {
  $titlestring = "Magyar Keresztény Portál - $title\n";
} else {
  $titlestring = "Magyar Keresztény Portál\n";
}
echo"<title>$titlestring</title>\n";
echo"<link rel='stylesheet' href='/include/style.css'>\n";
echo"</head>\n";

echo"<body bgcolor='#FFFFFF' topmargin='0' leftmargin='0' ONLOAD='preloadImages();'>\n";

echo "<script type=\"text/javascript\">

  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-36302080-1']);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();

</script>";

echo"<table border='0' cellpadding='0' cellspacing='0' width='750'>\n";
echo"  <tr>\n";
echo"    <td valign='top'>\n";
   tophead();
echo"    </td>\n";
echo"  </tr>\n";
echo"  <tr>\n";
echo"    <td valign='top'>\n";
   topmenu();
echo"    </td>\n";
echo"  </tr>\n";
echo"  <tr>\n";
echo"    <td>\n";
echo"      <table border='0' cellpadding='0' cellspacing='0' width='750'>\n";
echo"      <tr>\n";
echo"        <td width='195' valign='top' background='/img/vmenupausebg2.jpg'>\n";
}


function tophead(){
srand((double) microtime()*100000000);
$nm = rand(1,4);
echo"   <table border='0' cellpadding='0' cellspacing='0' width='750'>\n";
echo"   <tr>\n";
echo"      <td width='29'>&nbsp;</td>\n";
echo"      <td bgcolor='#373A8D' width='21'>&nbsp;</td>\n";
echo"      <td width='700' height='85'>\n";
echo"        <table width='700' border='0' cellpadding='5' cellspacing='0'>\n";
echo"        <tr>\n";
echo"          <td> \n";
echo"          <img src='/img/logo". $nm . ".jpg' width='690' height='108' align='middle' alt='Logo'>\n";
echo"          </td></tr></table>\n";
echo"      </td>\n";
echo"   </tr>\n";
echo"   </table>\n";
}

function topmenu(){
echo"    <table border='0' cellpadding='0' cellspacing='0' width='750'>\n";
echo"    <tr>\n";
echo"      <td background='/img/hmenubg.jpg' width='29' height='35'>&nbsp;</td>\n";
echo"      <td background='/img/crossbg.gif' width='21'>&nbsp;</td>\n";
echo"      <td valign='top' background='/img/hmenubg.jpg' width='400'>";
echo"      <span class='feher'>&nbsp;&nbsp;&nbsp;Magyar Keresztény Portál</span>";
echo"      </td>\n";
echo"      <td background='/img/hmenubg.jpg' width='103'>";

#2011.12.08. - csokkentett funkcionalitas miatt kikommentezve
/*
echo "<TABLE WIDTH=103 BORDER=0 CELLPADDING=0 CELLSPACING=0>\n";
echo "    <TR>\n";
echo "        <TD COLSPAN=5 background='/img/hmenubg.jpg'>\n";
echo "            &nbsp;</TD>\n";
echo "    </TR>\n";
echo "    <TR>\n";
echo "        <TD>\n";
echo "            <A HREF=\"/lapszemle\"\n";
echo "                ONMOUSEOVER=\"changeImages('nav_hor_03', '/img/nav_hor_03-over.gif'); return true;\"\n";
echo "                ONMOUSEOUT=\"changeImages('nav_hor_03', '/img/nav_hor_03.gif'); return true;\">\n";
echo "                <IMG NAME=\"nav_hor_03\" SRC=\"/img/nav_hor_03.gif\" WIDTH=60 HEIGHT=20 BORDER=0></A></TD>\n";
echo "        <TD>\n";
echo "            <A HREF=\"/keres\"\n";
echo "                ONMOUSEOVER=\"changeImages('nav_hor_03', '/img/nav_hor_03-nav_hor_04_over.gif', 'nav_hor_04', '/img/nav_hor_04-over.gif'); return true;\"\n";
echo "                ONMOUSEOUT=\"changeImages('nav_hor_03', '/img/nav_hor_03.gif', 'nav_hor_04', '/img/nav_hor_04.gif'); return true;\">\n";
echo "                <IMG NAME=\"nav_hor_04\" SRC=\"/img/nav_hor_04.gif\" WIDTH=43 HEIGHT=20 BORDER=0></A></TD>\n";
echo "    </TR>\n";
echo "</TABLE>\n";
*/
echo "</td>\n";
echo"      <td background='/img/hmenubg.jpg' width='197'>&nbsp;</td>\n";
echo"    </tr>\n";
echo"    </table>\n";
}

function leftmenuhead() {
echo"        <table border='0' cellpadding='0' cellspacing='0' width='195'>\n";
echo"        <tr>\n";
echo"          <td width='15'></td>\n";
echo"          <td width='180' background='/img/vmenupausebg.jpg'>\n";
echo"            <table border='0' cellpadding='0' cellspacing='0' width='180'>\n";
echo"            <tr>\n";
echo"               <td height='2'></td>\n";
echo"            </tr>\n";
}

function leftmenugrouphead() {
echo"            <tr>\n";
echo"              <td background='/img/vmenugrouphead.jpg' height='10'>&nbsp;</td>\n";
echo"            </tr>\n";
echo"            <tr>\n";
echo"              <td background='/img/vmenubg.gif' valign='top' align='left'>\n";
echo"                <table border='0' cellpadding='0' cellspacing='0' width='180'>\n";
}

function leftmenuentry($text,$link){

echo"                <tr>\n";
echo"                  <td>\n";
echo"                    <table border='0' cellpadding='0' cellspacing='0' width='180'>\n";
echo"                    <tr>\n";
echo"                      <td width='40'>&nbsp;</td>\n";
echo"                      <td background='/img/vmenucolorbg.gif' width='140' align='left'>\n";
echo"                         <a href='". $link ."' class='menulink'>$text</a></td>\n";
echo"                    </tr>\n";
echo"                    </table>\n";
echo"                  </td>\n";
echo"                </tr>\n";
echo"                <tr>\n";
echo"                  <td>\n";
echo"                    <table border='0' cellpadding='0' cellspacing='0' width='180'>\n";
echo"                    <tr>\n";
echo"                      <td background='/img/vmenupausebg.jpg' height='3'><img src='/img/clear.gif'></td>\n";
echo"                    </tr>\n";
echo"                    </table>\n";
echo"                  </td>\n";
echo"                </tr>\n";
}

function leftmenusearchform(){

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
echo" <form action='/keres/quicksearch.php' method='post'>\n";
echo" <input type=text name='search' size=10 maxlength=20 class='alap'>&nbsp;\n";
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


function leftmenugroupfoot() {
echo"                </table>\n";
echo"              </td>\n";
echo"            </tr>\n";
}

function leftmenupause() {
echo"            <tr>\n";
echo"              <td height='25'>&nbsp;</td>\n";
echo"            </tr>\n";
}


function leftmenufoot(){
echo"            <tr>\n";
echo"              <td height='100%' valign='bottom'>&nbsp;</td>\n";
echo"            </tr>\n";
echo"            </table>\n";
echo"          </td>\n";
echo"        </tr>\n";
echo"        </table>\n";
echo"        </td>\n";
echo"        <td width='555' valign='top'>\n";
echo"          <table border='0' cellpadding='0' cellspacing='0' width='555'>\n";
echo"          <tr>\n";
echo"            <td width='25'></td>\n";
echo"            <td width='530'>\n";
echo"            <table border='0' cellpadding='0' cellspacing='0' width='530'>\n";
echo"            <tr>\n";
echo"              <td height='25'></td>\n";
echo"            </tr>\n";
echo"            <tr>\n";
echo"              <td>\n";
}

function leftmenu(){
  leftmenuhead();
  leftmenugrouphead();
  leftmenuentry("Biblia","/biblia");
  leftmenuentry("Prédikációk","/preka");
  leftmenugroupfoot();
  leftmenupause();
  leftmenupause();
  leftmenupause();
  leftmenupause();
  leftmenupause();
  leftmenupause();
  leftmenupause();
  leftmenupause();
  leftmenupause();
  leftmenupause();
#  leftmenugrouphead();
#  leftmenugroupfoot();
#  leftmenupause();
#  leftmenugrouphead();
#  leftmenusearchform();
#  leftmenugroupfoot();
  leftmenufoot();
}

function footer() {
echo"    <tr>\n";

echo"        <td valign='top'>\n";
echo"        <table border='0' cellpadding='0' cellspacing='0' width='750'>\n";

echo"        <tr>\n";
echo"          <td width='295' height='3' valign='top'>\n";
echo"            <table border='0' cellpadding='0' cellspacing='0' width='295'>\n";
echo"            <tr>\n";
echo"              <td width='15' valign='top'>&nbsp;</td>\n";
echo"              <td width='280' height='3' valign='top' background='/img/vmenupausebg.jpg'>&nbsp;\n";
echo"              </td>";
echo"            </tr>\n";
echo"            </table>";
echo"          <td width='455' height='3' valign='center' background='/img/pixelhorborder.gif'>&nbsp;";
echo"          </td>";
echo"        </tr>\n";
echo"        <tr>\n";
echo"        <td width='295' valign='top'>\n";
echo"        <table border='0' cellpadding='0' cellspacing='0' width='295'>\n";
echo"        <tr>\n";
echo"          <td width='15' valign='top'></td>\n";
echo"          <td width='280' valign='top' background='/img/vmenupausebg.jpg'>\n";
echo"            <table border='0' cellpadding='0' cellspacing='0' width='280'>\n";
echo"            <tr>\n";
echo"               <td height='2'></td>\n";
echo"            </tr>\n";
echo"            <tr>\n";
echo"              <td background='/img/vmenubg.gif' valign='top' align='left'>\n";
echo"                <table border='0' cellpadding='0' cellspacing='0' width='280'>\n";
echo"                <tr>\n";
echo"                  <td>\n";
echo"                    <table border='0' cellpadding='0' cellspacing='0' width='280'>\n";
echo"                    <tr>\n";
echo"                      <td width='40'>&nbsp;</td>\n";
echo"                      <td background='/img/vmenucolorbg.gif' width='240' align='left'>\n";
echo"                      <span class='feher'>&copy; </span>";
echo"                      <a href='http://www.kereszteny.hu/mkie' class='menulink'>MKIE</a>";
echo"                      <span class='feher'> - </span>";
echo"                      <a href='http://www.oki-iroda.hu' class='menulink'>ÖKI</a>";
echo"                      <span class='feher'> - </span>";
echo"                      <a href='http://kim.katolikus.hu' class='menulink'>KIM</a>";
echo"                      <span class='feher'> 2001-2010.<br>Minden jog fenntartva.</span>";
echo"                      </td>\n";
echo"                    </tr>\n";
echo"                    </table>\n";
echo"                  </td>\n";
echo"                </tr>\n";
echo"                <tr>\n";
echo"                  <td>\n";
echo"                    <table border='0' cellpadding='0' cellspacing='0' width='280'>\n";
echo"                    <tr>\n";
echo"                      <td background='/img/vmenupausebg.jpg' height='3'><img src='/img/clear.gif'></td>\n";
echo"                    </tr>\n";
echo"                    </table>\n";
echo"                  </td>\n";
echo"                </tr>\n";
echo"                </table>\n";
echo"              </td>\n";
echo"            </tr>\n";
echo"            </table>\n";
echo"          </td>\n";
echo"        </tr>\n";
echo"        </table>\n";
echo"        </td>\n";
echo"        <td align='center'>\n";
echo"        <span class='alap'>Tartalmi kérdések: </span> <a href='mailto:info@kereszteny.hu' class='link'>Info</a><span class='alap'> - Technikai problémák: </span> <a href='mailto:webmaster@kereszteny.hu' class='link'>Webmaster</a><br>\n";
echo"        <a href='/impresszum.php' class='link'>Impresszum</a>\n";
echo"        </td>\n";
echo"        </tr></table></td>";
echo"      </tr>\n";

}


function portalfoot(){
echo"              </td>\n";
echo"            </tr>\n";
echo"            </table>\n";
echo"          </td>\n";
echo"        </tr>\n";
echo"        </table>\n";
echo"      </td>\n";
echo"    </tr>\n";
echo"    </table>\n";
echo"  </td>\n";
echo"</tr>\n";
footer();
echo"</table>\n";
echo"</body>\n";
echo"</html>\n";
}


function textframehead(){

echo"<table width='100%' border=0 cellpadding=1 cellspacing=1>\n";
echo"<tr>\n";
echo"  <td width='100%'>\n";
echo"      <table width='100%' border=0 cellpadding=0 cellspacing=0>\n";
echo"      <tr>\n";
echo"        <td width='8'>&nbsp;</td>\n";
echo"        <td width='80%' height='13' valign='center' background='/img/horborder2.gif'>&nbsp;</td>\n";
echo"        <td width='20%'>&nbsp;</td>\n";
echo"      </tr>\n";
echo"      </table>\n";
echo"  </td>\n";
echo"</tr>\n";
echo"<tr>\n";
echo"  <td width='100%'>\n";
echo"    <table width='100%' border=0 cellpadding=0 cellspacing=0>\n";
echo"    <tr>";
echo"      <td width='21' background='/img/pixelborder.gif'>&nbsp;</td>\n";
echo"      <td width='0*'>\n";
}

function textframefoot(){
echo"      </td>\n";
echo"      <td width ='21' background='/img/pixelborder.gif'>&nbsp;</td>\n";
echo"      </tr></table></td>\n";
echo"</tr>\n";
echo"<tr>\n";
echo"  <td width='100%'>\n";
echo"         <table width='100%' border=0  cellpadding=0 cellspacing=0>\n";
echo"         <tr>\n";
echo"         <td width='20%'>&nbsp;</td>\n";
echo"         <td width='80%' height='13' background='/img/horborder2.gif'>&nbsp;\n";
echo"         <td width='8'>&nbsp;</td>\n";
echo"         </tr></table>\n";
echo"  </td>\n";
echo"</tr>\n";
echo"</table>\n";
}

function miniframehead($title, $framewidth,$titlewidth){
echo"<table width='" . $framewidth . "' border=0>\n";
echo"<tr>\n";
echo"  <td width='21' background='/img/pixelborder.gif'>&nbsp;</td>\n";
echo"  <td width='".($framewidth-42)."'>\n";
echo"    <table width='".($framewidth-42)."' border=0 cellspacing=0 cellpadding=0>\n";
echo"    <tr>\n";
echo"      <td width='40' height='22' background='/img/miniframehead1.jpg'>&nbsp;</td>\n";
echo"      <td width='".$titlewidth."' height='22' valign='center' background='/img/miniframehead2.jpg'><span class='minifrmh'>&nbsp;" . $title . "</span></td>\n";
echo"      <td width='24' height='22' background='/img/miniframehead3.jpg'>&nbsp;</td>\n";
echo"      <td width='".($framewidth-$titlewidth-106)."' height='22' background='/img/miniframehead4.jpg'>&nbsp;</td>\n";
echo"    </tr>\n";
echo"    </table>\n";
}


function miniframeemptyhead($title, $framewidth,$titlewidth){
echo"<table width='" . $framewidth . "' border=0>\n";
echo"<tr>\n";
echo"  <td width='21' background='/img/pixelborder.gif'>&nbsp;</td>\n";
echo"  <td width='".($framewidth-42)."'>\n";
echo"    <table width='".($framewidth-42)."' border=0 cellspacing=0 cellpadding=0>\n";
echo"    <tr>\n";
echo"      <td width='40' height='22' background='/img/miniframehead21.jpg'>&nbsp;</td>\n";
echo"      <td width='".$titlewidth."' height='22' valign='center' background='/img/miniframehead22.jpg'><span class='minifrmeh'>&nbsp;" . $title . "</span></td>\n";
echo"      <td width='24' height='22' background='/img/miniframehead23.jpg'>&nbsp;</td>\n";
echo"      <td width='".($framewidth-$titlewidth-106)."' height='22' background='/img/miniframehead4.jpg'>&nbsp;</td>\n";
echo"    </tr>\n";
echo"    </table>\n";
}


function miniframefoot(){
echo"  </td>\n";
echo"  <td width ='21' background='/img/pixelborder.gif'>&nbsp;</td>\n";
echo"</tr>\n";
echo"</table>\n";
}

function portalhead_1($title){
echo"<html><head>\n";
echo"<meta http-equiv='Content-Type' content='text/html; charset=iso-8859-2'>\n";
if (!empty($title)) {
  $titlestring = "Magyar Keresztény Portál - $title\n";
} else {
  $titlestring = "Magyar Keresztény Portál\n";
}
echo"<title>$titlestring</title>\n";
echo"<link rel='stylesheet' href='/include/style.css'>\n";
echo"</head>\n";
echo"<body bgcolor='#FFFFFF' topmargin='0' leftmargin='0'>\n";

echo"<table border='0' cellpadding='0' cellspacing='0' width='750'>\n";
echo"  <tr>\n";
echo"    <td valign='top'>\n";
   tophead();
echo"    </td>\n";
echo"  </tr>\n";
echo"  <tr>\n";
echo"    <td valign='top'>\n";
   topmenu();
echo"    </td>\n";
echo"  </tr>\n";
echo"  <tr>\n";
echo"    <td>\n";
echo"      <table border='0' cellpadding='0' cellspacing='0' width='750'>\n";
echo"      <tr>\n";
echo"        <td width='55' valign='top' background='/img/vmenupausebg2.jpg'>\n";
}


function leftmenuhead_1() {
echo"        <table border='0' cellpadding='0' cellspacing='0' width='55'>\n";
echo"        <tr>\n";
echo"          <td width='15'></td>\n";
echo"          <td width='40' background='/img/vmenupausebg.jpg'>\n";
echo"            <table border='0' cellpadding='0' cellspacing='0' width='40'>\n";
echo"            <tr>\n";
echo"               <td height='2'></td>\n";
echo"            </tr>\n";
}


function leftmenufoot_1(){
echo"            <tr>\n";
echo"              <td height='100%' valign='bottom'>&nbsp;</td>\n";
echo"            </tr>\n";
echo"            </table>\n";
echo"          </td>\n";
echo"        </tr>\n";
echo"        </table>\n";
echo"        </td>\n";
echo"        <td width='695' valign='top'>\n";
echo"          <table border='0' cellpadding='0' cellspacing='0' width='695'>\n";
echo"          <tr>\n";
echo"            <td width='25'></td>\n";
echo"            <td width='670'>\n";
echo"            <table border='0' cellpadding='0' cellspacing='0' width='670'>\n";
echo"            <tr>\n";
echo"              <td height='25'></td>\n";
echo"            </tr>\n";
echo"            <tr>\n";
echo"              <td>\n";
}



?>
