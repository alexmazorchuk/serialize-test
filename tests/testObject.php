<?php


namespace App\Test;


final class testObject
{
    public $public;
    protected $protected;
    private $private;

    public function __construct($private, $protected, $public)
    {
        return $this->private = $private;
        return $this->protected = $protected;
        return $this->public = $public;
    }
}