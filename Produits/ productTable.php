<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title></title>
</head>
<body>
  <table>
    <thead>
      <th>id</th>
      <th>Name</th>
      <th>Price</th>
    </thead>
    <tbody>

      <?php
      $users = require('Vegetable.php');

      foreach ( $users as $user){
        echo '<tr><td>' .$user->id().'</td><td>' .$user->name().'</td><td>' .$user->price().'</td></tr>';
      }

      ?>
    </tbody>

  </table>

</body>
</html>
