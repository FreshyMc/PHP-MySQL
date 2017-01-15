<?php
$triangle=array(114,115,110);

if($triangle[0]+$triangle[1]>$triangle[2]&&$triangle[0]+$triangle[2]>$triangle[1]&&$triangle[1]+$triangle[2]>$triangle[0]){
	echo "Yes";
}

else{ echo "No";}