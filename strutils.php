<?php
    class StrUtils 
    {
        // public $_mytestwork;
        private $_str;
        
        public function setMystr($mystr)
     {
         $this->_str = $mystr;
     }
     
     
        public function __construct($mystr)
     {
         $this-> setMystr($mystr);
     }   
     

     public function getMystr()
     {
         return $this->_str;
     }


     public function bold()
     {
         return $this ->_str;
     }

    }
    ?>