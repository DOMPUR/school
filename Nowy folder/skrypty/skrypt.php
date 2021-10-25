<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <h3>Dane z formularza</h3>
    <?php
      require_once '../funkcje/1_funkcje.php';
      show();
      echo "<hr>";
      if (!empty($_POST['name']) && !empty($_POST['color'])) {
        $color=$_POST['color'];
        echo "<div style='color: $color'>";
        echo "Imię bez poprawy: ".$_POST['name'].", długość: ".strlen($_POST['name'])."<br>";
        echo "Imię po poprawie: ".validateName($_POST['name']).", długość: ".strlen(validateName($_POST['name']))."</div><br>";
      }
     ?>
  </body>
</html>
