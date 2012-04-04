<html>
<head>
</head>
<body>
<?php
//print_r(range(20,1000,37));
$ar = range(20,1000,37);
$i=0;
print_r($ar);

function find_3_prime($ar){
$c=0;
foreach($ar as $val)
{
if (is_prime($val)==1){
$c++;
}
if( $c==3)
{
echo $val;
break;
}
}
}
/*function find_3_prime($prom){
	$count=0;
	foreach($prom as $val)
	{
	 if (is_prime($val)==true){
	 $count++;
	 }
	 
	 if( $count==3)
	 {
	 echo "Tretoto prosto chislo e : ".$val." ";
	 break;
	 }
	}

}*/


function is_prime($num){
$prom=2;
$prom2=sqrt($num);
$prime=true;
while($prime && ($prom<=$prom2)){
if($num % $prom==0)
{
$prime=false;
}
$prom++;
}
return $prime;
}
function check_exists($ar){
$ar2 = Array(146,284,871);
foreach ($ar2 as $val){
if(in_array( $val, $ar)==true)
	{
	echo"<p>The number ".$val." exists in  the  array</p>";
	}
	else
	{
	echo "<p>The number ".$val." does not exists in  the array</p>";
	}
}
}
foreach (range(20, 1000, 37) as $num) {
	$ar[$i]=$num;
	$i++;
}
check_exists($ar);
find_3_prime($ar);
?>
</body>
<html>