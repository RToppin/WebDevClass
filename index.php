<?php

$db_host = "elvisdb.rowan.edu";
$db_name = "toppin22";
$db_user = "toppin22";
$db_pass = "142LoveDatabases!!";

$conn = mysqli_connect($db_host, $db_user, $db_pass, $db_name);

if (mysqli_connect_error()){
		echo mysqli_connect_error();
		exit;
}

echo "Connected successfully! =)";

$sql = "
		SELECT *
		FROM article
		ORDER BY published_at;
		";
$results = mysqli_query($conn, $sql);

if ($results === false){
	echo mysqli_error($conn);
}else{
	$articles = mysqli_fetch_all($results);
	var_dump($articles);
}

