<?php
$amin = "amin" ;
//integer
$hello = 22;
//float
$nilai_ipk = 3.99;
//boolean
$benar = true;
$salah = false;
//array
$mahasiswa = array(99.4,"joko",55);
//add array
$masasiswa[3] = "mobil";
$masasiswa[4] = 10;
echo "$mahasiswa[2]<br/>";
echo "$mahasiswa[0]<br/>";
//call add array
print_r($masasiswa);
echo "<br/>";

//object 
class mahasiswa{
  public $nama;
  public $umur;
  public $tanggal_lahir;

  function get_name(){
    return $this-nama;
  }
}
//return object
$mahasiswa_abadi = new mahasiswa;
$mahasiswa_abadi->nama = 'budeman';
$mahasiswa_abadi->umur = 17;
$mahasiswa_abadi->tanggal_lahir = "26 desember 1999";
print_r($mahasiswa_abadi);
echo "<br/>";

//data resource 
$koneksi = mysqli_connect("127.0.0.1","gilang1","gilang12345","karyawan");
var_dump($koneksi);
echo "<br/>";
var_dump($benar);
echo "<br/>";
var_dump($salah);
echo "<br/>";
echo "nilai ipk adalah $nilai_ipk <br/>";
echo "total anak kamu adalah $hello <br/>";
echo "$amin";
echo "<h1>hello word</h1>";
echo ("<h2>hello brother<h2>");
print ("<p> belajar h333<p>");
print ("hello berader huyy...");
?>
