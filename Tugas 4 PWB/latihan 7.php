<?
mysqli_connect("localhost", "root", " ");
mysqli_select_db("lat_dbase");
$hasil=mysqli_query("select * from tbl_mhs");
$shit=mysqli_num_rows($hasil);
echo "jumlah recond $hit";
