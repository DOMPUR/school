<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <h4>Użytkownicy</h4>
    <?php
      $connect = new mysqli("localhost", "root", "", "zsl_3gi2tg2");

      $sql = "SELECT * FROM `users`;";
      $result = $connect->query($sql);

      //$user = $result->fetch_assoc();
      //echo $user['name'];

      while ($user = $result->fetch_assoc()) {
        echo <<< USER
        ID: $user[id]<br>
        Imie: $user[name]<br>
        Nazwisko: $user[surname]<br>
        Urodziny: $user[birthday]<br>
        Data utworzenia: $user[create_user]<br><hr>
USER;
      }
     ?>
  </body>
</html>
