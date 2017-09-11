<?php

require 'Actions.php';
// This class is used for implementing some actions to a Human object.
class HumanActions extends Actions{

    private $action = 'doing nothing';
    private $clothes = [];

    // Get human current action
    protected function describeAction() : string{
        return $this->action;
    }
    // Get wearing clothes list
    protected function describeClothes() : string{
        return implode(', ',$this->clothes);
    }

    // Set new cloth part to a list
    public function wear($cloth){
        $this->clothes[] = $cloth;
    }
    // Set walking action
    public function walk(){
        return $this->action = 'walking';
    }
    // Set running action
    public function run(){
        return $this->action = 'running';
    }
    // Set swimming action
    public function swim(){
        return $this->action = 'swimming';
    }
    // Set sitting action
    public function sit(){
        return $this->action = 'sitting';
    }
    

}