Programming Test


1. Assume that the input will be a word with odd letter count. Print the output as given below.
    
Input : W E L C O M E
Explanation : start with middle letter from first line. Next line two letter from middle . Continue still you print all letters in last line. Then start with the first letter and continue for the remaining letters. 
  
output :  


                     C
                 C O
              C O M
           C O M E
       C O M E W
   C O M E W E
C O M E W E L

Input : W A T E R

Output :

            T
         T E
      T E R
   T E R W
T E R W A


Program in PHP

<?php

$input = "WATER";

$input_length = strlen($input);

$get_half = $input_length / 2; 

$a = ($input_length % 2 == 0) ? substr($input, (floor($get_half) - 1), 2) : substr($input, $get_half, 1);

echo $a."<br>";

$words = explode($a, $input);

$final = array_reverse($words);

foreach($final as $value){
    
    $strlen = strlen( $value );
    
    for( $i = 0; $i < $strlen; $i++ ) {
    
        $a.=  $char = substr( $value, $i, 1 );
        
        echo $a;
        
        echo "<br>";

    }
    
}
?>
