  <?php

  class user {
    private $_id = 'romain';
    private $_email = 'romain.lafargue36@gmail.com';
    private $_createdAt = '18/04/1997';

    public function id(){
      return $this -> _id;
    }

    public function email(){
      return $this -> _email;
    }
    public function createdAt(){
      return $this -> _createdAt;
    }

  }



   ?>
