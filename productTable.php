<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.99.0/css/materialize.min.css">
  <meta charset="utf-8">
  <title></title>
</head>
<body>
<div class="container">
  <table>
    <thead>
      <th>ProductorName</th>
      <th>ExpiresAt</th>
      <th>Name</th>
      <th>Price</th>
      <th>Id</th>
    </thead>
    <tbody>
      <h1>Tableau Vegetable</h1>

      <?php
      require_once 'products.php';

      foreach ( $products[0] as $product){
        echo '<tr><td>' .$product->get_productorName().'</td><td>' .$product->get_expiresAt().'</td><td>' .$product->get_name().'</td><td>'.$product->get_price().'</td><td>'.$product->get_id().'</td></tr>';
      }

      ?>
    </tbody>
  </table>
    <table>
      <thead>
        <th>idP</th>
        <th>name</th>
        <th>price</th>
        <th>brand</th>
      </thead>
      <tbody>
        <h1>Tableau Cloth</h1>
        <?php
          foreach($products[1] as $product){
            echo '<tr><td>'.$product->get_id().'</td><td>'.$product->get_name().'</td><td>'.$product->get_price().'</td><td>'.$product->get_brand().'</td></tr>';
          }
        ?>
      </tbody>
    </table>
</div>
</body>
</html>
