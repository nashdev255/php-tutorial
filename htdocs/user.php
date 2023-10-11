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
  }
?>
