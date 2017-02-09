<div class="form-group">
<label class="control-label col-sm-2">Kabupaten : </label>
<div class="col-sm-10">
<select class="form-control" name="kab">
<option class="form-control" value=""></option>
<?php
$kota = $_GET['kota'];
include('koneksi.php');
    $sql = mysql_query("SELECT DISTINCT kabupaten FROM daerah where kota = '$kota' ORDER BY kabupaten");
    if(mysql_num_rows($sql) != 0){
        while($data = mysql_fetch_assoc($sql)){
            echo "<option value=\"".$data['kabupaten']."\">".$data['kabupaten']."</option>";
        }
    }
    ?>
</select>
<i>*Pilih salah satu</i>
</div>
</div>
