<?php 

class Primary{

	public static $base_url="http://localhost/perpus/";
	public static $asset="http://localhost/perpus/resources/";

	public function view($file){
		include 'pages/'.$file.'.php';
	}
}


class Input extends Primary{

	public function get($value=null){
		$get=isset($_GET['value'])?$_GET['value']:null;
		return $get;
	}

}




 ?>