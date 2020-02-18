<?php
    class Person {
        private $name;
        private $email;
        public static $ageLimit = 40;

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
            return $this -> email.'<br>';
        }

        public function setName($name) {
            $this -> name = $name;
        }
        
        public function setEmail() {
           $this -> email = $email;
        }

        public static function getAgeLimit() {
            return self::$ageLimit;
        }
    }

    // $person1 = new Person('John Morgan', 'test@gmail.com');
    // echo $person1 -> getName();
    // echo Person::$ageLimit;
    echo Person::getAgeLimit().'<br>';

    class Customer extends Person {
        private $balance;

        public function __construct($name, $email, $balance) {
            parent::__construct($name, $email, $balance);
            $this -> balance = $balance;
            echo 'A new '.__CLASS__.' has been created<br>';
        }

        public function getBalance() {
            return $this -> balance.'<br>';
        }

        public function setBalance($balance) {
            $this -> name = $balance;
        }
    }

    $customer1 = new Customer('John Doe', 'jdoe@gmail.com', 1000);
    echo $customer1 -> getBalance();

?>