

<?php
require('Product.php');
class Vegetable extends Products{
  private $_productorName = "Bianchi";
  private $_expiresAt = 30;

  public function productorName(){
    return $this -> _productorName;
  }
  public function expiresAt(){
    return $this -> _expiresAt;
  }

  public function isFresh(){
    if($this->expiresAt() <= 40){
      return true;
    }
    return false;
  }
}

$salade = new Vegetable();
echo $salade->isFresh();
 ?>
