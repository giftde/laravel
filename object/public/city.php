<?php
	try{
		$pdo = new PDO('mysql:host=localhost;dbname=mi;charset=utf8','root','');
	}catch(PDOException $e){
		die('数据库连接失败：原因：'.$e->getMessage());
	}

	$sql = "SELECT * FROM district WHERE upid=?";

	$stmt = $pdo->prepare($sql);

	$stmt->bindValue(1,$_POST['upid']);

	$stmt->execute();

	$list = $stmt->fetchAll(PDO::FETCH_ASSOC);

	echo json_encode($list);
