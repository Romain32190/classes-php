<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title></title>
</head>
<body>
  <table>
    <thead>
      <th>ProductorName</th>
      <th>ExpiresAt</th>
      <th>Name</th>
      <th>Price</th>
      <th>Id</th>
    </thead>
    <tbody>

      <?php
      require_once 'products.php';

      foreach ( $products[0] as $product){
        echo '<tr><td>' .$product->get_productorName().'</td><td>' .$product->get_expiresAt().'</td><td>' .$product->get_name().'</td><td>'.$product->get_price().'</td><td>'.$product->get_id().'</td></tr>';
      }

      ?>
    </tbody>

  </table>

</body>
</html>
