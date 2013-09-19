<?php

class Index{


	function __construct(){

		self::display();

	}

	private function display(){

		require("views/v_".strtolower(__CLASS__).".php");
	}

}

$oIndex = new Index;