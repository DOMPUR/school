<?php
echo "ZSŁ<br>";
echo "ZSŁ<hr>";

$name="Janusz";
echo 'Imie: $name<br>'; //$name
echo "Imie: $name<br>"; //Janusz

//typy danych
//całkowity

$całkowita=10; //nazwa zmniennej w j. polskim
$bin=1011; //11
$oct=01011; //521(8)
$hex=0x1011; //4113(16)

//konkatenacja     interpolacja

echo "$całkowita<br>";
echo "$bin<br>";
echo "$oct<br>";
echo $hex, '<br>';

//zmiennoprzecinkowy
$x=10.5;

//logiczny
$prawda=true; //1
$fałsz=false; //nic nie wyświetli

echo $fałsz;

//składnia heredoc
echo <<< ETYKIETA
<hr>Imię: $name<br>
ZSŁ<br>
Poznań<br>
ETYKIETA;

$text = <<< ETYKIETA
<hr>Imię: $name<br>
ZSŁ<br>
Poznań<br>
ETYKIETA;
echo $text;

//składnia nowdoc
echo <<< 'ETYKIETA'
<hr>Imię: $name<br>
ZSŁ<br>
Poznań<br>
ETYKIETA;
echo "nazwa zmiennej imie: \$name";


?>
