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
<th></th>
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
  </tr>
              </tbody>
   <?php
   $baris++;
   }
  ?>

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

       <div class="card mb-3 table-matrik" >
        <div class="card-header" style="text-align: center;"><a href='javascript:printContent("perangkingan")' id='print_link'>Print</a><h3><i class="fa fa-table"></i> Perangkingan</h3></div>
        <div class="card-body" >
          <div class="table-responsive" id="perangkingan">
            <table class="table table-bordered" id="dataTable2" width="100%" cellspacing="0">
              <thead>
                <tr>
                  <th>No</th>
                  <th>NIK</th>
                  <th>Nama</th>
                  <th>Nilai Akhir</th>
                </tr>
              </thead>
              <tbody>
                <?php
    //Proses perangkingan dengan rumus langkah 3
    $sql3 = mysql_query("SELECT * FROM normalisasi order by nilai10 desc");
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
            <td>".$maxNilai."</td>";

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
      <script type="text/javascript">
        function printContent(div_id)
{
  
var DocumentContainer = document.getElementById("perangkingan");
var html = '<html><head>'+
               '<link href="css/template.css" rel="stylesheet" type="text/css" />'+
               '</head><body style="background:#ffffff;">'+
               '<link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">'+
  '<link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">'+
  '<link href="vendor/datatables/dataTables.bootstrap4.css" rel="stylesheet">'+
  '<link href="css/sb-admin.css" rel="stylesheet">'+
  '<style> #dataTable2_length { display:none; } #dataTable2_filter { display:none; } .dataTables_info{ display:none; } .paginate_button { display:none; } </style>'+
  '<div class="card-header" style="text-align: center;"><h3><i class="fa fa-table"></i> Perangkingan</h3></div>'+
               DocumentContainer.innerHTML+
               '</body></html>';
 console.log(html);
    var WindowObject = window.open("", "PrintWindow",
    "width=750,height=650,top=50,left=50,toolbars=no,scrollbars=yes,status=no,resizable=yes");
    WindowObject.document.writeln(html);
    WindowObject.document.close();
    WindowObject.document.focus();
    WindowObject.document.print();
    WindowObject.document.close();
    document.getElementById('print_link').style.display='block';
}
      </script>