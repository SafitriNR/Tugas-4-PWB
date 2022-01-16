<?php 
mysqli_connect("localhost", "root", " ");
mysqli_select_db("lat_dbase");
$hasil=mysqli query("select * from tbl mhs");
While($data=mysqli_fetch_array($hasil))
{
  echo "$data[FirstName] $data[LastName] $data[Age]<br>";
}
?>