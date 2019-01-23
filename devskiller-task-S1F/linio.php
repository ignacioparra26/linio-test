                                                                   <?php
 incluide "classes.inc"

//  Write a program that prints all the numbers from 1 to 100.
// However, for multiples of 3, instead of the number, print "Linio".
// For multiples of 5 print "IT". 
//For numbers which are multiples of both 3 and 5, print "Linianos".
 
//  But here's the catch: you can use only one if. No multiple branches, ternary operators or else.
 
//  Conver the following features in your program:
 
//  1 if
//  You can't use else, else if or ternary
//  Unit tests
//  Feel free to apply your SOLID knowledge
//  You can write the challenge in any language you want. Here at Linio we are big fans of PHP, Kotlin and TypeScript



    var $mod3=0;
    var $mod5=0;
    var $litianos = 0;
    var $linio =0;
    var $it = 0;
    var $num =0;

    for($i=1; $i<=100; $i++){

        //litianos
        if( $i % 3 == 0 and $i %5 ==0){
            echo "Linianos"; 
            $litianos=1;          
        }

        //Linio
        while($litianos == 0 and $i % 3 == 0 and $linio == 0){
            echo "Linio";
            $linio =1;
        }

        //IT
        while($litianos == 0 and $linio == 0 and $i % 5 == 0 and $it == 0 ){
            echo "IT";
            $it =1;
        }
      
        //number
        while($litianos == 0 and $linio == 0  and $it == 0 and $num==0){
            echo $i
            $num=1;
        }
      


        echo "<br>";
        $litianos=0;
        $linio =0;
        $it =0 ;
        $num=0;
   

}

?>