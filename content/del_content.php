<?php
include "conf/conf.php";
 // echo "<pre>";
 //        print_r($_GET);
 //        echo "</pre>";
 //        die;
$id_content = $_GET['content'];
$sql=mysql_query("delete from content where id_content='$id_content'");
if($sql){
echo "<script type=\"text/javascript\">
	alert(\"Content Berhasil didelete\")
	window.location=\"home-admin.php?m=content&p=content-admin\";
	</script>"; 
}
//jika gagal
else{
echo "<script type=\"text/javascript\">
	alert(\"Content Gagal didelete\")
	window.location=\"home-admin.php?m=content&p=content-admin\";
	</script>";
}
?>