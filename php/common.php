<?php 
	

	header("Content-type:text/html;charset=utf-8");

	  date_default_timezone_set("PRC");

	  mysql_connect("localhost","root","");

	  $as = mysql_select_db("book");

	  mysql_query("set names utf8");
	  // if($as){
	  // 	echo "链接成功";
	  // }else{
	  // 	echo "链接失败";
	  // }

	// function connect($host,$user,$password,$database){
	//  	$link = mysqli_connect($host, $user, $password, $database);
	// 	if(mysqli_errno($link)){
	// 		die(mysqli_error($link));
	// 	}else{
	// 		//设置编码格式；
	// 		mysqli_set_charset($link, "utf8");
	// 		return $link;
	// 	}
	//  }


	// function getone($sql,$link){
	// 	$result = mysqli_query($link, $sql);
	// 	$res = mysqli_fetch_assoc($result); //最常用
	// 	if($res && mysqli_num_rows($result)>0){
	// 		return $res;
	// 	}else{
	// 		return false;
	// 	}
	// }

	
	// function add($arr,$link,$table){
	//  	$keys = join(",",array_keys($arr));
	// //	print_r(array_values($arr));die;
	// 	foreach($arr as $k=>$v){
	// 		if(is_string($v)){
	// 			$arr[$k] = "'".$arr[$k]."'";
	// 		}
	// 	}
	// 	$values = join(",", array_values($arr));
	// 	//(username,password,age)
	//  	$sql = "INSERT INTO {$table} ({$keys}) VALUES ({$values})";
	// //	echo $sql;die; 
	// 	$res = mysqli_query($link, $sql);
	// 	return $res;
	//  }

	// function congfu($str,$link,$table){
	// 	$sql = "SELECT * FROM {$table} WHERE user='{$str}'";
	// 	$res = mysqli_query($link, $sql);
	// 	return $res;
	// }






 ?>