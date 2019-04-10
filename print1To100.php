

<?php

	/*
		A PHP class where print 1to100 and if the number is divisible by 3 and 5
		then print two messages together by concatenated it, else if only divisible 
		by 3 then then print message 1, else if only divisible by 5 then print 
		message 2, else print the number.
	*/

	/*
		Creating a class for printing 1to100,
	 	with defined logic.
	*/
	class PrintOneToHundred{

		//Declared two variable to print two different word
		var $String1 ;
		var $String2;
        
        //Member function of the class to print 1to100
        function printNumbers(){

        	//Looping 1to100 
            for($i=1; $i<=100; $i++){
                
                if($i%3 ==0 && $i%5==0) echo $this->String1.$this->String2."<br>";	/*check if the number is divisible by 3 and 5 and 
                																	  concate both messages and print it*/
                elseif($i%3==0) echo $this->String1."<br>";							//check if only divisible by 3 and print the message
                elseif($i%5==0) echo $this->String2."<br>";							//check if only divisible by 5 and print the message
                else echo $i."<br>";												//If not meet any condition then just print the number
                
            }
        }

		//Calling the member function
		function __construct(  string $Str1="Reformed",   string $Str2="Tech" ) {
            $this->String1 = $Str1;
            $this->String2 = $Str2;
        }
	}
	
	//Intstanciting the class with default parameter
	$one2hun = new PrintOneToHundred();
	//Calling the function to print 1to100 according to logic
	$one2hun->printNumbers();

	/*End of the program*/
	
?>