 <?php
include "conf/conf.php";

$login  = mysql_query("SELECT * FROM tbl_admin WHERE userid='$_POST[userid]' AND password='$_POST[pass]'");
$ketemu = mysql_num_rows($login);
$r      = mysql_fetch_array($login);

// Apabila username dan password ditemukan
if ($ketemu > 0){
  session_start();
  $_SESSION['userid']=$r['userid'];
  $_SESSION['pass']=$r['password'];
  $_SESSION['namaid']=$r['nama_id'];
  $_SESSION['level']=$r['level'];
  
  
	if($r['level']=="satpam"){
	  header('location:home-satpam.php');
	}else if($r['level']=="admin"){
	  header('location:home-admin.php');
	}else if($r['level']=="komandan"){
  header('location:home-komandan.php');
	}
}else{
  echo "<script type=\"text/javascript\">
	alert(\"Login gagal! Username & password sala! Silahkan Login Lagi\")
	window.location=\"index.php\";
	</script>";
}
?>