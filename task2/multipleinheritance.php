<?php
/* in php multiple inheritance is not supported but we can acheve it by using using traits or interface 
  multiple inheritance provides the flexibilty to import various classess in child class */


//example of multiple inheritance by using interfaces


  
class samsung  { 
   public function message1()
   {
	   echo "i am samsung";
   } 
} 
  
interface lava { 
   public function message2();
} 

interface micromax { 
   public function message3();
} 
  
class Mobile extends samsung implements lava,micromax{ 
  
   
    function message2() { 
        echo "i am lava"; 
    }

	
    function message3() { 
        echo "i am micromax"; 
    } 
  
    public function message4() 
    { 
        echo "\n i am class mobile"; 
    } 
} 
  
$mob1 = new Mobile(); 
$mob1->message1(); 
echo "<br/>";
$mob1->message2(); 
echo "<br/>";
$mob1->message3();
echo "<br/>";
$mob1->message4();  















?>