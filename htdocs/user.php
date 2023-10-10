<?php
  class User {
    public $name;
    public $text;

    public function __constructer($name, $text) {
      $this->name = $name;
      $this->text = $text;
    }

    public function printUserData() {
      echo "名前 : {$this->name}";
      echo "自己紹介 : {$this->text}";
    }
  }
?>
