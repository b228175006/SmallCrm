<?php 
	function p($arr){
		echo '<pre>'.print_r($arr,true).'</pre>';
	}
	function needadmin(){
		if ($_SESSION['admin']=='1') {
			$needadmin="block-inline";
		}else{
			$needadmin="none";
		}
		return $needadmin;
	}
	function iadmin(){
		if ($_SESSION['iadmin']=='1') {
			$iadmin="block-inline";
		}else{
			$iadmin="none";
		}
		return $iadmin;
	}
 ?>