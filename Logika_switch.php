<?php
$banding = 11;
switch ($banding) {
case 1 : 
  echo "senin";
  break;
  case 2 : 
    echo "selasa";
    break;
  case 3 : 
      echo "rabu";
    break;
  case 4 : 
    echo "kamis";
  break;
  case 5 : 
    echo "jumat";
  break;
  case 6 : 
       echo "sabtu";
  break;
  case 7 : 
    echo "minggu";
    break;
  default:
  echo "tidak ada case";
  break;
}

?>