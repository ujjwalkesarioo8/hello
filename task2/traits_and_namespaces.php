<?php

//traits
/* as we know php dosent support multiple inheritance thus traits are used to fix th econcept of multiple inheritance in php 
we can make and use traits in different classes */

 //declaration of namespace
namespace i_am_mobile;

class lava { 
  public function message1() { 
     echo "   Hello i am lava   "; 
  } 
} 
  
// seting trait
trait micromax { 
  public function message2() { 
     echo "    i am  micfomax better than lava   "; 
  } 
} 
  
class Mobile extends lava { 
   //use the trait above u have made
   use micromax; 
   public function compare() { 
      echo "  two mobile comparison:   "; 
  }  
} 
  
$mob1 = new Mobile(); 
$mob1->compare(); 
$mob1->message1(); 
$mob1->message2(); 




//namespaces -- 1) a namespaces has to be decalred onn the top of php file 
// 2) they generally provide a name in order to avoid mixing of same name classes
// 3) namespaces can be used to  solve the problem of same name they can be used to  give same to different classes
/* 4) suppose if we define a class in file1 as class A with namspace written as "i_am_mobile"  then if we want to make 
     use of that class in another class then we have to write "$newobject = new i_am_mobile\classA();" in file2 
	 */
	 
	 
	 









?>