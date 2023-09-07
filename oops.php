
<?php
class Fruit {
  // Properties pravite
  public $name;


  // Methods
  function set_name($name) {
    $this->name = $name;
  }
  function get_name() {
    return $this->name;
  }
}

$apple = new Fruit();
$banana = new Fruit();
$apple->set_name('hello');
echo $apple->get_name();
echo "<br>";


?>


