<?php
$ed=300;
$smetka=0;
$cenadds=0;
if($ed<=50){
	$smetka=$ed*0.1;
}
elseif($ed>50&&$ed<=150){
	$smetka=50*0.1+($ed-50)*0.15;
}
elseif($ed>150&&$ed<=250){
	$smetka=50*0.1+100*0.15+($ed-150)*0.25;
}
else{
	$smetka=50*0.1+100*0.15+100*0.25+($ed-250)*0.35;
}
$cenadds=20/100*$smetka+$smetka;
echo "$cenadds lv.";
