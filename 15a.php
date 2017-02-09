<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>IT MANAGEMENT SYSTEM</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="css/bootstrap.min.css">
<link rel="stylesheet" href="css/style.css">
</head>
<body>
<div class="container" >
<button type="button" class="btn btn-warning btn-block btn-lg" data-toggle="modal" data-target="#myModal">Form New Employee</button>
<div class="modal fade" id="myModal" role="dialog">
<div class="modal-dialog">
<div class="modal-content">
<div class="modal-header">
<button type="button" class="close" data-dismiss="modal">&times;</button>
<h4 class="modal-title">"PETUNJUK HALAMAN"</h4>
</div>
<div class="modal-body">
<h5><p>
1. Halaman ini digunakan untuk membuat Logical Access untuk karyawan baru.<br />
2. lihat petunjuk yang diberikan pada form.<br />
3. Lalu pilih access yang ingin diberikan pada karyawan.<br />
4. Hati - hati pada saat penginputan data.<br />
5. Double check kembali sebelum menekan tombol submit.<br />
<br /><br />
<h3><p style="text-align:right"><strong>IT Dept</strong></p></h3>
</p></h5>
</div>
<div class="modal-footer">
<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
</div>
</div>
</div>
</div>
<div class="jaraktop"></div>
<form class="form-horizontal" role="form" action="15b.php" method="post" name="inputan">

 <div class="form-group">
 <label class="control-label col-sm-2">Jenis Toko : </label>
 <div class="col-sm-10">
 <select class="form-control" name="dept">
 <optgroup class="form-control" label="">
 <?php
 include('../../page/koneksi.php');
     $sql = mysql_query("SELECT * FROM dept ORDER BY iddep");
     if(mysql_num_rows($sql) != 0){
         while($data = mysql_fetch_assoc($sql)){
             echo "<option value='$data[iddep]'>$data[namdep]</option>";
         }
     }
     ?>
 </optgroup>
 </select>
 <i>*Pilih salah satu</i>
 </div>
 </div>


 <div class="form-group">
 <label class="control-label col-sm-2">Kode Toko : </label>
 <div class="col-lg-10">
 <input type="text" required="required" class="form-control" name="kodetok">
 <i></i>
 </div>
 </div>

<div class="form-group">
<label class="control-label col-sm-2">Nama Toko : </label>
<div class="col-lg-10">
<input type="text" required="required" class="form-control" name="namtok">
<i></i>
</div>
</div>

<div class="form-group">
<label class="control-label col-sm-2">Alamat : </label>
<div class="col-sm-10">
<textarea class="form-control" rows="5" style="resize: none;" name="Alamat"></textarea>
</div>
</div>

<div class="form-group">
<label class="control-label col-sm-2">Kota : </label>
<div class="col-sm-10">
<select class="form-control" name="kota" id="kota">
<option class="form-control" value=""></option>
<?php
include('koneksi.php');
    $sql = mysql_query("SELECT DISTINCT kota FROM daerah ORDER BY kota");
    if(mysql_num_rows($sql) != 0){
        while($data = mysql_fetch_assoc($sql)){
            echo "<option value='$data[kota]'>$data[kota]</option>";
        }
    }
    ?>
</optgroup>
</select>
<i>*Pilih salah satu</i>
</div>
</div>

<p id="kab">
<p id="kec">
<p id="kel">


<div class="jarakbut">
<input type="submit" class="btn btn-primary" value="Submit" id="submit">
<input type="reset" class="btn btn-danger" value="Cancel" id="cancel" onClick="window.location.reload()">
</div>

<div class="jarakbut"></div>

</form>
</div>
</body>
<script src="js/jquery.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script type="text/javascript">
var htmlobjek3;
$(document).ready(function(){
  $("#kota").change(function(){
    var kota = $("#kota").val();
    $.ajax({
        url: "ambilkab.php",
        data: "kota="+kota,
        cache: false,
        success: function(msg){
            $("#kab").html(msg);
        }
    });
  });
});
var htmlobjek2;
$(document).ready(function(){
  $("#kab").change(function(){
    var kab = $("#kab").val();
    $.ajax({
        url: "ambilkec.php",
        data: "kab="+kab,
        cache: false,
        success: function(msg){
            $("#kec").html(msg);
        }
    });
  });
});
var htmlobjek;
$(document).ready(function(){
  $("#kec").change(function(){
    var kec = $("#kec").val();
    $.ajax({
        url: "ambilkel.php",
        data: "kec="+kec,
        cache: false,
        success: function(msg){
            $("#kel").html(msg);
        }
    });
  });
});
</script>
</html>
