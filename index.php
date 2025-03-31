<?php
$my_str='welcome to php';
echo "the length of the string is" .strlen($my_str);
?>
<br>
<?php
$color1="red";
$color2="blue";
$color3="green";
print_r($color1)

?>
<br>
<?php
$cars = array("Volvo", "BMW", "Toyota");
echo count($cars);
?>
<br>
<?php
$ages=array("peter"=>22,"clark"=>32,"jhon"=>30);
foreach($ages as $key_arr=>$val_arr)
echo $key_arr . "=".$val_arr."<br>";
?>
<?php
$cars = array("Volvo", "BMW", "Toyota");
sort($cars);
print_r($cars);
echo"<br>";
rsort($cars);
print_r($cars);
echo "<br>";
?>
<?php
$ages=array("peter"=>22,"clark"=>32,"jhon"=>30);
asort($ages);//ascending order
print_r($ages);
echo "<br>";
arsort($ages);
print_r($ages);//decending order
echo "<br>";
?>

<?php  
$colors = array("red", "green", "blue", "yellow"); 
echo "using for each:<br>";
foreach ($colors as $x) {
   
  echo "$x <br>";
}
?>  