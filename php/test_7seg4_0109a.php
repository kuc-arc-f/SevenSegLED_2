<?php
// マルチバイト対応
date_default_timezone_set('Asia/Tokyo');

class AppConst {
	var $mMSG_Const="";
}
	
//------------------------------------
// @calling
// @purpose : Zero Str, max=10 char
// @date
// @argment
// @return
//------------------------------------
function getZeroStr( $src, $num ){
	if($num > 10){
		return "";
	}
	$buff="0000000000";

	$buff = $buff . $src;
	$i_len = strlen($buff);
	$ret = substr($buff, $i_len - $num, $num);
	
	return $ret;
}

//------------------------------------
// @calling : main
// @purpose : 
// @date
// @argment
// @return
//------------------------------------
	$ret_base= "000000000000000000000000";
	$sHEAD ="res=";
	//$respose="";
    $res2="";
    if(isset($_GET["tmp"])){
    	$tmpNum = $_GET["tmp"];
    	// Do something, your system
		$sHH = date("H");
		$sMM = date("i");
		$res2=$sHH . $sMM;
		echo $sHEAD .$res2;
    }else{
		echo $sHEAD .$ret_base;
    }
?>