<?php
	require_once('koneksi.php');
	
	$sql = "SELECT * FROM mahasiswa";
	
	$r = mysqli_query($con,$sql);
	
	$result = array();
	
	while($row = mysqli_fetch_array($r)) {
		array_push($result,array(
			"id"=>$row['id'],
			"nama"=>$row['nama'],
			"jurusan"=>$row['jurusan']
		)
	);
	}
	
	echo json_encode(array('result'=>$result));
	
	mysqli_close($con);
?>