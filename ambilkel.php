<div class="form-group">
<label class="control-label col-sm-2">Kecamatan : </label>
<div class="col-sm-10">
<select class="form-control" name="kel">
<option class="form-control" value=""></option>
<?php
$kec = $_GET['kec'];
include('koneksi.php');
    $sql = mysql_query("SELECT DISTINCT kelurahan FROM daerah where kecamatan = '$kec' ORDER BY kelurahan");
    if(mysql_num_rows($sql) != 0){
        while($data = mysql_fetch_assoc($sql)){
            echo "<option value='$data[kelurahan]'>$data[kelurahan]</option>";
        }
    }
    ?>
</select>
<i>*Pilih salah satu</i>
</div>
</div>
