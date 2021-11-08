<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="./css/style.css">
    <title></title>
  </head>
  <body>
    <h4>Użytkownicy</h4>

    <?php
      $connect = new mysqli("localhost", "root", "", "zsl_3gi2tg2");

      $sql = "SELECT * FROM `users`;";
      $result = $connect->query($sql);

      echo <<< TABLE
        <table>
          <tr>
            <th>ID</th>
            <th>Imię</th>
            <th>Nazwisko</th>
            <th>Data urodzin</th>
            <th>Data utworzenia</th>
          </tr>
TABLE;

      while ($user = $result->fetch_assoc()) {
        echo <<< USER
        <tr>
          <td>$user[id]</td>
          <td>$user[name]</td>
          <td>$user[surname]</td>
          <td>$user[birthday]</td>
          <td>$user[create_user]</td>
        </tr>
USER;
      }
      echo "</table>";
     ?>
  </body>
</html>
