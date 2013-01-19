<?php

class HTTPConnect {
	
	
	public static function __callStatic ($method, $params) 
	{
		if ( method_exists( $method ) ) 
		{
			return call_user_func_array($method, $params);
		}
        
        throw new Exception( $method . ' does not exist');
	}
}

$result = HTTPConnect::connect('GET', ['http://rss.cnn.com/rss/edition_worldsportblog.rss'])
                ->get();