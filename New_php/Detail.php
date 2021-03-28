<?php
require_once("./Employee.php");
require_once("./Company.php");

$gces = new Company;
$gces->name = "Gandaki College Of Engineering And Science";
$gces->address = "Lamachaur";
array_push($gces->emlpoyees, new employee("Rajan","Pokhara"));
array_push($gces->emlpoyees, new employee("Kunwar","Lamachour"));
array_push($gces->emlpoyees, new employee("ABC","Ktm"));

?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<table border="1px">
	<tr>
		<th>Name</th>
		<th>Address</th>
	</tr>
	<tr>
		<?php
		foreach ($gces->emlpoyees as $employee) {
			?>
			<tr>
				<td><?=$employee->name?></td>
				<td><?=$employee->address?></td>
			</tr>
	<?php	}?>
	</tr>
</body>
</html>