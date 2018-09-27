<?php

class person{

    const MALE='M';
    const FEMALE='F';
    private static  $count =1;

    private $name;
    private $gender;
    private $age;



    public  function __construct($name, $gender, $age){
        $this->age = $age;
        $this->name = $name;
        $this->setGender($gender);
    }

    public  function displayperson(){
        return "Name:". $this->name . "gender:".$this->getGender;
}
public function setName($value){
        $this->name=$value;
}

    public function getName()
    {
        return $this->name;
    }

    public function setGender($value)
    {
        if ($value == self::MALE || $value == self::FEMALE) {
            $this->gender = $value;
        }
    }


    public function getGender()
    {
        return $this->gender;
    }
    public static function getCount(){
        return self::$count;
    }
}