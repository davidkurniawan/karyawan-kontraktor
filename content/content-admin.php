        <!-- Example DataTables Card-->
    <div class="modal fade" id="exampleModal1" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">

      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Content</h5>
            <button class="close" type="button" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">×</span>
            </button>
          </div>
          <div class="modal-body">
            <div class="card card-login mx-auto mt-5">
              <div class="card-header">Create Content</div>
              <div class="card-body">
                <form action="" method="post">
                  <input type="hidden" name="id" id="id">
                  <div class="form-group">
                    <label for="exampleInputEmail1">Head Title</label>
                    <input class="form-control" type="text" id="nik" name="title" placeholder="Head Title" required="required">
                  </div>
                  <div class="form-group">
                  <textarea class="form-control ckeditor" name="description" id="editor"></textarea>
                  <script>CKEDITOR.replace('desc');</script>
                  </div>
                  <input name="update" type="submit" class="btn-primary" value="tambah" required="required" />
                </form>
              </div>
            </div>
          </div>
          <div class="modal-footer">
            <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
          </div>
        </div>
      </div>
    </div>
      <!-- Example DataTables Card-->
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">

      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Content</h5>
            <button class="close" type="button" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">×</span>
            </button>
          </div>
          <div class="modal-body">
            <div class="card card-login mx-auto mt-5">
              <div class="card-header">Create Content</div>
              <div class="card-body">
                <form action="" method="post">
                  <div class="form-group">
                    <label for="exampleInputEmail1">Head Title</label>
                    <input class="form-control" type="text" id="nik" name="title" placeholder="Head Title" required="required">
                  </div>
                  <div class="form-group">
                  <textarea class="form-control" name="description" ></textarea>
                  </div>
                  <input name="tambah" type="submit" class="btn-primary" value="tambah" required="required" />
                </form>
              </div>
            </div>
          </div>
          <div class="modal-footer">
            <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
          </div>
        </div>
      </div>
    </div>
<?php
include 'conf/conf.php'; 
error_reporting(0);
if(isset($_POST["tambah"])){

        $title  = mysql_real_escape_string($_POST["title"]);
        $desc   = $_POST["description"];
 
    
       
        $in=mysql_query("INSERT INTO `content`(`head_title`, `description`) VALUES  ('".$title."', '".$desc."')");
        // echo "<pre>";
        // print_r($in);
        // echo "</pre>";
        // die;
        
    if($in == 0){
 echo "<script type=\"text/javascript\">
  alert(\"ERROR ! Gagal di input!\")
  window.location=\"home-admin.php?m=content&p=content-admin\";
  </script>";
}elseif(empty($title)){

  echo "<script type=\"text/javascript\">
  alert(\"ERROR ! Gagal di input!\")
  window.location=\"home-admin.php?m=content&p=content-admin\";
  </script>";
  }elseif(empty($desc)){
    echo "<script type=\"text/javascript\">
  alert(\"ERROR ! Gagal di input!\")
  window.location=\"home-admin.php?m=content&p=content-admin\";
  </script>";
  } else {
    echo "<script type=\"text/javascript\">
  alert(\"Berhasil Hore\")
  window.location=\"home-admin.php?m=content&p=content-admin\";
  </script>";
  }
}
?>
<?php
include 'conf/conf.php'; 
        // echo "<pre>";
        // print_r($_POST);
        // echo "</pre>";
        // die;
if(isset($_POST["update"])){

        $title  = mysql_real_escape_string($_POST["title"]);
        $desc   = $_POST["description"];
        $id     = $_POST['id'];
    
        $in=mysql_query("UPDATE content SET `head_title`='".$title."',`description`='".$desc."' WHERE id_content='".$id."'");
          // echo "<pre>";
          // print_r($in);
          // echo "</pre>";
          // die;
        
    if($in == 0){
 echo "<script type=\"text/javascript\">
  alert(\"ERROR ! Gagal di input!\")
  window.location=\"home-admin.php?m=content&p=content-admin\";
  </script>";
}elseif(empty($title)){

  echo "<script type=\"text/javascript\">
  alert(\"ERROR ! Gagal di input!\")
  window.location=\"home-admin.php?m=content&p=content-admin\";
  </script>";
  }elseif(empty($desc)){
    echo "<script type=\"text/javascript\">
  alert(\"ERROR ! Gagal di input!\")
  window.location=\"home-admin.php?m=content&p=content-admin\";
  </script>";
  } else {
    echo "<script type=\"text/javascript\">
  alert(\"Berhasil Hore\")
  window.location=\"home-admin.php?m=content&p=content-admin\";
  </script>";
  }
}
?>

      <div class="card mb-3 table-matrik">
        <div class="card-header" style="text-align: center;"><h3>
          <i class="fa fa-table"></i> Content</h3> </div>
           <a class="nav-link" data-toggle="modal" data-target="#exampleModal">
            <i class="fa fa-user-plus" aria-hidden="true"></i> Create</a>
        <div class="card-body">
          <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
              <thead>
                <tr>
                  <th>No</th>
                  <th>Head Title</th>
                  <th>Description</th>
                  <th>Aksi</th>
                </tr>
              </thead>


              <tbody>
                <?php
  $baris=1;
  $lihatmember = mysql_query("select * from content");
   while($member = mysql_fetch_array($lihatmember))
   {
     $warna= ($baris% 2 == 1) ? "#FFFFFF" : "#FDF2E1";
   ?>
   <?php
    echo "<tr bgcolor=\"".$warna."\">";
  ?>
    <td><?php echo $baris;?></td>
    <td><?php echo $member['head_title'];?></td>
    <td><?php echo $member['description'];?></td>
    <td colspan="2"><a class="modal-sb" data-toggle="modal" data-id="<?php echo $member['id_content'];?>" data-nik="<?php echo $member['head_title'];?>" data-desc="<?php echo $member['description'] ?>" ><img src="image/edit.png" width="20" height="20" /></a><a href="home-admin.php?m=content&p=del_content&content=<?php echo $member['id_content'];?>"><img src="image/del.png" width="20" height="20" /></a></td>
  </tr>
   <?php
   $baris++;
   }
  ?>
              </tbody>
            </table>
          </div>
        </div>
        <div class="card-footer small text-muted">Data Kontraktor</div>
      </div>