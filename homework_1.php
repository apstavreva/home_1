<html>
<head>
</head>
<body>


<?php

//echo $_GET["number"];
$num=$_GET["number"];
if(is_numeric($num)){
//if($num!= 2 && $num%2==0 || $num% 3==0  && $num!= 3 )
//{
//	echo "<p style=\"color:blue\">The number ".$num." is NOT prime !</p>";
//}
//else
//{
//	echo "<p> The number ".$num." is prime !</p>";
//}

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
if( $prime==false){

echo "<p style=\"color:blue\">The num ".$num." is NOT prime !</p>";
}
else
{
echo "<p style=\"color:red\">The num ".$num." is prime !</p>";
}
}

else
echo "<p style=\"color:red\">The parameter is not a number</p>";
if($num<=0||$num>=19999){
echo "<p style=\"color:red\">The parameter is not within the range [0,19999]</p>";
}


?>

</body>
</html>