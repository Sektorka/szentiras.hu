<?
global $admin;
   miniframeemptyhead("Admin",170,50);

if(strstr ($admin, 'h'))
  echo "<li class=catlinklarge><a href=hirek.php class=catlinksmall>H�rek</a></li>";

if(strstr ($admin, 'n'))
  echo "<li class=catlinklarge><a href=naptar.php class=catlinksmall>Esem�nynapt�r</a></li>";

echo "<li class=catlinklarge><a href=forum.php class=catlinksmall>F�rum</a></li>";

if(strstr ($admin, 'k'))
  echo "<li class=catlinklarge><a href=../keres/admin.php class=catlinksmall>Linkek szerkeszt�se</a></li>";

if(strstr ($admin, 'l'))
  echo "<li class=catlinklarge><a href=../lapszemle/adm/admin.php class=catlinksmall>Lapszemle szerkeszt�se</a></li>";

echo "<li class=catlinklarge><a href='regist.php?".SID."&modos=' class=catlinksmall>Adatok m�dos�t�sa</a></li>";
echo "<li class=catlinklarge><a href='index.php?".SID."&kilep=' class=catlinksmall>Kil�pes</a></li>";

   miniframefoot();

?>
