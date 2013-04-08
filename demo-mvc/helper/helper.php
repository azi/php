<?

		function cut_content($a,$b){
    		$a = strip_tags($a); //去除HTML標籤
    		$sub_content = mb_substr($a, 0, $b, 'UTF-8'); //擷取子字串
    		$ext =(strlen($a) > strlen($sub_content)) ?"...more":"";
    		return $sub_content.$ext;  //顯示處理後的摘要文字
	}
?>