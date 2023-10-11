<?php
  class User {
    public $name;
    public $email;
    public $password;
    public $introduce;

    public function __construct($name, $email, $password, $introduce) {
      $this->name = $name;
      $this->email = $email;
      $this->password = $password;
      $this->introduce = $introduce;
    }

    public function printUserProfile() {
      echo "name : {$this->name}<br />";
      echo "email : {$this->email}<br />";
      echo "password : {$this->password}<br />";
      echo "introduce : {$this->introduce}<br />";
    }
  }
?>
