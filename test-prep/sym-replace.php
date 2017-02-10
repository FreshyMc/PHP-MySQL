<?php
if(empty($_GET['submit'])){
	echo "<form action='zamestva-zvezda.php' method='get'>";
	echo "Въведи стринг<br>";
	echo "<input type='text' name='str'><br>";
	echo "Въведи символ<br>";
	echo "<input type='text' name='sym'>";
	echo "<input type='submit' name='submit' value='кодирай'>";
	echo "</form>";
}
else{
	function code($str, $sym){
		$res = explode(' ', $str);
		$count = count($res);
		for($i = 0; $i < $count; $i++){
			$new_arr[$i] = str_split($res[$i]);
			$word_len[$i] = count($new_arr[$i]);
			for($j = 0; $j < $word_len[$i]; $j++){
				$new_arr[$i][$j] = $sym;
			}
		}
		echo "<ul>";
		for($m = 0; $m < $count; $m++){
			echo "<li>";
			// for($n = 0; $n < $word_len[$m]; $n++ ){
			// 	echo $new_arr[$m][$n].' ';
			// }
			$current_str = implode(' ',$new_arr[$m]);
			echo $current_str;
			echo "</li>";
		}
		echo "</ul>";
	}//end of func
$user_str = $_GET['str'];
$user_sym = $_GET['sym'];
code($user_str, $user_sym);
}