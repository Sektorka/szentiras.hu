<?

   miniframehead("<a href=hirek.php class=minifrmh>H�rek</a>",170,50);
   if(!isset($config)) {
       include("config.php");
       dbconnect();
   }
echo '<span class=kiscim>Legfrissebb h�rek:</span>';
$hirek=mysql_query("select id,cim from hirek where ok='i' and jog='' order by bekulddatum desc limit 0,4");
while(list($hid,$hcim)=mysql_fetch_row($hirek)) {
    echo "<br><a href=hirek.php?op=view&hid=$hid class=catlinksmall>- $hcim</a>";
}
echo "<br><a href=hirek.php class=link title='Tov�bbi h�rek'><small>>> Tov�bbi h�rek</small></a>";

   miniframefoot();

?>
