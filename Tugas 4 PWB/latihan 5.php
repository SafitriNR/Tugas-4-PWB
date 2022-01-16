<?php 
mysql_connect("localhost", "root", " ")
// mysqli select db query ("lat_dbase");
$hasil=mysqli db query("lat dbase", "select * from tbl mhs");
While($data=mysqli_fetch_row($hasil))
{
  echo "$data[0] $data[1] $data[2]<br>";
}
?>
