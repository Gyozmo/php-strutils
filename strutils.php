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
         return "<strong>".$this ->_str."</strong>";
     }
     public function underline()
     {
         return "<u>".$this ->_str."</u>";
     }
     public function italic()
     {
         return "<i>".$this ->_str."</i>";
     }
     public function uglify()
     {
         return "<strong><u><i>".$this ->_str."</i></u></strong>";
     }

    }
    ?>