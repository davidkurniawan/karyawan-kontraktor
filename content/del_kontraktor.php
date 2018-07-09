<?php
include "conf/conf.php";
$nik= $_GET['nik'];
$sql=mysql_query("delete from tbl_kontraktor where nik='$nik'");
$data = mysql_query("DELETE FROM `normalisasi` WHERE id_kontraktor='$nik'");
if($sql){
echo "<script type=\"text/javascript\">
	alert(\"Data Kontraktor Berhasil didelete\")
	window.location=\"home-admin.php?m=content&p=create_kontraktor\";
	</script>"; 
}
//jika gagal
else{
echo "<script type=\"text/javascript\">
	alert(\"Data Kontraktor Gagal didelete\")
	window.location=\"home-admin.php?m=content&p=create_kontraktor\";
	</script>";
}
?>