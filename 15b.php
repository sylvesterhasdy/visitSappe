<?php
//panggil file config.php untuk menghubung ke server
include('../../page/koneksi.php');
session_start();
$npk =  $_POST['npk'];
$nakary =  $_POST['nakary'];
$dept =  $_POST['dept'];
$lokasi =  $_POST['lokasi'];
$detlok =  $_POST['detlok'];
$detlok2 =  $_POST['detlok2'];
//simpan data ke database

if ($lokasi == 'Sigap HO') {
$query = mysql_query("insert into authus values ('$npk','$nakary', '$dept','$lokasi','$detlok')") or die(mysql_error());
}
else if ($lokasi == 'Other') {
$query = mysql_query("insert into authus values ('$npk','$nakary', '$dept','$lokasi','$detlok2')") or die(mysql_error());
}

foreach($_POST['check_box']as $hasil =>$value)
{
$sql ="SELECT max(id) as terakhir from logicalaccess order by id";
$hasil = mysql_query($sql);
$data = mysql_fetch_array($hasil);
$lastID = $data['terakhir'];
$lastNoUrut = $lastID + 1;
$idlog = 'LA'.sprintf("%04s",$lastNoUrut);
$tanggal= date('y-m-d') ;
$keter =  $_POST['keter'];
$keter2 = 'New Employee '.$keter;
$idjenis = $value;
$status = 'Waiting';
$query2 = "INSERT INTO logicalaccess VALUES('','$idlog', '$npk','$idjenis','$tanggal','$keter2','$status','','','')";
mysql_query($query2);
}

if ($query2) {
echo "<script>alert('Input Success');
document.location.href='1a.php'</script>";
}
else{
echo "<script>alert('Input Failed');
document.location.href='1a.php'</script>";
}

?>
