<?php
require 'HumanActions.php';

class Human extends HumanActions{

    private $name;
    private $height;
    private $weight;
    private $gender;
    private $hair_color;
    
    private $body = [];

    private $hair_colors = [
        'Red',
        'Green',
        'Blue',
        'Yellow',
        'White',
        'Black',
        'Brown'
    ];

    function __construct(){
        // Create body on the beginning
        $this->createHead();
        $this->createTorso();
        $this->createArms();
        $this->createLegs();
    }

    public function createHead(){
        $this->body[] = 'head';
    }
    public function createTorso(){
        $this->body[] = 'torso';
    }
    public function createArms(){
        $this->body[] = 'arms';
    }
    public function createLegs(){
        $this->body[] = 'legs';
    }

/*
    SET params
*/
    public function setName($data){

        // Validator: Letters and spaces only
        if (!ctype_alpha(str_replace(' ', '', $data))) {
            throw new Exception('Name is not valid, only letters and spaces are allowed!');
        }
        $this->name = $data;
    }

    public function setHeight($data){

        // Validator: Numbers only
        if (!is_numeric($data)) {
            throw new Exception('Height is not valid, only numbers are allowed!');
        }
        $this->height = $data;
    }

    public function setWeight($data){

        // Validator: Numbers only
        if (!is_numeric($data)) {
            throw new Exception('Weight is not valid, only numbers are allowed!');
        }
        $this->weight = $data;
    }

    public function setGender($data){
        
        //Validator: Type string, 'Male' or 'Female' only
        if(!is_string($data) && $data != 'Male' || $data == 'Female'){
            throw new Exception('Gender is not valid, you can only enter "Male" or "Female"!');
        }
        $this->gender = $data;
    }

    public function setHairColor($data){

        //Validator: Only colors from palette(array) are allowed
        if(!in_array($data, $this->hair_colors)){
            throw new Exception('Color is not in palette, available colors are: '.implode(', ',$hair_colors));
        }
        $this->hair_color = $data;
    }

/*
    GET params with strict data type
*/
    public function getName() : string{
        return $this->name;
    }
    public function getHeight() : int{
        return $this->height;
    }
    public function getWeight() : int{
        return $this->weight;
    }
    public function getGender() : string{
        return $this->gender;
    }
    public function getHairColor() : string{
        return $this->hair_color;
    }
    public function getBodyParts() : string{
        return implode(', ',$this->body);
    }

    public function describeHuman(){
        return 'Hi! My name is '.$this->name.' and i am '.$this->getHeight().'cm tall.<br>'.
                'The color of my hair is '.$this->getHairColor().' and currently i am wearing '.
                (parent::describeClothes() != '' ? parent::describeClothes():'nothing').'.<br>'.
                'And i am '.parent::describeAction().' right now. My body parts are: '.$this->getBodyParts().'.';
    }

}