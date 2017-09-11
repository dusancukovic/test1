<?php

// Abstract class with actions like running, swimming etc.
abstract class Actions {

    abstract protected function walk();
    abstract protected function run();
    abstract protected function swim();
    abstract protected function sit();
    
}