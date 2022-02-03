<?php
namespace App\classes;

class Example
{
    public $firstNumber = 10;
    public $firstName ='Sijan';
    public $lastName ='Maruf';


    public function index(){
//        echo "hello world";
//        $firstNumber = 20;



        echo $this->firstNumber;
        echo '<br/>';

        echo $this->firstName;
        echo '<br/>';

        echo $this->lastName;
        echo '<br/>';
        echo $this->firstName.$this->lastName;
    }
}
