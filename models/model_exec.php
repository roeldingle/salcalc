<?php

require_once("mysql_connect.php");



class Model_exec extends Connect{

	function __construct(){
	
		

		 parent::__construct();
		 
		 self::insertTaxDedTable();

         //$aReturn = self::insertTable();
       
        // echo json_encode($aReturn);
        
	}
	
	function insertSssTable(){
	
		$sSql = "INSERT INTO tb_sss VALUES('null','1000','1249.99','80.70','33.30')";
		$aResult = mysql_query($sSql);
	
	
		$iRange1 = 1250;
		$iRange2 = 14750;
		$iRangeInc = 500;
		
		$iEr = 116;
		$iEe = 50;
		
		$iErIncr = 35.3;
		$iEeIncr = 16.7;
		
		
		while($iRange1 < $iRange2 ){
			
			$whole = floor($iEr);
			$fraction = $iEr - $whole; 
			
			if(number_format($fraction,2) == 0.60){
				$iEr = $iEr + .10;
			}
			
			$whole2 = floor($iEe);
			$fraction2 = $iEe - $whole2; 
			
			if(number_format($fraction2,2) == 0.60){
				$iEe = $iEe + .10;
			}
			
			if(number_format($fraction2,2) == 0.40){
				$iEe = $iEe - .10;
			}
			
			//echo $iRange1." - ".(($iRange1 +$iRangeInc) - .01)." => "."ER: ".$iEr."; EE: ".$iEe."<br />";
			
			$sSql = "INSERT INTO tb_sss VALUES('null','".$iRange1."','".(($iRange1 +$iRangeInc) - .01)."','".$iEr."','".$iEe."')";
			//echo $sSql."<br />";
			$aResult = mysql_query($sSql);
			
			$iRange1 += $iRangeInc;
			
			
			
			$iEr +=$iErIncr;
			$iEe += $iEeIncr;
			
		}
		
		
	
	}

	function insertPhilTable(){
		
		$sSql = "INSERT INTO tb_philhealth VALUES('null','0','7999.99','87.50','87.50')";
		$aResult = mysql_query($sSql);
		
		$iRange1 = 8000;
		$iRange2 = 35000;
		$iRangeInc = 1000;
		
		$iDed = 200;
		$DedIncr = 25;
		
		$iIncr = 25;
		
		
		while($iRange1 < $iRange2 ){
			//echo $iRange1." - ".($iRange1 - .01)." => Er : ".($iDed / 2)." ; Ee : ".($iDed / 2)."<br />";
			
			$sSql = "INSERT INTO tb_philhealth VALUES('null','".$iRange1."','".(($iRange1 + $iRangeInc) - .01)."','".($iDed / 2)."','".($iDed / 2)."')";
			$aResult = mysql_query($sSql);
			
			$iRange1 += $iRangeInc;
			$iDed += $DedIncr;
		}
	
	
	}

	function insertTaxDedTable(){
	
		$iRange1 = 1;
		$iRange2 = 8;
		166.66
		
		while($iRange1  <= $iRange2){
		
		echo $iRange1."<br />";
		
		$iRange1 += 1;
		
		}
	}
}



$oExec = new Model_exec;