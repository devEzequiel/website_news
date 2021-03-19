<?php


	define('ENVIRONMENT', 'localhost');
	//define('ENVIRONMENT', 'production');
	
	//script para coneectar ao banco de dados
	if (ENVIRONMENT === 'localhost'){
		define('BASE_URL', 'http://localhost/GitHub/website_news/news/app_news/');
		define('host', 'localhost');
		define('username', 'root');
		define('pwd', null);
		define('dbname', 'news');

	} else if (ENVIRONMENT == 'production'){ 

		define ('BASE_URL', '');
		define('host', '');
		define('username', '');
		define('pwd', '');
		define('dbname', '');

	}
	
	$conn = mysqli_connect(host, username, pwd, dbname);

	// Check connection
	if (mysqli_connect_errno()) {
  		echo "Failed to connect to MySQL: " . mysqli_connect_error();
  		exit();
	}

	function DBClose ($conn){
		$close = mysqli_close($conn);
		return $close;
	}


?>