<?php

class Product{
  private  $_id = 1;
  private  $_name = 'fraise';
  private  $_price = 1.35;

  public function get_id(){
    return $this -> _id;
  }
  public function set_id($_id){
    return $this ->  $_id = $_id;
  }
  public function get_name(){
    return $this -> _name;
  }
  public function set_name($_name){
    return $this -> $_name = $_name ;
  }

  public function get_price(){
    return $this -> _price;
  }
  public function set_price($_price){
    return $this-> $_price = $_price;
  }
}

 ?>
