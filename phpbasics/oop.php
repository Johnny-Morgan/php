<?php
    class Person {
        private $name;
        private $email;

        public function __construct($name, $email) {
            $this -> name = $name;
            $this -> email = $email;
            echo __CLASS__.' created<br>';
        }

        public function __destruct() {
            echo __CLASS__.' destroyed<br>';
        }

        public function getName() {
            return $this -> name.'<br>';
        }

        public function getEmail() {
            return $this -> email;
        }

        public function setName($name) {
            $this -> name = $name;
        }
        
        public function setEmail() {
           $this -> email = $email;
        }
    }

    $person1 = new Person('John Morgan', 'test@gmail.com');
    echo $person1 -> getName();
    

?>