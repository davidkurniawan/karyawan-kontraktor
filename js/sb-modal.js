$(document).on("click", ".modal-sb", function () {
	var nik = $(this).data('nik');
     var name = $(this).data('nama');
     var jabatan = $(this).data('jabatan');
     var tgl = $(this).data('tanggal');
     var desc = $( this ).data('desc');
     var id = $(this).data('id');
     var bobot = $(this).data('bobot');
     
     $("#bobot").val( bobot );
     $("#nik").val( nik );
     $("#name").val( name );
     $("#jabatan").val( jabatan );
     $("#tanggal").val( tgl );
     $("#desc").val( desc );	
     $("#id").val(id);


    $('#exampleModal1').modal('show');
});

$(document).on("click", ".modal-na", function () {
     var id = $(this).data('nik');
     var nama = $(this).data('nama');
     var c1 = $(this).data('c1');
     var c2 = $(this).data('c2');
     var c3 = $(this).data('c3');
     var c4 = $(this).data('c4');
     var c5 = $(this).data('c5');
     var c6 = $(this).data('c6');
     var c7 = $(this).data('c7');
     var c8 = $(this).data('c8');
     var c9 = $(this).data('c9');
     var c10 = $(this).data('c10');
     var c11 = $(this).data('c11');
     var c12 = $(this).data('c12');
     var c13 = $(this).data('c13');
     var c14 = $(this).data('c14');
     var c15 = $(this).data('c15');
     var c16 = $(this).data('c16');
     var c17 = $(this).data('c17');
     var c18 = $(this).data('c18');
     var c19 = $(this).data('c19');
     var c20 = $(this).data('c20');
     var c21 = $(this).data('c21');

     $("#id_kontraktor").val(id);
     $("#nilai_kontrak").val(nama);
     $("#nilai1").val(c1);
     $("#nilai2").val(c2);
     $("#nilai3").val(c3);
     $("#nilai4").val(c4);
     $("#nilai5").val(c5);
     $("#nilai6").val(c6);
     $("#nilai7").val(c7);
     $("#nilai8").val(c8);
     $("#nilai9").val(c9);
     $("#nilai10").val(c10);
     $("#nilai11").val(c11);
     $("#nilai12").val(c12);
     $("#nilai13").val(c13);
     $("#nilai14").val(c14);
     $("#nilai15").val(c15);
     $("#nilai16").val(c16);
     $("#nilai17").val(c17);
     $("#nilai18").val(c18);
     $("#nilai19").val(c19);
     $("#nilai20").val(c20);
     $("#nilai21").val(c21);



    $('#exampleModal1').modal('show');
});
    
