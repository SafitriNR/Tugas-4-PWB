<?
mysqli_connect("localhost","root",""); //koneksi
mysql select db("lat dbase"); //mengaktifkan databse
//membuat tabel
$sql = "CREATE TABLE tbl_mhs (
  mhsID int NOT NULL AUTO_INCREMENENT,
  PRIMARY KEY(mhsID),
  FirstName varchar(15),
  LastName varchar(15),
  Age int
  )";
  mysqli_query($sql);
  // input data
  $input=mysqli_query ("insert into tbl_mhs (FirstName, LastName, Age)
  values('Anjar','Prabowo',25)");
  ?>