<?php
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
?>