<?

   miniframehead("<a href=forum.php class=minifrmh>F�rum</a>",170,50);
   if(!isset($config)) {
       include("config.php");
       dbconnect();
   }
echo '<span class=kiscim>Legfrissebb t�mak�r�k:</span>';

       $query_t="select ftid,nev from ftemakor where jog='' order by datum desc limit 0,5";
       $temakorok=mysql_query($query_t);
       while(list($ftid,$nev_t)=mysql_fetch_row($temakorok)) {
           echo "<br><a href=forum.php?op=view&ftid=$ftid class=catlinksmall>- $nev_t</a>";
       }
       echo "<li class=catlinksmall><a href=forum.php class=catlinksmall title='Tov�bbi t�mak�r�k'>Tov�bbi t�mak�r�k</a></li>";

   miniframefoot();

?>
