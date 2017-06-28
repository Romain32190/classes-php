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
      <th>Email</th>
      <th>CreatedAt</th>
    </thead>
    <tbody>

      <?php
      $users = require('users.php');

      foreach ( $users as $user){
        echo '<tr><td>' .$user->id().'</td><td>' .$user->email().'</td><td>' .$user->createdAt().'</td></tr>';
      }

      ?>
    </tbody>

  </table>

</body>
</html>
