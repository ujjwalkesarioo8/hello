<?php

/* dependency injection allows avoiding hard-coding dependencies and makes it possible to change the dependencies both at runtime and compile time */
//example by using setter function




   class Mobile {
      private $company;
      public function setcompany($company){
         $this->company = $company;
		 echo "$this->company";
      }
   }
   $name = new Mobile();
   $company = "lava";
   echo $name->setcompany($company);









?>