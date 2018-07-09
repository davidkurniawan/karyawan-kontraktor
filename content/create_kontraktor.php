
<!-- Example DataTables Card-->
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">

      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Data Kontraktor</h5>
            <button class="close" type="button" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">×</span>
            </button>
          </div>
          <div class="modal-body">
            <div class="card card-login mx-auto mt-5">
              <div class="card-header">Create Kontraktor</div>
              <div class="card-body">
                <form action="" method="post">
                  <div class="form-group">
                    <label for="exampleInputEmail1">NIK</label>
                    <input class="form-control" type="text" name="nik" placeholder="NIK" required="required">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Nama</label>
                    <input class="form-control" type="text" id="name1" name="nama" placeholder="Nama Kontraktor" required="required">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Jabatan</label>
                    <input class="form-control" type="text" name="jabatan" placeholder="Jabatan" required="required">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Tanggal</label>
                    <input class="form-control" type="text" name="tanggal" placeholder="Tanggal" required="required">
                  </div>
                  <input name="tambah" type="submit" class="btn-primary" value="Submit" />
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
    <div class="modal fade" id="exampleModal1" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">

      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Data Kontraktor</h5>
            <button class="close" type="button" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">×</span>
            </button>
          </div>
          <div class="modal-body">
            <div class="card card-login mx-auto mt-5">
              <div class="card-header">Edit Kontraktor</div>
              <div class="card-body">
                <form action="" method="post">
                  <div class="form-group">
                    <label for="exampleInputEmail1">NIK</label>
                    <input class="form-control" type="text" id="nik" name="nik" placeholder="NIK" required="required">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Nama</label>
                    <input class="form-control" type="text" id="name" name="nama" placeholder="Nama Kontraktor" required="required">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Jabatan</label>
                    <input class="form-control" type="text" id="jabatan" name="jabatan" placeholder="Jabatan" required="required">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Tanggal</label>
                    <input class="form-control" type="text" id="tanggal" name="tanggal" placeholder="Tanggal" required="required">
                  </div>
                  <input name="edit" type="submit" class="btn-primary" value="Edit" />
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
    // echo "<pre>";
    // print_r($_POST);
    // echo "</pre>";
    // die; 
    ?>

<?php
include 'conf/conf.php'; 
error_reporting(0);
if(isset($_POST["tambah"])){

        $nama_satpam  = mysql_real_escape_string($_POST["nama"]);
        $nik          = $_POST["nik"];
        $jabatan      = $_POST["jabatan"];
        $tgl          = $_POST["tanggal"];
 
    
       
        $in=mysql_query("INSERT INTO `tbl_kontraktor`(`nik`, `nama`, `jabatan`, `tanggal`) VALUES  ('$nik', '$nama_satpam', '$jabatan','$tgl')");
    if($in){
  echo "<script type=\"text/javascript\">
  alert(\"Data Berhasil di input!\")
  window.location=\"home-admin.php?m=content&p=create_kontraktor\";
  </script>";
}else{
echo "<script type=\"text/javascript\">
  alert(\"ERROR ! Gagal di input!\")
  window.location=\"home-admin.php?m=content&p=create_kontraktor\";
  </script>";
  }
}
?>

<?php 
if(isset($_POST["edit"])){


        $in=mysql_query("UPDATE tbl_kontraktor SET
    nik='$_POST[nik]',
    nama='$_POST[nama]',
    jabatan='$_POST[jabatan]',
    tanggal='$_POST[tanggal]' WHERE nik='$_POST[nik]'");
    if($in){
  echo "<script type=\"text/javascript\">
  alert(\"Data Berhasil di input!\")
  window.location=\"home-admin.php?m=content&p=create_kontraktor\";
  </script>";
}else{
echo "<script type=\"text/javascript\">
  alert(\"ERROR ! Gagal di input!\")
  window.location=\"home-admin.php?m=content&p=create_kontraktor\";
  </script>";
  }
}
?>
    
      <div class="card mb-3 table-matrik">
        <div class="card-header" style="text-align: center;"><h3>
          <i class="fa fa-table"></i> Data Kontraktor</h3> </div>
           <a class="nav-link" data-toggle="modal" data-target="#exampleModal">
            <i class="fa fa-user-plus" aria-hidden="true"></i> Create</a>
        <div class="card-body">
          <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
              <thead>
                <tr>
                  <th>No</th>
                  <th>NIK</th>
                  <th>Nama</th>
                  <th>Jabatan</th>
                  <th>Tanggal</th>
                  <th>Aksi</th>
                </tr>
              </thead>


              <tbody>

                <?php
  $baris=1;
  $lihatmember = mysql_query("select * from tbl_kontraktor");
   while($member = mysql_fetch_array($lihatmember))
   {
     $warna= ($baris% 2 == 1) ? "#FFFFFF" : "#FDF2E1";
   ?>
   <?php
    echo "<tr bgcolor=\"".$warna."\">";
  ?>
    <td><?php echo $baris;?></td>
    <td><?php echo $member['nik'];?></td>
    <td><?php echo $member['nama'];?></td>
    <td><?php echo $member['jabatan'];?></td>
    <td><?php echo $member['tanggal'] ;?></td>
    <td colspan="2"><a class="modal-sb" data-toggle="modal" data-nik="<?php echo $member['nik'];?>" data-nama="<?php echo $member['nama'] ?>" data-jabatan="<?php echo $member['jabatan'] ?>" data-tanggal="<?php echo $member['tanggal'] ?>"><img src="image/edit.png" width="20" height="20" /></a><a href="home-admin.php?m=content&p=del_kontraktor&nik=<?php echo $member['nik'];?>"><img src="image/del.png" width="20" height="20" /></a></td>
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
