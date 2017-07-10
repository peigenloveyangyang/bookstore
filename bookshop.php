<?php 
	include "php/common.php";
	session_start();
	$page_size = 6;
	// $arrt = array();
	if($_GET){
		$act = $_GET['act'];
		switch($act){
			case "get_page":
				$sql = "SELECT COUNT(id) FROM addbook";
				$result = mysql_query($sql);
				$row = mysql_fetch_row($result);
				$row=$row[0];
				$count = ceil($row/$page_size);
				$arr = array("error"=>0,"count"=>$count);
				echo json_encode($arr);
			break;
			case "getlist":
				$page = $_GET['page'];
				$start = ($page-1)*$page_size;
				$sql = "SELECT * FROM addbook LIMIT {$start},{$page_size}";
				$result = mysql_query($sql);
				$arr = array();
				while($row = mysql_fetch_assoc($result)){
					array_push($arr, $row);
				}
				echo json_encode($arr);
			break;
			case "getid":
				$id = $_GET['id'];
				$_SESSION['uid'] = $id;
				echo $_SESSION['uid'];
			break;
			case "getids":
				if(isset($_SESSION['uids'])){
					$id = $_GET['id'];
					$arrt = $_SESSION['uids'];
					array_push($arrt, $id);
					$_SESSION['uids'] = $arrt;
					echo json_encode($arrt);
				}else{
					$arrt = array();
					$id = $_GET['id'];
					array_push($arrt, $id);
					$_SESSION['uids'] = $arrt;
					echo json_encode($arrt);
				}
			break;
			case "delid":
				$pp = $_SESSION['uids'];
				$id = $_GET['id'];
				$a = array_search($id,$pp);
				array_splice($pp,$a,1);
				$_SESSION['uids'] = $pp;
				// echo json_encode($pp);
				// $ss = explode("",$str);
				echo $a;
			break;
			case "show":
				$ss = $_SESSION['uid'];
				// echo $_SESSION['uid'];
				$sql = "SELECT * FROM addbook WHERE id = $ss";
				$res = mysql_query($sql);
				$userArr = array();
				while($row = mysql_fetch_assoc($res)){
					array_push($userArr, $row);
				}
				// echo mysql_fetch_assoc($res);
				echo json_encode($userArr);
			break;
			case "shows":
				$ss = $_SESSION['uids'];
				// echo $ss;
				$userArr = array();
				// echo $_SESSION['uid'];
				foreach ($ss as $value) {
					$sql = "SELECT * FROM addbook WHERE id = $value";
					$res = mysql_query($sql);
					while($row = mysql_fetch_assoc($res)){
						array_push($userArr, $row);
					}
				}
				// echo mysql_fetch_assoc($res);
				// echo json_encode($ss);
				echo json_encode($userArr);
			break;
			default:
				# code...
				break;
		}
	}
 ?>