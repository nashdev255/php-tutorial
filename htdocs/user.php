<?php
  class User {
    public $name;
    public $text;

    public function __construct($name, $text) {
      $this->name = $name;
      $this->text = $text;
    }

    public function printUserData() {
      echo "名前 : {$this->name}<br />";
      echo "自己紹介 : {$this->text}";
    }
  }
?>
