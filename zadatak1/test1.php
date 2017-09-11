<?php

require 'Human.php';

/*
USAGE DESCRIPTION

Example of creating new Human
P.S. body is created whenever new Human object is instantiated.

Set human parameters with:
setName(),setHeight(),setWeight(),setGender(),setHairColor()

    Genders:
        Male, Female.
    Available hair colors: 
        Red, Green, Yellow, White, Black, Brown.

Human actions are:
walk(),run(),swim(),sit(),wear()

Finally you can get some informations back with using 'discribeHuman()' on instantiated object (in example $human).
*/

$human = new Human();
$human->setName('Dusan');
$human->setHeight(180);
$human->setWeight(80);
$human->setGender('Male');
$human->setHairColor('Brown');
$human->sit();
$human->wear('t-shirt, hat, pants');
echo $human->describeHuman();