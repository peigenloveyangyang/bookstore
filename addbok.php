<?php 
	include "php/common.php";
	if ($_GET) {
   	    $obj = $_GET;
   	}else{
	   	$obj = $_POST;
   	}

   	// $sqls = "SELECT * FROM users WHERE bookname='{$obj[bookname]}'";
   	// $res = mysql_query($sqls);
   	// $userArr = array();
   	// while($row = mysql_fetch_assoc($res)){
   	// 	array_push($userArr, $row);
   	// }
   	// $bol = true;
   	// foreach($userArr as $value){
   	// 	if($obj[bookname] == $value['bookname']){
   	// 		$bol = false;
   	// 		echo '{"error":"101"}';
   	// 		break;
   	// 	}
   	// }

	$file = $_FILES["bookpic"];

	if($file["error"] == 0){
		$imgArr = array("image/jpeg","image/png","image.gif");
		if(in_array($file["type"], $imgArr)){
			$imgType = explode("/", $file["type"])[1];
			if($imgType == "jpeg"){
				$imgType = "jpg";
			}
			$time = time();
			$name = date("YmdHis",$time);
			//img/45687689.jpg
			$name = "img/".$name.".".$imgType;
			$bol = move_uploaded_file($file["tmp_name"], $name);
			if($bol){
				// $serverPath = $_SERVER["REQUEST_URI"];
				// $dirname = dirname($serverPath);
				// $path = $dirname."/".$name;
				$sql = "INSERT INTO addbook (id,bookname,bookintro,bookwriter,bookpress,bookdate,bookprice,bookisbn,bookpic) 
				VALUES (NULL,'$obj[bookname]','$obj[bookintro]','$obj[bookwriter]','$obj[bookpress]','$obj[bookdate]','$obj[bookprice]','$obj[bookisbn]','{$name}')";
				$result = mysql_query($sql);
				if(mysql_affected_rows()>0){
					echo '{"error":"100","msg":"插入数据库成功"}';
				}else{
					echo '{"error":"104","msg":"插入数据库失败"}';
				}
			}else{
				echo '{"error":"103","msg":"上传到服务器失败"}';
			}
		}else{
			echo '{"error":"102","msg":"上传的不是图片"}';
		}
	}else{
		echo '{"error":"101","msg":"上传失败"}';
	}
 ?>