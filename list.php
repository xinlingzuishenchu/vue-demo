<?php 
    //连接数据库
    $lnk = mysqli_connect("localhost","root","root");
//	var_dump($result);
	//选择数据库
	mysqli_select_db($lnk,"upload");
	//编写查询语句 *代表所有字段
//	$query = "SELECT * FROM users";
//	$query = "SELECT user,pass FROM users";
	$query = "SELECT * FROM upload";
	//执行sql查询
	$result = mysqli_query($lnk,$query);
	//提取数据->mysql_fetch_row->返回的索引数组
	
	// while($row = mysql_fetch_array($result)){
	// 	echo ($row[1]);
	// }
	

		while($rows = mysqli_fetch_array($result)){
			//可以直接把读取到的数据赋值给数组或者通过字段名的形式赋值也可以
			$array[] = $rows;
			}
			
			//最后通过json_encode()转化数组
			echo '{"result":"success","data":'.json_encode($array).'}';

?>