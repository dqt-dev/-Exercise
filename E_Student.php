<?php
    class Entity_Student{
        public $_ID;
        public $_name;
        public $_age;
        public $_university;

    public function __construct($ID, $name, $age, $university)
    {
        $this->_ID = $ID;
        $this->_name = $name;
        $this->_age = $age;
        $this->_university = $university;
    }
    
    }
?>