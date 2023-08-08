<?php


namespace App\classes;


use mysql_xdevapi\Statement;

class HelloWorld
    {
        public $message,$firstName,$lastName,$firstNumber,$secondNumber,$thirdNumber; //property declare

       Public function __construct()
       {
           //echo 'Hello PHP';
           //exit();

           $this->message="Hello World";
       }
       public function index()
       {

//           *======Statement
//           *single line statement
//           *conditional Statement
//           *IBASE_FETCH_ARRAYS
//           *if else
//           *if else if
//            *switch ()

//            *repeated statement
//                 *for
//                 *while
//                 *do while
//                 *foreach

           $this->firstNumber=10;
           $this->secondNumber=20;

                $this->thirdNumber=$this->firstNumber + $this->secondNumber;

//                if($this->firstNumber > $this->secondNumber)
//                {
//                    echo $this->thirdNumber;
//                }
//                else if ($this->secondNumber>$this->thirdNumber)
//                {
//                    echo'Hello World';
//                }
//
//                else if ($this->thirdNumber>$this->firstNumber)
//                {
//                    echo'Hello Bangladesh';
//                }
//
//                else
//                {
//                    echo'Hello BITM';
//                }


           switch($this->firstNumber)
           {
               case 10:
                   echo'Hello World';
                   break;
               case 20:
                   echo'Hello Bangladesh';
                   break;
               case 30:
                   echo'Hello PHP';
                   break;
               default:
                   echo'Hello Laravel';
           }






           /*=======T_OBJECT_OPERATOR
//           *Assignment Operator=,+=,-=,*=,/=,%=,,.=

//           $this->firstNumber=10;
//           $this->secondNumber=20;

//           echo'<br/>';
//           echo $this->firstNumber += $this->secondNumber;   //30
//
//           echo'<br/>';
//           echo $this->firstNumber -= $this->secondNumber;   //10
//
//           echo'<br/>';
//           echo $this->firstNumber *= $this->secondNumber;   //200
//
//           echo'<br/>';
//           echo $this->firstNumber /= $this->secondNumber;   //10
//
//           echo'<br/>';
//           echo $this->firstNumber %= $this->secondNumber;   //10
//
//           echo'<br/>';
//           echo $this->firstNumber .= $this->secondNumber;   //1020



//           echo'<br/>';
//           $this->firstNumber=10;
////         $this->secondNumber=20;
//
//           echo '<br/>';
//           echo ++$this->firstNumber;
//
//           echo '<br/>';
//           echo $this->firstNumber--;
//
//           echo '<br/>';
//           echo $this->firstNumber;
//
//           echo '<br/>';
//           echo $this->firstNumber;


//           *Arithmetic Operator:+,-,*,/,%,++,--,(-)

//           echo '<br/>';
//           echo $this->firstNumber + $this->secondNumber;
//           echo '<br/>';
//           echo $this->firstNumber - $this->secondNumber;
//           echo '<br/>';
//           echo $this->firstNumber * $this->secondNumber;
//           echo '<br/>';
//           echo $this->firstNumber / $this->secondNumber;
//           echo '<br/>';
//           echo $this->firstNumber % $this->secondNumber;
//           echo '<br/>';


           /*========operator
                *Arithmetic Operator:+,-,*,/,%,++,--,(-)
                * Assignment Operator:=,+=,-=,*=,/=,%=,,.=



           * Conditional Operator:>,>=,<,<=,==,!=,===,!==

             $this->firstNumber=20;
             $this->secondNumber='20';

             echo $this->firstNumber === $this->secondNumber;
//           echo $this->firstNumber !== $this->secondNumber;

//           echo $this->firstNumber == $this->secondNumber;
//           echo $this->firstNumber != $this->secondNumber;

//           echo $this->firstNumber < $this->secondNumber;
//           echo $this->firstNumber <= $this->secondNumber;

//           echo $this->firstNumber >= $this->secondNumber;
//           echo $this->firstNumber >= $this->secondNumber;


           *Logical Operator: &&,||,!
            */
           $this->firstNumber=10;
           $this->secondNumber=20;
           $this->thirdNumber=30;

//           echo'<br/>';
//           echo ($this->firstNumber > $this->secondNumber)&&($this->secondNumber > $this->thirdNumber);
//
//           echo'<br/>';
//           echo ($this->firstNumber < $this->secondNumber)&&($this->secondNumber < $this->thirdNumber);
//
//           echo'<br/>';
//           echo ($this->firstNumber > $this->secondNumber)&&($this->secondNumber < $this->thirdNumber);
//
//           echo'<br/>';
//           echo ($this->firstNumber < $this->secondNumber)&&($this->secondNumber > $this->thirdNumber);


//           echo'<br/>';
//           echo ($this->firstNumber > $this->secondNumber) || ($this->secondNumber > $this->thirdNumber);
//
//           echo'<br/>';
//           echo ($this->firstNumber < $this->secondNumber) || ($this->secondNumber < $this->thirdNumber);
//
//           echo'<br/>';
//           echo ($this->firstNumber > $this->secondNumber) || ($this->secondNumber < $this->thirdNumber);
//
//           echo'<br/>';
//           echo ($this->firstNumber < $this->secondNumber) || ($this->secondNumber > $this->thirdNumber);

           $this->firstNumber=10;
           $this->secondNumber=20;
           $this->thirdNumber=false;

           echo ! $this->thirdNumber;

//           echo'<br/>';
//           echo ($this->firstNumber > $this->secondNumber) || ($this->secondNumber > $this->thirdNumber);
//
//           echo'<br/>';
//           echo ($this->firstNumber < $this->secondNumber) || ($this->secondNumber < $this->thirdNumber);
//
//           echo'<br/>';
//           echo ($this->firstNumber > $this->secondNumber) || ($this->secondNumber < $this->thirdNumber);
//
//           echo'<br/>';
//           echo ($this->firstNumber < $this->secondNumber) || ($this->secondNumber > $this->thirdNumber);

//           $this->firstName=true;
//           $this->lastName="BITM";
//           echo $this->firstName.' &nbsp '.$this->lastName;
//
//           echo gettype($this->firstName);
           // 3 major rules & 3 standard rules
           //start with $ sign
           //a-z,A-z,0-9,_
           //no number in first
           //echo $this->message
          // small with $ sign
           //a-z,A-Z,0-9, _
           //no number in first

           // small letter
           // meaningful
           // readable

           $firstname='Bivas';


           //echo$this->message;
       }
    }