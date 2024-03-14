<html>
<body>

<form action="index2.php" method="POST">
enter a nmber: <input type="text" name="number1"><br>
enter a nmber: <input type="text" name="number2"><br>
<input type="submit">
</form>

<?php
$num1=$_POST['number1'];
$num2=$_POST['number2'];

if($num1>$num2){
	echo "num1 is greater";
}
else{
	echo "num2 is greater";
}
?>
</body>
</html>