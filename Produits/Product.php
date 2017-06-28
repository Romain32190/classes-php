<?php

class products{
  private  $_id = 1;
  private  $_name = 'fraise';
  private  $_price = 1.35;

  public function id(){
    return $this -> _id;
  }
  public function name(){
    return $this -> _name;
  }
  public function price(){
    return $this -> _price;
  }
}

 ?>
