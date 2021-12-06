<?php
class Apartment
{
public $wallcolor = "red";          //Class variable
public $hasPool = true;

public function changecolor()
{
	$var = 24;                      //Local variable
	echo $this -> hasPool;
}

private $locker = 434365345;

private function lockers()
{
    echo "hello";
}


}
$Floor_name = new Apartment;        //Instance variable
$Fllor_second = new Apartment;
echo $Floor_name -> wallcolor;
echo $Floor_name -> wallcolor="orange";
echo $Floor_name -> wallcolor;
echo $Fllor_second -> wallcolor;
$Fllor_second -> wallcolor = "green";
echo $Fllor_second -> wallcolor;
$Fllor_second -> changecolor();

//To access private propertry
$floor_private = new ReflectionProperty('Apartment','locker');
$floor_private -> setAccessible(true);
echo $floor_private -> getValue(new Apartment);

//To access private method
$floorr_private = new ReflectionMethod('Apartment','lockers');
$floorr_private -> setAccessible(true);
echo $floorr_private -> invoke(new Apartment);

?>