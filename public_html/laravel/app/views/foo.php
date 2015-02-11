<?php

if (DB::table('users')->where('username','tim')->pluck('username')!="") {
	$auth_token = null;
	$cfduid = DB::table('users')->where('username','tim')->pluck('cfduid');
	if (!$cfduid=="") {

		$headers = array(
			"Host" => "membean.com",
			"User-Agent" => "Mozilla/5.0 (Macintosh; Intel Mac OS X 10.10; rv:35.0) Gecko/20100101 Firefox/35.0",
			"Accept" => "text/html,application/xhtml+xml,application/xml;q=0.9,*/*;q=0.8",
			"Accept-Language" => "en-US,en;q=0.5",
			"Accept-Encoding" => "gzip, deflate",
			"Content-Type" => "application/x-www-form-urlencoded",
			"Connection" => "keep-alive"
			);

		$body = null;

		$response = Unirest\Request::get("https://membean.com/login", $headers, $body);
		$headers = $response->headers;
		$idx = strpos($response->body, "authenticity_token");
		$auth_token = substr($response->body, $idx+56, 43);
		//$auth_token = str_replace("+", "%2B", $auth_token);
		// foreach ($headers as $key => $value) {
		// 	if (strpos($value, "cfduid")!=false) { 
		// 		$cfduid = substr($value,9,43);

		// 		// DB::table('users')
	 //   //          	->where('username', 'tim')
	 //   //          		->update(array('cfduid' => $cfduid));
		// 	}
		// }
		//var_dump($string);
	}
	$headers = array(
		"Host" => "membean.com",
		"User-Agent" => "Mozilla/5.0 (Macintosh; Intel Mac OS X 10.10; rv:35.0) Gecko/20100101 Firefox/35.0",
		"Accept" => "text/html,application/xhtml+xml,application/xml;q=0.9,*/*;q=0.8",
		"Accept-Language" => "en-US,en;q=0.5",
		"Accept-Encoding" => "gzip, deflate",
		"Referer" => "https://membean.com/login",
		"Content-Type" => "application/x-www-form-urlencoded",
		"Connection" => "keep-alive"
	);
	$body = array(
		"utf8" => "✓",
		//"authenticity_token" => $auth_token,
		"login_session[login]" => "tim-solonin2@yandex.ru",
		"login_session[password]" => "Up760136",
		"login_session[remeber_me]" => "0",
		"button" => ""
		);

	$response = Unirest\Request::post("https://membean.com/sessions", $headers, http_build_query($body));
	var_dump($response->code);

}

	// print($response->code);
	// print($response->raw_body);
