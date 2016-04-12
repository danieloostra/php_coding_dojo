<?php

class Human {
  public $health = 100;
  public $clan;
  public $strength = 3;
  public $intelligence = 3;
  public $stealth = 3;
  protected $test_var;
  private $testy;

  public function __construct() 
  {
    echo "I am alive";
    //this refers to the actual instance that is being created
    $this->health = 100;
    $this->test_var = 'hi test var';
    $this->testy = 'ohmhg';
  }
  public function __get($property)
  {
    echo ("does this GET run");
    if (property_exists($this, $property))
    {
      return $this->property;
    }
  }
  public function __set($property, $value) 
  {
    echo ("SET");
    if (property_exists($this, $property)) 
    {
      $this->$property = $value;
    }
    return $this;
  }
  public function trashTalk() 
  {
    echo "You want a piece of me?";
    return $this;
  }
  public function attack($human) 
  {
    $this->trashTalk();
    $luck = rand(0, 100);
    if($luck * $this->intelligence > 1000) 
    {
      if($luck > $human->stealth) 
      {
        $human->health -= $this->strength;
        return true;
      } 
      else 
      {
        return false;
      }
    } 
    else 
    {
        return false;
    }
  }
}

$firstHuman = new Human();
echo ($firstHuman->__get("health"));
echo '<br>set health'.($firstHuman->__set("health",100));



//$firstHuman->trashTalk()->trashTalk();
//var_dump($firstHuman->trashTalk()->trashTalk());

//var_dump($firstHuman);
// foreach ($firstHuman as $row) {
// echo  $row['stealth'];
// echo $row['health'];
// echo $row['clan'];
// }
?>