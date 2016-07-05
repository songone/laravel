<?php 
	
	//
	function __autoload($className)
	{
		// echo $className;
		$className = str_replace('\\','/', $className);
		//检测
		if(file_exists('./A/'.$className.'.php')){
			include './A/'.$className.'.php';
		}else if(file_exists('./Libs/'.$className.'.php') {
			include './Libs/'.$className.'.php';
		}

	}


	// $obj = new \Libs\Org\Vcode;

	// var_dump($obj);
      
	$upload = new \B\C\Upload;

	var_dump($upload);



