<?php
include "conf/conf.php";
$id_kriteria = $_GET['kriteria'];
$sql=mysql_query("delete from kriteria where id_kriteria='$id_kriteria'");
if($sql){
echo "<script type=\"text/javascript\">
	alert(\"Kriteria Berhasil didelete\")
	window.location=\"home-admin.php?m=content&p=kriteria-admin\";
	</script>"; 
}
//jika gagal
else{
echo "<script type=\"text/javascript\">
	alert(\"Kriteria Gagal didelete\")
	window.location=\"home-admin.php?m=content&p=kriteria-admin\";
	</script>";
}
?>