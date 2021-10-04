<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <h3>Ilość osób w rodzinie</h3>
    <?php
      if (!isset($_POST['person']) && !isset($_GET['buttonAvg'])){
      echo <<< FORMCOUNTPERSON
      <form method="post">
      <input type="number" name="person" placeholder="Ilość osób"><br><br>
      <input type="submit" value="Zatwierdź">
    </form>
FORMCOUNTPERSON;
}
      if (!empty($_POST['person'])) {
          echo <<< FORMAGEPERSON
          <h3>Ilość osób w rodzinie: $_POST[person]</h3>
          <form>
FORMAGEPERSON;

            for ($i=0; $i < $_POST['person']; $i++) {
            echo <<< FORMAGEPERSON
              <input type="number" name="person$i" placeholder="wiek osoby: $i "><br><br>

FORMAGEPERSON;
}
    echo '<input type="submit" name="buttonAvg" value="Oblicz średni wiek"><br></form><br>';

    }
    if (isset($_GET['buttonAvg'])) {
      $ageAvg=0;
      $countperson=0;
      foreach ($_GET as $key => $value) {
      if ($key!="buttonAvg") {
        $ageAvg=$ageAvg+$value;
        $countperson++;
      }
      }
      echo "Ilość osób: $countperson<br>";
      echo "Średni wiek: " .number_format($ageAvg/$countperson, 2,',', '')." lat<br><br>";
      echo '<a href="index.php">Strona startowa</a>';
    }
     ?>
  </body>
</html>
