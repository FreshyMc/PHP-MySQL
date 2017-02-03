<?php
// ///check if string is typed with lowercase
// $string = "string";

// if (ctype_lower($string)) {
//     echo $string.' is all lowercase letters.';
// } else {
//     echo $string.' is not all lowercase letters.';
// }


// /////palindrome
// function check_palindrome($string) 
// {
//   if ($string == strrev($string))
//       echo "It's a palindrome";
//   else
// 	  echo "It's NOT a palindrome";
// }
// echo check_palindrome('madam');


// //Да се напише функция, която сумира eлементите на 2 масива в трети масив.
// $a=array(5,8,10,3,4);
// $b=array(3,5,2,1);
// $c=array();
// function iva($a,$b,$c){
// 	for ($i=0; $i<count($a);$i++) { 
// 	}
// 	for ($i=0; $i<count($b);$i++) {
// 	$c[$i]=$a[$i]+$b[$i]; 
// 		echo $c[$i]." ";
// 	}
// 	if($a>$b){
// 		echo $a[$i];
// 	}
// 	if($b>$a)
// 		echo $b[$i];
// }
// iva($a,$b,$c);

// //Да се генерира двумерен масив с размери МxN и произволни стойности. Да се
// //намери най-малък елемент за всяка колона. И накрая да се намери сумата 
// //от най-малките елементи за всяка колона.

// $n=5;
// $m=5;
// $sum=0;
// $c=10;
// $a=array();
// for ($i=0; $i <$m ; $i++) { 
// 	for ($j=0; $j <$n ; $j++) { 
// 		$arr[$i][$j]=rand(1,40);
// }	
// }
// for ($i=0;$i<$m;$i++) { 
// 	for ($j=0;$j<$n;$j++) {	
// 		if ($c>$arr[$j][$i]) {
// 			$c=$arr[$j][$i];
// 		}
// }
// echo $c;
// $sum=$sum+$c;
// $c=40;
// echo "<br/>";
// }
// echo $sum;
// echo "<table border='1'>";
// for ($p=0; $p <$m ; $p++) { 
// 	echo "<tr>";
// 	for ($q=0; $q <$n ; $q++) { 
// 		echo "<td>".$arr[$p][$q]."</td>";
// 	}
// 	echo "</tr>";
// }
// echo "</table>";




//explode
// $str = "Hello world. It's a beautiful day world, world.";
// //$newstr = (str_replace(" ","",$str));
// print_r (strpos($str, "world"));

//print_r (strlen($newstr));

//
// $arr=array("az", "sam", "kalpazanin", "!");

// print_r(implode(" ", $arr));

// $str = "Hello World!";
// echo $str . "<br>";
// echo trim($str,"World!");




	// $str = "123 abc ABC!";
	// $break = str_split($str);
	// $count = count($break);
	// $upper = "";
	// $lower = "";
	// $digit = "";
	// for($i = 0; $i<$count; $i++){
	// 	if(ctype_lower($break[$i])){
	// 		$lower .= $break[$i];
	// 	}
	// 	if(ctype_upper($break[$i])){
	// 		$upper .= $break[$i];
	// 	}
	// 	if(ctype_digit($break[$i])){
	// 		$digit .= $break[$i];
	// 	}
	// }
	// echo "Digits: " . $digit . " Lowercases: " . $lower . " Uppercases: " . $upper;

/////////////////////////////////////////////////
$arr=array('title','today`s news','3.02.17');
print_r ($string=implode(" ", $arr));
$arr1=str_split($string);
for ($i=0; $i <11 ; $i++) { 
	echo $arr1[$i];
}