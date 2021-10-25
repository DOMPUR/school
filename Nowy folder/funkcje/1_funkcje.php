<?php
function show(){
  echo "Funkcja SHOW<br>";
}

function show1(){
  return "Funkcja SHOW1<br>";
}
function validateName($name){
  return substr(ucfirst(strtolower(trim($name))), 0, 3);
}
 ?>
