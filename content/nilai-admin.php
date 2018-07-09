<?php
  function getNama($id){
    $q =mysql_query("SELECT * From tbl_kontraktor where nik= '$id' order by nik asc");
    $d = mysql_fetch_array($q);
    return $d['nama'];
  }
  ?>
  <?php 
                        include 'conf/conf.php'; 
                        ?>
<!-- Example DataTables Card-->
    <div class="modal fade" id="exampleModal1" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">

      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">FORM CREATE NILAI KONTRAKTOR</h5>
            <button class="close" type="button" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">×</span>
            </button>
          </div>
          <div class="modal-body">
            <div class="card card-login mx-auto mt-5">
              <div class="card-header">Create Nilai Kontraktor</div>
              <div class="card-body">
                <form action="" method="post">
                  <div class="form-group">
                    <input type="text" name="nilai_admin" id="nilai_kontrak" class="form-control" readonly> 
                  </div>
                  <input type="text" name="id_kontraktor" id="id_kontraktor" value="" style="display: none;">
                    <?php
                            $no=1;
                      $query = "select * from kriteria";
                      $result = mysql_query($query);
                      while ($row = mysql_fetch_array($result)){
                      ?>
                            <div class="form-group">
                              <label for="exampleInputPassword1">C<?php echo $no;?>. <?php echo ucwords($row['nama_kriteria']);?></label>
                              <input type="text" class="form-control" id="nilai<?php echo $no; ?>" name="nilai[]" size="5" onkeyup="angka(this);" maxlength="3" required="required">
                            </div>
                      <?php
                      $no++;
                      }
                      ?>
                  <input name="Edit" type="submit" class="btn-primary" value="Edit" />
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
if(isset($_POST["Edit"])){
        $id_kontraktor  = $_POST["id_kontraktor"];
        $nilai1  = $_POST["nilai"];
    //         echo "<pre>";
    // print_r($_POST["nilai"]);
    // echo "</pre>";
    // die; 
    //     $cekdata="select id_kontraktor from normalisasi where id_kontraktor='$id_kontraktor'"; 
    // $ada=mysql_query($cekdata) or die(mysql_error()); 
    // if(mysql_num_rows($ada)>0) 
    // { 
    // echo "<script type=\"text/javascript\">
    // alert(\"NIK sudah terinput, silahkan ulangi lagi!\")
    // window.location=\"home-admin.php?m=content&p=nilai-admin\";
    // </script>"; 
    // } else {
        mysql_query("UPDATE `normalisasi` SET `nilai1`='$nilai1[0]',`nilai2`='$nilai1[1]',`nilai3`='$nilai1[2]',`nilai4`='$nilai1[3]',`nilai5`='$nilai1[4]',`nilai6`='$nilai1[5]',`nilai7`='$nilai1[6]',`nilai8`='$nilai1[7]',`nilai9`='$nilai1[8]',`nilai10`='$nilai1[9]',`nilai11`='$nilai1[10]',`nilai12`='$nilai1[11]',`nilai13`='$nilai1[12]',`nilai14`='$nilai1[13]',`nilai15`='$nilai1[14]',`nilai16`='$nilai1[15]',`nilai17`='$nilai1[16]',`nilai18`='$nilai1[17]',`nilai19`='$nilai1[18]',`nilai20`='$nilai1[19]',`nilai21`='$nilai1[20]' WHERE id_kontraktor='$id_kontraktor'");
    // }
  echo "<script type=\"text/javascript\">
  alert(\"Data Berhasil di input!\")
  window.location=\"home-admin.php?m=content&p=nilai-admin\";
  </script>";
}
?>
<!-- Example DataTables Card-->
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">

      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">FORM CREATE NILAI KONTRAKTOR</h5>
            <button class="close" type="button" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">×</span>
            </button>
          </div>
          <div class="modal-body">
            <div class="card card-login mx-auto mt-5">
              <div class="card-header">Create Nilai Kontraktor</div>
              <div class="card-body">
                <form action="" method="post">
                  <div class="form-group">
                    <select class="form-control" name="id_kontraktor" required="required">
                    <option value="0" selected="selected">Pilih Kontraktor</option>
                        <?php 
                        include 'conf/conf.php'; 
                        $query=mysql_query("select * from tbl_kontraktor order by nik asc");
                        
                        while($row=mysql_fetch_array($query))
                        {
                          ?><option value="<?php echo $row['nik']; ?>"><?php echo $row['nik']; echo ' - '.$row['nama'];?></option><?php 
                        }
                        ?>
                    </select>
                  </div>
                    <?php
                            $no=1;
                      $query = "select * from kriteria";
                      $result = mysql_query($query);
                      while ($row = mysql_fetch_array($result)){
                      ?>
                            <div class="form-group">
                              <label for="exampleInputPassword1">C<?php echo $no;?>. <?php echo ucwords($row['nama_kriteria']);?></label>
                              <input type="text" class="form-control" id="nilai" name="nilai[]" size="5" onkeyup="angka(this);" maxlength="3" required="required">
                            </div>
                      <?php
                      $no++;
                      }
                      ?>
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
<?php
include 'conf/conf.php'; 
if(isset($_POST["tambah"])){
        $id_kontraktor  = $_POST["id_kontraktor"];
        $nilai1  = $_POST["nilai"];
    //         echo "<pre>";
    // print_r($_POST["nilai"]);
    // echo "</pre>";
    // die; 
        $cekdata="select id_kontraktor from normalisasi where id_kontraktor='$id_kontraktor'"; 
    $ada=mysql_query($cekdata) or die(mysql_error()); 
    if(mysql_num_rows($ada)>0) 
    { 
    echo "<script type=\"text/javascript\">
    alert(\"NIK sudah terinput, silahkan ulangi lagi!\")
    window.location=\"home-admin.php?m=content&p=nilai-admin\";
    </script>"; 
    } else {
        mysql_query("INSERT INTO normalisasi VALUES ('','$id_kontraktor','$nilai1[0]','$nilai1[1]','$nilai1[2]','$nilai1[3]','$nilai1[4]','$nilai1[5]','$nilai1[6]','$nilai1[7]','$nilai1[8]','$nilai1[9]','$nilai1[10]','$nilai1[11]','$nilai1[12]','$nilai1[13]','$nilai1[14]','$nilai1[15]','$nilai1[16]','$nilai1[17]','$nilai1[18]','$nilai1[19]','$nilai1[20]')");
    }
  echo "<script type=\"text/javascript\">
  alert(\"Data Berhasil di input!\")
  window.location=\"home-admin.php?m=content&p=nilai-admin\";
  </script>";
}
?>
<div class="card mb-3 table-matrik">
        <div class="card-header" style="text-align: center;"><h3>
          <i class="fa fa-table"></i> TABLE NILAI KONTRAKTOR </h3> </div>
           <a class="nav-link" data-toggle="modal" data-target="#exampleModal">
            <i class="fa fa-user-plus" aria-hidden="true"></i> Create</a>
        <div class="card-body">
          <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
              <thead>
                <tr>
                  <th>No</th>
                  <th>Nik</th>
                  <th>Nama Kontraktor</th>
 <?php
  $lihatmember = mysql_query("select * from kriteria");
   while($member = mysql_fetch_array($lihatmember)){
    echo "<th>".$member['nama_kriteria']."</th>";
   }
  ?>
<th>Aksi</th>
                </tr>
              </thead>
              <tbody>

<?php
  $baris=1;
  $lihatmember = mysql_query("select * from normalisasi");
   while($member = mysql_fetch_array($lihatmember))
   {
     $warna= ($baris% 2 == 1) ? "#FFFFFF" : "#FDF2E1";
   ?>
   <?php
    echo "<tr bgcolor=\"".$warna."\">";
  ?>
    <td><?php echo $baris;?></td>
    <td><?php echo $member['id_kontraktor'];?></td>
    <td><?php echo getNama($member['id_kontraktor']);?></td>
    <td><?php echo $member['nilai1'];?></td>
    <td><?php echo $member['nilai2'];?></td>
    <td><?php echo $member['nilai3'];?></td>
    <td><?php echo $member['nilai4'];?></td>
    <td><?php echo $member['nilai5'];?></td>
    <td><?php echo $member['nilai6'];?></td>
    <td><?php echo $member['nilai7'];?></td>
    <td><?php echo $member['nilai8'];?></td>
    <td><?php echo $member['nilai9'];?></td>
    <td><?php echo $member['nilai10'];?></td>
    <td><?php echo $member['nilai11'];?></td>
    <td><?php echo $member['nilai12'];?></td>
    <td><?php echo $member['nilai13'];?></td>
    <td><?php echo $member['nilai14'];?></td>
    <td><?php echo $member['nilai15'];?></td>
    <td><?php echo $member['nilai16'];?></td>
    <td><?php echo $member['nilai17'];?></td>
    <td><?php echo $member['nilai18'];?></td>
    <td><?php echo $member['nilai19'];?></td>
    <td><?php echo $member['nilai20'];?></td>
    <td><?php echo $member['nilai21'];?></td>
    <td>
      <a class="modal-na" data-toggle="modal" data-nik="<?php echo $member['id_kontraktor'];?>" data-nama="<?php echo getNama($member['id_kontraktor']);?>" data-c1="<?php echo $member['nilai1'];?>"  data-c2="<?php echo $member['nilai2'];?>" data-c3="<?php echo $member['nilai3'];?>" data-c4="<?php echo $member['nilai4'];?>" data-c5="<?php echo $member['nilai5'];?>" data-c6="<?php echo $member['nilai6'];?>" data-c7="<?php echo $member['nilai7'];?>" data-c8="<?php echo $member['nilai8'];?>" data-c9="<?php echo $member['nilai9'];?>" data-c10="<?php echo $member['nilai10'];?>" data-c11="<?php echo $member['nilai11'];?>" data-c12="<?php echo $member['nilai12'];?>" data-c13="<?php echo $member['nilai13'];?>" data-c14="<?php echo $member['nilai14'];?>" data-c15="<?php echo $member['nilai15'];?>" data-c16="<?php echo $member['nilai16'];?>" data-c17="<?php echo $member['nilai17'];?>" data-c18="<?php echo $member['nilai18'];?>" data-c19="<?php echo $member['nilai19'];?>" data-c20="<?php echo $member['nilai20'];?>" data-c21="<?php echo $member['nilai21'];?>" ><img src="image/edit.png" width="20" height="20"></a>
      <a href="home-admin.php?m=content&p=del_nilai&nilai=<?php echo $member['id_normalisasi'];?>"><img src="image/del.png" width="20" height="20" /></a></td>
  </tr>
   <?php
   $baris++;
   }
  ?>

              </tbody>
            </table>
          </div>
        </div>
        <div class="card-footer small text-muted">TABLE NILAI KONTRAKTOR</div>
      </div>
