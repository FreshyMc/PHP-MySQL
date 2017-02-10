<?php
header('content-type:text/html; charset=utf-8');

/* Декларирайте функция, която генерира/отпечатва полета за
въвеждане на потребителска информация - input type = text, checkbox, submit.
a. Функция отпечатваща select.
b. Отпечатайте форма за регистрация в електронен магазин,
използвайки създадените функции.
*/


function input_form($type,$name,$placeholder,$value){//тип, име, какво да пише вътре
	
	echo "<input type ='$type' name ='$name' placeholder='$placeholder'  value='$value'>";
}

function select_form($value,$text){//стойност, име

	
	echo "<option value='$value'>$text</option>";
}
//създаваме формата 
if (!isset($_GET['submit'])) {//ако не е натиснат бутона регистрация

$text="text";
$place="Enter a user name...";

echo "<form action='' method='get' id='eshop'>";
echo "<p>РЕГИСТРАЦИЯ : </p>";

echo "<p>Потребителско име: </p>";
input_form($text,$text,$place,'');//текст текст за потребиелско име,функция за поле 
echo "</p>";

echo "<p>ПАРОЛА: </p>";
input_form('password','password','Enter password','');

echo "<p>ПОЛ: ";
echo "<select name='sex' form ='eshop'>";//нямаме функция, която да изписва това поле и затова го изписваме

select_form('male','Мъж');//функцията select_form създава опция "Мъж"
select_form('female','Жена');//функцията select_form създава опция "Жена"

echo "</select></p>";

echo "<p>Приемам условията ";
echo "Да ";
input_form('checkbox','agree',$place,'yes');//функцията създава чекбокс поле "да"//$place не върши работа тук, но се изписва, защото ф-цията е с 4 параметъра и няма да работи, ако не се посочи $place!

input_form('checkbox','agree',$place,'no');//функцията създава чекбокс поле "не"
echo "</p>";

input_form('submit','submit','submit','Регистрация');//извиквам функцията за изпрати/submit
echo "</form>"; 


}else{//ако е попълнено :
	echo "<p>Hello"." ".$_GET['text']."</p>";
	echo "<p>with password:"." ".$_GET['password']."</p>";
	echo "<p>and sex:"." ".$_GET['sex']."</p>";
	echo "<p>and agree or not ?:"." ".$_GET['agree']."</p>";
}




?>