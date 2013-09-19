<?php

require_once("mysql_connect.php");

class Model_get extends Connect{

	function __construct(){
		parent::__construct();
        $aReturn = self::get_deduction($_GET);
        echo json_encode($aReturn);
	}
	
	function get_deduction($aData){
		
		/*get variables*/
		$fBasicPay = floatval($aData['monthly_salary']);
		$iNumDep = $aData['num_dependents'];
		
		$fSssDed = self::select("tb_sss",array("ts_ded_ee")," ts_range_from <= ".$fBasicPay." AND ts_range_to >= ".$fBasicPay);
		$fPhilDed = self::select("tb_philhealth",array("tp_ded_ee")," tp_range_from <= ".$fBasicPay." AND tp_range_to >= ".$fBasicPay);
		
		
		
		/*process*/
		$fSss = ($fBasicPay < 1000) ? 0 : $fSssDed['ts_ded_ee'];
		$fPhil = ($fBasicPay == 0) ? 0 : $fPhilDed['tp_ded_ee'];
		$fPagibig = ($fBasicPay == 0) ? 0 : 100;
		$fTotOtherDed = $fSss + $fPhil + $fPagibig;
		$fGrossPay = $fBasicPay - $fTotOtherDed;
		
		/*tax computation*/
		$fTaxCategory = self::select("tb_tax_category",array("ttc_range_from","ttc_ttd_idx")," ttc_num_dependents = '".$iNumDep."' AND ttc_range_from <= ".$fGrossPay." AND ttc_range_to >= ".$fGrossPay);
		$fTaxDeduction = self::select("tb_tax_deduction",array("ttd_percent","ttd_deduction")," ttd_idx = ".$fTaxCategory['ttc_ttd_idx']);
		

		$sTax = ($fGrossPay - $fTaxCategory['ttc_range_from']) * $fTaxDeduction['ttd_percent'];
		$sTax = $sTax + $fTaxDeduction['ttd_deduction'];
		
		$aData = array(
			"basic_pay" => $fBasicPay,
			"sss" => floatval($fSss),
			"philhealth" => floatval($fPhil),
			"pagibig" => $fPagibig,
			"other_deductions" => $fTotOtherDed,
			"gross_pay" => $fGrossPay,
			"tax" => $sTax
		);
	
		return $aData;
	}
	
	/*
	@desc -> to select data
	@return -> array
	@implementation
		$sTbname = 'relative_jp';
		$aFields = array('no','keyword','collected_date','parent_no');
		$sWhere = '';
		$aRows = parent::_select($sTbname,$aFields,$sWhere);
	*/
	function select($sTbname, $aFields = false, $sWhere = false){
		$sFields = ($aFields != false) ? implode(",",$aFields) : "*";
		$sWhere = ($sWhere != false) ? " WHERE ".$sWhere : "";
		$sSql = "SELECT ".$sFields." FROM ".$sTbname.$sWhere;
		$aResult = mysql_query($sSql);
		return mysql_fetch_array($aResult);
	}
	
}



$oExec = new Model_get;