<?php
session_start();
 
if(isset($_REQUEST['code']))
{	
	//var_dump($_SESSION['captcha']);
	//var_dump($_REQUEST['code']);
	if(strtolower($_REQUEST['code']) === strtolower($_SESSION['captcha'])){
		echo json_encode(array('resp'=>'Valido'));
	}else {
		echo json_encode(array('resp'=>'Incorreto'));
	}
    //echo json_encode(strtolower($_REQUEST['code']) == strtolower($_SESSION['captcha']));
}
else
{
    echo 0; // no code
}
?>