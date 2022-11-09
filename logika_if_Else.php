<?php
$user = "";
$member = "user";
if($user === "user"){
  echo"benar";
}else{
  echo "salah";
}

if($user === $member){
  echo "<br/>benar";
}else{
  echo "<br/>salah";
}

if($user !== 'user'){
  echo "<br/>benar";
}else{
  echo "salah";
}
?>