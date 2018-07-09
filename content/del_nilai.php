<?php
include "conf/conf.php";
$nilai= $_GET['nilai'];
$sql=mysql_query("delete from normalisasi where id_normalisasi='$nilai'");
if($sql){
echo "<script type=\"text/javascript\">
	alert(\"Nilai Berhasil didelete\")
	window.location=\"home-admin.php?m=content&p=nilai-admin\";
	</script>"; 
}
//jika gagal
else{
echo "<script type=\"text/javascript\">
	alert(\"Nilai Gagal didelete\")
	window.location=\"home-admin.php?m=content&p=nilai-admin\";
	</script>";
}
?>