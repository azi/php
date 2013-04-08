<?
	$config['db']['dbdriver']='mysql';
	$config['db']['host']= 'localhost';
	$config['db']['dbname']="demo";
	$config['db']['account']="demoAdmin";
	$config['db']['passwd']="!@WQ#6AS8XZi--";
	
	try{

			$dsn = $config['db']['dbdriver']. ":host=" . $config['db']['host'] .";dbname=" . $config['db']['dbname'];
			$db = new PDO($dsn,$config['db']['account'],$config['db']['passwd']);

			$db->query('SET NAMES UTF8');
	}catch(PDOException $e){
		echo "Error:" . $e->getMessage() ;
	}
?>
