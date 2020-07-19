<?php

/*
Print the numbers 1 to 100 inclusive and for each, 
if it's divisible by 3 print "Fizz", if it's divisible by 5 print "Buzz"
 if it's divisible by both 3 and 5 print "Fizz Buzz".  End each with a newline.
 */

 $max_number = 31;  // Max number up which we want to run the loop

function loop($index){
    //recursive function 
    $txt = '' ;
    if( ($index -=1)){
        $txt .= loop($index);
            if(evaluate($index, 3) && evaluate($index, 5) ){
                $txt .= "Fizz Buzz <br>";
            }
            else{               
                $txt .= (evaluate($index, 3)) ? 'Fizz <br>' :  ( evaluate($index, 5)? 'Buzz <br>' : $index. '<br>');
            }
    }
    return $txt;
}


function evaluate($number, $divider){
    //evaluate the expression and return true false
    return ($number%$divider == 0) ?  true : false;
}

echo loop($max_number);


