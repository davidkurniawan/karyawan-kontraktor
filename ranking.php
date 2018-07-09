<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <title>Sistem Penilaian kontraktor</title>
  <!-- Bootstrap core CSS-->
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <!-- Custom fonts for this template-->
  <link rel="icon" type="image/png" href="http://www.serpongjaya.com/website/images/logo/logo-jaya-property.png">
  <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
  <!-- Page level plugin CSS-->
  <link href="vendor/datatables/dataTables.bootstrap4.css" rel="stylesheet">
  <!-- Custom styles for this template-->
  <link href="css/sb-admin.css" rel="stylesheet">
</head>

<body class="fixed-nav sticky-footer bg-dark" id="page-top">
  <!-- Navigation-->
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top" id="mainNav">
    <a class="navbar-brand" href="index.php">Sistem Penilaian Kontraktor</a>
    <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarResponsive">
      <ul class="navbar-nav navbar-sidenav" id="exampleAccordion">
        <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Dashboard">
          <a class="nav-link" href="index.php">
            <i class="fa fa-fw fa-dashboard"></i>
            <span class="nav-link-text">About Us</span>
          </a>
        </li>
        <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Charts">
          <a class="nav-link" href="ranking.php">
            <i class="fa fa-fw fa-area-chart"></i>
            <span class="nav-link-text">Ranking Kontraktor</span>
          </a>
        </li>
      </ul>
      <ul class="navbar-nav sidenav-toggler">
        <li class="nav-item">
          <a class="nav-link text-center" id="sidenavToggler">
            <i class="fa fa-fw fa-angle-left"></i>
          </a>
        </li>
      </ul>
      <ul class="navbar-nav ml-auto">
        <li class="nav-item">
          <a class="nav-link" data-toggle="modal" data-target="#exampleModal">
            <i class="fa fa-fw fa-sign-out"></i>Login</a>
        </li>
      </ul>
    </div>
  </nav>
  <div class="content-wrapper">
    <div class="container-fluid">
      <!-- Breadcrumbs-->
<div class="col-12 attention">
          <a href="#">NILAI MATRIK PERHITUNGAN RANGKING</a>
      </div>
      
      <!-- Example DataTables Card-->
      <!-- Example DataTables Card-->
<?php
  //Hubungkan ke Koneksi
  include "conf/conf.php";



  
  //Buat fungsi tampilkan nama
  function getNama($id){
    $q =mysql_query("SELECT * From tbl_kontraktor where nik = '$id' order by id_kontraktor asc");
    $d = mysql_fetch_array($q);
    return $d['nama'];
  }
    function getBobot($nama){
    $q =mysql_query("SELECT * From kriteria where nama_kriteria = '$nama' order by id_kriteria asc");
    $d = mysql_fetch_array($q);
    return $d['bobot'];
  }
  function getKelas($idk){
    $qk =mysql_query("SELECT * From tbl_kontraktor where nik = '$idk' order by id_kontraktor asc");
    $dk = mysql_fetch_array($qk);
    return $dk['jabatan'];
  }
  $sql = mysql_query("SELECT * FROM kriteria order by id_kriteria asc");
  ?>
      <div class="card mb-3 table-matrik">
        <div class="card-header" style="text-align: center;"><h3>
          <i class="fa fa-table"></i> Matrik Awal</h3> </div>
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
    <td><a href="home-admin.php?m=content&p=del_nilai&nilai=<?php echo $member['id_normalisasi'];?>"><img src="image/del.png" width="20" height="20" /></a></td>
  </tr>
   <?php
   $baris++;
   }
  ?>

              </tbody>
            </table>
          </div>
        </div>
        <div class="card-footer small text-muted">Matrik Awal</div>
      </div>
