<?php
/*method chaning describes that we can chain various functions together present in class to get an final result 
within one call which will genrate output from various functions together */

class Mobile {
 
  public $ram;
  
  // Add ram to the mobile
  public function addram($insert)
  {
    $this-> ram += $insert;
 
    return $this;
  }
  
  // Substract ram as we run application to show final ram left
  public function run($sub)
  {
    
    $this-> ram -= $sub;
 
    return $this;
  }
}

$lava = new Mobile();
 
// Add 4 gb of ram and then run application which requires 2 gb and then get the amount of ram left
$ram1= $lava -> addram(4) -> run(2) -> ram;
 

echo "ram left after providing 4gb and running application of 2gb is   ".$ram1;













?>