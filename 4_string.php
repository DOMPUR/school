<?php
  $text= <<< L
    ZSŁ - Zespół
    Szkół
    Łączności<br>
  L;
  echo $text;
  echo nl2br($text);


  $name="jAnUsZ";
  //zamiana na małe litery
  echo strtolower($name);   //janusz
  //zamiana na duże litery
  echo strtoupper($nane);   //JANUSZ

  $text="jaNUsz koWalSki";
  //zamiana pierwszej litery na dużą
  echo ucfirst($text);      //JaNUsz koWalSki
  //zamiana wszystich pierwszych liter na duże
  echo ucwords($text);      //JaNUsz KoWalSki

  $Lorem="<hr> ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.<br>";
  echo $lorem, "<hr>";
  //echo wordwrap($lorem, 30, "TEXT");
  //echo wordwrap($lorem, 30, "<br>");
  echo wordwrap($lorem, 30, "<hr>");

  //wyczyszczenie bufora
  ob_clean();

  //usuwanie białych znaków
  $name="Janusz";
  $name1="  Janusz ";
  echo "ilość znaków \$name: ".strlen($name)."<br>";
  echo "ilość znaków \$name1: ".strlen($name1)."<br>";

  echo strlen(ltrim($name1));  //7
  echo strlen(rtrim($name1));  //8
  echo strlen(trim($name1))."<br>";   //6

  //przeszukiwanie ciagu znakow
  echo strstr("janusz@gmail.com","@"),"<br>"; //@gmail.com
  echo strstr("janusz@gmail.com","G"); //
  echo stristr("janusz@gmail.com","G"),"<br>"; //@gmail.com

  //substr
  $name="Janusz";
  echo substr($name, 3),"<br>"; //usz
  echo substr($name, 2, 3); //nus
  echo substr($name, -1),"<br>"; //z
  echo substr(strstr("janusz@gmail.com","@",1),"<br>"; //usz
 ?>
