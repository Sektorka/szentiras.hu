<?

if(!isset($config)) {
    include("config.php");
    dbconnect();
}

   miniframehead("<a href=naptar.php class=minifrmh>Napt�r</a>",170,50);

echo '<span class=kiscim>Esem�nyek a k�vetkez� h�ten:</span><br>';

$ma=time();
$het=$ma+604800;

//1 �ra=3600
//1 nap=86400
//1 h�t=604800
//1 �v=31408000

$query_n="select id,cim from hirek where ok='i' and jog='' and (kezddatum>='$ma' and kezddatum<='$het') order by kezddatum limit 0,4";
if(!$lekerdez=mysql_query($query_n))
  echo "HIBA!<br>".mysql_error();
while(list($id,$cim)=mysql_fetch_row($lekerdez)) {
    echo "<a href=hirek.php?op=view&hid=$id class=catlinksmall>- $cim</a><br>";
}
   miniframefoot();

?>