<?php 
 $crMax = mysql_query("SELECT max(nilai1) as maxK1,
                        max(nilai2) as maxK2,
                        max(nilai3) as maxK3,
                        max(nilai4) as maxK4,
                        max(nilai5) as maxK5,
                        max(nilai6) as maxK6,
                        max(nilai7) as maxK7,
                        max(nilai8) as maxK8,
                        max(nilai9) as maxK9,
                        max(nilai10) as maxK10,
                        max(nilai11) as maxK11,
                        max(nilai12) as maxK12,
                        max(nilai13) as maxK13,
                        max(nilai14) as maxK14,
                        max(nilai15) as maxK15,
                        max(nilai16) as maxK16,
                        max(nilai17) as maxK17,
                        max(nilai18) as maxK18,
                        max(nilai19) as maxK19,
                        max(nilai20) as maxK20,
                        max(nilai21) as maxK21
            FROM normalisasi");
    $max = mysql_fetch_array($crMax);

    $sql2 = mysql_query("SELECT * FROM normalisasi order by id_normalisasi desc");
 ?>
      <div class="card mb-3 table-matrik">
        <div class="card-header" style="text-align: center;"> <h3><i class="fa fa-table"></i> Matrik Normalisasi</h3></div>
        <div class="card-body">
          <div class="table-responsive">
            <table class="table table-bordered" id="dataTable1" width="100%" cellspacing="0">
              <thead>
                <tr>
                  <th>No</th>
                  <th>Nik</th>
                  <th>Nama Kontraktor</th>
                  <?php
      $no=1;
      $query = "select * from kriteria";
      $result = mysql_query($query);
      while ($row = mysql_fetch_array($result)){
      ?>
      <th><?php echo ucfirst($row['nama_kriteria']); }?></th>
                </tr>
              </thead>
              <tbody>
                <tr>
<?php
  $no = 1;
    while ($dt2 = mysql_fetch_array($sql2)) {
        echo "<tr>
            <td>$no</td><td>".$dt2['id_kontraktor']."</td><td>".getNama($dt2['id_kontraktor'])."</td><td>".round($dt2['nilai1']/$max['maxK1'],2)."</td><td>".round($dt2['nilai2']/$max['maxK2'],2)."</td><td>".round($dt2['nilai3']/$max['maxK3'],2)."</td><td>".round($dt2['nilai4']/$max['maxK4'],2)."</td><td>".round($dt2['nilai5']/$max['maxK5'],2)."</td><td>".round($dt2['nilai6']/$max['maxK6'],2)."</td><td>".round($dt2['nilai7']/$max['maxK7'],2)."</td><td>".round($dt2['nilai8']/$max['maxK8'],2)."</td><td>".round($dt2['nilai9']/$max['maxK9'],2)."</td><td>".round($dt2['nilai10']/$max['maxK10'],2)."</td><td>".round($dt2['nilai11']/$max['maxK11'],2)."</td><td>".round($dt2['nilai12']/$max['maxK12'],2)."</td><td>".round($dt2['nilai13']/$max['maxK13'],2)."</td><td>".round($dt2['nilai14']/$max['maxK14'],2)."</td><td>".round($dt2['nilai15']/$max['maxK15'],2)."</td><td>".round($dt2['nilai16']/$max['maxK16'],2)."</td><td>".round($dt2['nilai17']/$max['maxK17'],2)."</td><td>".round($dt2['nilai18']/$max['maxK18'],2)."</td><td>".round($dt2['nilai19']/$max['maxK19'],2)."</td><td>".round($dt2['nilai20']/$max['maxK20'],2)."</td><td>".round($dt2['nilai21']/$max['maxK21'],2)."</td>
        </tr>";
    $no++;
    }
  ?>
                </tr>
                
              </tbody>
            </table>
          </div>
        </div>
        <div class="card-footer small text-muted">Matrik Normalisasi</div>
      </div>

       <div class="card mb-3 table-matrik">
        <div class="card-header" style="text-align: center;"><h3><i class="fa fa-table"></i> Perangkingan</h3></div>
        <div class="card-body">
          <div class="table-responsive">
            <table class="table table-bordered" id="dataTable2" width="100%" cellspacing="0">
              <thead>
                <tr>
                  <th>No</th>
                  <th>NIS</th>
                  <th>Nama</th>
                  <th>Nilai Akhir</th>
                </tr>
              </thead>
              <tbody>
                <?php
    //Proses perangkingan dengan rumus langkah 3
    $sql3 = mysql_query("SELECT * FROM normalisasi order by id_normalisasi desc");
    $sql4 = mysql_query("SELECT * FROM `bobot` WHERE 1");
    //Buat tabel untuk menampilkan hasil
    $no = 1;
    //Kita gunakan rumus (Normalisasi x bobot)
      while ($dt4 = mysql_fetch_array($sql4)) {
    while ($dt3 = mysql_fetch_array($sql3)) {
  $maxNilai=round(($dt3['nilai1']*$dt4[1])+
            ($dt3['nilai2']*$dt4[2])+
            ($dt3['nilai3']*$dt4[3])+
            ($dt3['nilai4']*$dt4[4])+
            ($dt3['nilai5']*$dt4[5])+
            ($dt3['nilai6']*$dt4[6])+
            ($dt3['nilai7']*$dt4[7])+
            ($dt3['nilai8']*$dt4[8])+
            ($dt3['nilai9']*$dt4[9])+
            ($dt3['nilai10']*$dt4[10])+
            ($dt3['nilai11']*$dt4[11])+
            ($dt3['nilai12']*$dt4[12])+
            ($dt3['nilai13']*$dt4[13])+
            ($dt3['nilai14']*$dt4[14])+
            ($dt3['nilai15']*$dt4[15])+
            ($dt3['nilai16']*$dt4[16])+
            ($dt3['nilai17']*$dt4[17])+
            ($dt3['nilai18']*$dt4[18])+
            ($dt3['nilai19']*$dt4[19])+
            ($dt3['nilai20']*$dt4[20])+
            ($dt3['nilai21']*$dt4[21]),2);
      
        echo "<tr>
            <td>$no</td><td>".$dt3['id_kontraktor']."</td><td>".getNama($dt3['id_kontraktor'])."</td>
            <td>".round(($dt3['nilai1']*$dt4[1])+
            ($dt3['nilai2']*$dt4[2])+
            ($dt3['nilai3']*$dt4[3])+
            ($dt3['nilai4']*$dt4[4])+
            ($dt3['nilai5']*$dt4[5])+
            ($dt3['nilai6']*$dt4[6])+
            ($dt3['nilai7']*$dt4[7])+
            ($dt3['nilai8']*$dt4[8])+
            ($dt3['nilai9']*$dt4[9])+
            ($dt3['nilai10']*$dt4[10])+
            ($dt3['nilai11']*$dt4[11])+
            ($dt3['nilai12']*$dt4[12])+
            ($dt3['nilai13']*$dt4[13])+
            ($dt3['nilai14']*$dt4[14])+
            ($dt3['nilai15']*$dt4[15])+
            ($dt3['nilai16']*$dt4[16])+
            ($dt3['nilai17']*$dt4[17])+
            ($dt3['nilai18']*$dt4[18])+
            ($dt3['nilai19']*$dt4[19])+
            ($dt3['nilai20']*$dt4[20])+
            ($dt3['nilai21']*$dt4[21]),2)."</td>";

        echo "</tr>";
    $no++;
        }
    }
  ?>
                
              </tbody>
            </table>
          </div>
        </div>
        <div class="card-footer small text-muted">Perangkingan</div>
      </div>

    </div>
    <!-- /.container-fluid-->
    <!-- /.content-wrapper-->
    <footer class="sticky-footer">
      <div class="container">
        <div class="text-center">
          <small>Copyright © PT. Jaya Real Property, Tbk 2018</small>
        </div>
      </div>
    </footer>
    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
      <i class="fa fa-angle-up"></i>
    </a>
    <!-- Login Modal-->
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Welcome To Sistem Penilaian</h5>
            <button class="close" type="button" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">×</span>
            </button>
          </div>
          <div class="modal-body">
            <div class="card card-login mx-auto mt-5">
              <div class="card-header">Login</div>
              <div class="card-body">
                <form action="log.php" method="post">
                  <div class="form-group">
                    <label for="exampleInputEmail1">User ID</label>
                    <input class="form-control" id="exampleInputEmail1" type="text" name="userid" aria-describedby="emailHelp" placeholder="Enter User ID">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Password</label>
                    <input class="form-control" id="exampleInputPassword1" type="password" name="pass" placeholder="Password">
                  </div>
                  <div class="form-group">
                    <div class="form-check">
                      <label class="form-check-label">
                        <input class="form-check-input" type="checkbox"> Remember Password</label>
                    </div>
                  </div>
                  <input type="submit" name="login" class="btn-primary" value="Login" />
                </form>
                <div class="text-center">
                  <a class="d-block small mt-3" href="register.html">Register an Account</a>
                  <a class="d-block small" href="forgot-password.html">Forgot Password?</a>
                </div>
              </div>
            </div>
          </div>
          <div class="modal-footer">
            <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
          </div>
        </div>
      </div>
    </div>
    <!-- Bootstrap core JavaScript-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>
    <!-- Page level plugin JavaScript-->
    <script src="vendor/chart.js/Chart.min.js"></script>
    <script src="vendor/datatables/jquery.dataTables.js"></script>
    <script src="vendor/datatables/dataTables.bootstrap4.js"></script>
    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin.min.js"></script>
    <!-- Custom scripts for this page-->
    <script src="js/sb-admin-datatables.min.js"></script>
    <script src="js/sb-admin-charts.min.js"></script>
  </div>
</body>

</html>
