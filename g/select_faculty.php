<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>พิมพ์จันทร์ แสนโสม</title>
</head>

<body>
<h1>แสดงข้อมูลคณะ -- พิมพ์จันทร์ แสนโสม (พิม)</h1>

<?php
	include("connectdb.php") ;
	$sql = "SELECT * FROM faculty" ;
	$rs = mysqli_query($conn, $sql) ;
	while ($data = mysqli_fetch_array($rs)) {
		echo $data['f_id']. "<br>" ;
		echo $data['f_name']. "<hr>" ;
		}
		mysqli_close($conn) ;
?>
</body>
</html>