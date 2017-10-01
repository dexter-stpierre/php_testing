<!-- When creating an object in PHP you must first define the class and then use
the constructor to create the object -->

<?php
// create object class
class Monkey {
  // define object constructor
    function Monkey() {
        $this->order = "Primate";
    }
}

// create an object
$george = new Monkey();

// show object properties
echo $george->order;
?>
