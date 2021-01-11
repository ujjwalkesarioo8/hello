<?php

//declaring interfaces
interface A {
	//defining two methos
  public function message1();
  public function message2();
}



//declaring abstract class

abstract class B implements A{
	//implementing both methods defined in interface A  and giving defination to one method
	
   public function message1()
   {
	   echo "hello 1";
   }
   abstract public function message2();

}

//creating a concrete class and defining methods
class C extends B{
	
	// now this class have defination of both the methods of abstract class .i.e message1  and message2
	public function message2(){
		echo "hello i am 2";
	}
	
}





$class = new C();
$class->message1();
echo "<br/>";
$class->message2();

?>