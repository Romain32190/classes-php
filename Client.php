  <?php
  require('User.php');
  ?>

  <?php
  class Client extends user
  {
      public function buy()
      {
          echo 'Client: ' . $_id." ".$_email." ".$_createdAt . PHP_EOL;
      }
  }
  ?>
