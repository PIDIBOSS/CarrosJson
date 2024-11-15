<?php

namespace src;

use src\Router;

class Route
{
	protected static $router;

	private function __construct(){
    
  }

	protected static function getRouter()	{
		if(empty(self::$router)) {
			self::$router = new Router;
		}
		return self::$router;
	}

	public static function post($pattern, $callback){
		return self::getRouter()->post($pattern, $callback);
	}

	public static function get($pattern, $callback){
    //echo "aqui";
		return self::getRouter()->get($pattern, $callback);
	}
  
  //public static function getFileParamentos($pattern, $callback){
    //echo "aqui";
    //print_r($pattern);
     //echo "<br>-------<br>";
    //print_r($callback);
      
		//return self::getRouter()->get($pattern, $callback);
	//}

	public static function put($pattern, $callback){
		return self::getRouter()->put($pattern, $callback);
	}

	public static function delete($pattern, $callback){
		return self::getRouter()->delete($pattern, $callback);
	}

	public static function resolve($pattern){
		return self::getRouter()->resolve($pattern);
	}

	public static function translate($pattern, $params){
		return self::getRouter()->translate($pattern, $params);
	}

}

?>