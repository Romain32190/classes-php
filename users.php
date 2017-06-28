<?php
require('Client.php');
?>

<?php
$client1 = new Client();
$client2 = new Client();
var_dump($client2, $client1);

return [
  $client1,
  $client2,
];
?>
