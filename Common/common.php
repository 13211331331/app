<?php


	function md5Encrypt($str){
		$key='*M3~A0!R9@C1"#H7%s2^o/f4-t?3';
		return md5(md5($str.$key).$key);
	}
	 function get_time(){
            return date('Y-m-d H:i:s',time());
     }










?>