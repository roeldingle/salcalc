<?php
class Connect{

	function __construct(){

		$aData = array(
				'hostname' => 'localhost',
				'username' => 'root',
				'password' => '',
				'database' => 'db_salcalc'
			);

		self::initConnect($aData);
	}

	function initConnect($aData){

		//connection to the database
		$dbhandle = mysql_connect($aData['hostname'], $aData['username'], $aData['password']) 
		 or die("Unable to connect to MySQL");

		 //select a database to work with
		$selected = mysql_select_db($aData['database'],$dbhandle) 
		  or die("Could not select ".$aData['database']);

	}

}

//new Connect;