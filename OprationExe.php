<?php 

//-------Q1
// $year = 2024;

// if ($year % 400 == 0)
//     print("It is a leap year");
// if ($year % 4 == 0)
//     print("It is a leap year");
// else if ($year % 100 == 0)
//     print("It is not a leap year");
// else
//     print("It is not a leap year");

//-------Q2

// $tep=23;
// switch ($tep) {
//     case $tep<20:
//         echo "The season is Wanter";
//         break;
//     case $tep>=20:
//         echo "The season is Summer";
//         break;
// }
//     print("It is not a leap year");

//-------Q3
// $num1=-35;
// $num2=-35;
// if ($num1===$num2) {
//     echo ($num1+$num2)*3;
// }

//-------Q4
// $num=-6;
// if ($num<0) {
//     echo 'add a positive num ';
// }else{
//     $numAbs=abs($num-100);
// echo(($numAbs>100&&$numAbs>=0)?$numAbs*3:$numAbs);
// }
//-------Q5
// $num1=-35;
// $num2=75;
// if ($num1===30 || $num2===30||($num1+$num2)===30) {
//     echo 'one of them is 30';
// }else{
//     echo 'the sum of nums not equal 30 ';
// }

// -------Q6
// $num=39;
// if (abs($num-100>=10|| abs($num - 200) <= 10)) {
//     echo "true";
// }else{
//     echo "false";
// }

// -------Q7
// $num=3;
// if ($num%3===0&&$num>0) {
//     echo 'the given positive number is a multiple of 3 ';
    
// }elseif ($num%7===0&&$num>0) {
//     echo 'the given positive number is a multiple of 7 ';

// }

// -------Q8

// $str = 'If I were you ,....';

// if (!(strstr($str,'If')||strstr($str,'if'))){
//     echo ("If ".$str);
// }
// else{
//     echo $str;
// }


// -------Q9
// $str="#Write a PHP script to # remove the character# in a specific position from a specific";

// echo (preg_replace('/\#/','',$str));

// -------Q10
// $num1=3;
// $num2=233;
// if ($num1>100&&$num1<=200||$num2>100&&$num2<=200){
//     echo 'true';
// }

// -------Q11

// $num1=33;
// $num2=22;
// $c1=($num1>20&&$num1<=50);
// $c2=($num2>20&&$num2<=50);
// $nums="num1= $num1 num2= $num2";
// if ($c1||$c2){

//     echo ($c1&&$c2)?$nums:(($c1)? $num1:$num2);
// }


// -------Q12
// $num1=20;
// $num2=15;
// $num3=22;
// if($num1>$num2 && $num1>$num3){
//   echo $num1;
// }
// else{
//   if($num2>$num1 && $num2>$num3){
//     echo $num2;
//   }
//   else
//     echo $num3;
// }


// -------Q13
// $num1=2;
// $num2=23;
// if (!( abs($num1-100)>abs($num2-100))){
//     echo("$num1 is closer to 100 than $num2");
// }else{
//     echo("$num2 is closer to 100 than $num1");
// }



// -------Q14
// $num1=5;
// $num2=23;
// if ($num1==5||$num2==5||$num1+$num2==5||abs($num1-$num2)==5){
//     echo 'One of the variables or two of them  
//     is/are 5 or their sum, or difference between them is 5';
// }
















?>