<?php
	try{
		$pdo = new PDO('mysql:host=localhost;dbname=lamp176;charset=utf8','root','');
	}catch(PDOException $e){
		die('数据库连接失败：原因：'.$e->getMessage());
	}
	$sql = "INSERT INTO address('uid','site','consignee','consignee_phone','default','detail')VALUES(?,?,?,?,?,?)";
	// $sql = "SELECT * FROM district WHERE name=?";
	$stmt = $pdo->prepare($sql);

	$stmt->bindValue(1,$_POST['uid']);

	$stmt->execute();

	$list = $stmt->fetchAll(PDO::FETCH_ASSOC);

	echo json_encode($list);
