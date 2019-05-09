<?php
	/*验证验证码是否正确*/
	// session_start();
	
	// $code = trim($_POST['code']);//接收前端传来的数据
	
	// $raw_success = array('code' => 1, 'msg' => '验证码正确:Success');
	
	// $raw_fail = array('code' => 2, 'msg' => '验证码错误:Failured');

	// $res_success = json_encode($raw_success);
	// $res_fail = json_encode($raw_fail);
	
 //    // header("Content-type:text/html;charset=utf-8");
	// header('Content-Type:application/json;charset=utf-8');//这个类型声明非常关键
	
	// if ($code == $_SESSION["verfycode"]) {
	// 	echo $res_success;
	// } else {
	// 	echo $res_fail; // 错误验证pad输入
	// }
	
    // header("Content-type:text/html;charset=utf-8");
	header('Content-Type:application/json;charset=utf-8');//这个类型声明非常关键
	
    $raw_success = array('code'=>'1','message'=>'操作成功','cmd'=>'201001','time'=>'1547709830', 'data'=>array('novelid'=>'1000', 'uid'=>'628875', 'roleid'=>'8478', 'title'=>'零下记忆'));
	$res_success = json_encode($raw_success);
	echo $res_success;
?>