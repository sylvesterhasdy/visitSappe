<div class="form-group">
<label class="control-label col-sm-2">Kecamatan : </label>
<div class="col-sm-10">
<select class="form-control" name="kec">
<option class="form-control" value=""></option>
<?php
$kab = $_GET['kab'];
include('koneksi.php');
    $sql = mysql_query("SELECT DISTINCT kecamatan FROM daerah where kabupaten = '$kab' ORDER BY kecamatan");
    if(mysql_num_rows($sql) != 0){
        while($data = mysql_fetch_assoc($sql)){
            echo "<option value=\"".$data['kecamatan']."\">".$data['kecamatan']."</option>";
        }
    }
    ?>
</select>
<i>*Pilih salah satu</i>
</div>
</div>
