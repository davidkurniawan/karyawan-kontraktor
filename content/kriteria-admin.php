
<!-- Example DataTables Card-->
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">

      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Data Kriteria</h5>
            <button class="close" type="button" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">×</span>
            </button>
          </div>
          <div class="modal-body">
            <div class="card card-login mx-auto mt-5">
              <div class="card-header">Create Kriteria</div>
              <div class="card-body">
                <form action="" method="post">
                 
                  <div class="form-group">
                    <label for="exampleInputPassword1">Nama Kriteria</label>
                    <input class="form-control" type="text" name="nama_kriteria" placeholder="Nama Kriteria" required="required" />
                  </div>
                  <div class="form-group">
                      <label for="exampleFormControlSelect1">Type</label>
                      <select class="form-control" id="Type" name="type" required="required">
                        <option value="Benefit">Benefit</option>
                      </select>
                    </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Bobot</label>
                    <input class="form-control" type="text" name="bobot" placeholder="Bobot" required="required" />
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

                    <input class="form-control" type="hidden" id="nilai" name="nilai" required="required" />
                    <input class="form-control" type="hidden" id="id" name="id" required="required" />

                  <div class="form-group">
                    <label for="exampleInputEmail1">Nama Kriteria</label>
                    <input class="form-control" type="text" id="name" name="nama_kriteria" required="required" />
                  </div>
                  <div class="form-group">
                      <label for="exampleFormControlSelect1">Type</label>
                      <select class="form-control" id="Type" name="type" required="required">
                        <option value="Benefit">Benefit</option>
                      </select>
                    </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Bobot</label>
                    <input class="form-control" type="text" id="bobot" name="bobot" required="required" />
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
include 'conf/conf.php'; 
if(isset($_POST["tambah"])){
        // input data kriteria baru
        $kriteria   = mysql_real_escape_string($_POST["nama_kriteria"]);
        $type  = $_POST["type"];
        $bobot = $_POST["bobot"];
         
       $in = mysql_query("INSERT INTO kriteria VALUES ('', '$kriteria', '$type','$bobot')");
       if($in){
  echo "<script type=\"text/javascript\">
  alert(\"Data Berhasil di input!\")
  window.location=\"home-admin.php?m=content&p=kriteria-admin\";
  </script>";
}else{
echo "<script type=\"text/javascript\">
  alert(\"ERROR ! Gagal di input!\")
  window.location=\"home-admin.php?m=content&p=kriteria-admin\";
  </script>";
  }
}
?>
<?php 
    // echo "<pre>";
    // print_r($_POST);
    // echo "</pre>";
    // die; 
    ?>
<?php 
if(isset($_POST["edit"])){
        $nama_kriteria  = $_POST["nama_kriteria"];
        $type = $_POST["type"];
        $bobot  = $_POST["bobot"];
        $id  = $_POST["id"];

        $in=mysql_query("UPDATE `kriteria` SET `id_kriteria`='$id',`nama_kriteria`='$nama_kriteria',`type_kriteria`='$type',`bobot`='$bobot' WHERE id_kriteria='$id'");
    
        $nilaisql = mysql_query("UPDATE `bobot` SET ".$_POST['nilai']."='$bobot' WHERE ID=1");
    if($in){
  echo "<script type=\"text/javascript\">
  alert(\"Data Berhasil di input!\")
  window.location=\"home-admin.php?m=content&p=kriteria-admin\";
  </script>";
}else{
echo "<script type=\"text/javascript\">
  alert(\"ERROR ! Gagal di input!\")
  window.location=\"home-admin.php?m=content&p=kriteria-admin\";
  </script>";
  }
}
?>


<div class="card mb-3 table-matrik">
        <div class="card-header" style="text-align: center;"><h3>
          <i class="fa fa-table"></i> TABLE KRITERIA</h3> </div>
          <a class="nav-link" data-toggle="modal" data-target="#exampleModal">
            <i class="fa fa-user-plus" aria-hidden="true"></i> Create</a>
        <div class="card-body">
          <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
              <thead>
                <tr>
                  <th>No</th>
                  <th>ID Kriteria</th>
                  <th>Nama Kriteria</th>
                  <th>Type</th>
                  <th>Bobot</th>
                  <th>Akis</th>
                </tr>
              </thead>
              <tbody>
              <?php
                $baris=1;
                $lihatmember = mysql_query("select * from kriteria");
                $lihatbobot = mysql_query("SELECT * FROM `bobot` WHERE 1");
                  while($bobot = mysql_fetch_array($lihatbobot)){
                 while($member = mysql_fetch_array($lihatmember)){
                   $warna= ($baris% 2 == 1) ? "#FFFFFF" : "#FDF2E1";
                 ?>
                 <?php
                  echo "<tr bgcolor=\"".$warna."\">";
                ?>
                  <td><?php echo $baris;?></td>
                  <td><?php echo $member['id_kriteria'];?></td>
                  <td><?php echo $member['nama_kriteria'];?></td>
                  <td><?php echo $member['type_kriteria'];?></td>
                  <td><?php echo $bobot[$baris];?></td>
                  <td><a class="modal-sb" data-toggle="modal" data-nama="<?php echo $member['nama_kriteria'];?>" data-bobot="<?php echo $bobot[$baris];?>" data-nilai="<?php echo "nilai".$baris;?>" data-id="<?php echo $member['id_kriteria'];?>"><img src="image/edit.png" width="20" height="20" /></a><a href="home-admin.php?m=content&p=del_kriteria&kriteria=<?php echo $member['id_kriteria'];?>"><img src="image/del.png" width="20" height="20" /></a></td>
                </tr>
                 <?php
                 $baris++;
                  }
                 }
                ?>
              </tbody>
            </table>
          </div>
        </div>
        <div class="card-footer small text-muted">TABLE KRITERIA</div>
      </div>
