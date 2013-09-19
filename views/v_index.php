<!DOCTYPE html>
<html>
  <head>
    <title>Salary Calculator</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap -->
    
    <link href="css/libs/bootstrap/bootstrap.css" rel="stylesheet" media="screen">
    <link href="css/libs/bootstrap/bootstrap-responsive.css" rel="stylesheet" media="screen">
	<style>
		.active{color: #fff !important;background-color: #000 !important}
		strong{font:normal 18px Arial; color: #000;line-height:20px;text-align:right}
		.income{font:normal 18px Arial; color: #000;margin-left:30px}
		h4{font:normal 18px Arial; color: #000;line-height:20px;}
		.deductions{color:red;margin-left:40px}
		.small_deduc{margin-left:20px;font:normal 14px Arial;}
		h1 span{margin-left:20px}
	</style>
  </head>
  <body  ng-app="myModule" >

  	<!-- the controller-->
	<div class="container"  ng-controller="myController">

		<div class="span12">


			<!-- the input-->
			<div class="span5" >
				<form class="form-horizontal" >
					<div class="heading">
		                <h2 class="form-heading">Salary Calculator</h2>
		            </div>
					<div>
					  <alert ng-repeat="alert in alerts" type="alert.type" close="closeAlert($index)">{{alert.msg}}</alert>
					</div>
					<div class="control-group btn-group">
				    	<label class="control-label" style="margin-right:20px">Pay period</label>
				        <button ng-click="calculate(formdata)" type="button" class="btn" ng-model="formdata.pay_period" btn-radio="'Semi-Monthly'" style="margin-right:5px" >Semi-monthly</button>
				        <button ng-click="calculate(formdata)" type="button" class="btn" ng-model="formdata.pay_period" btn-radio="'Monthly'" >Monthly</button>
				    </div>
					
		            <div class="control-group">
		                <label class="control-label" for="monthly_salary">Monthly Salary</label>
		                <div class="controls">
							<input calculate type="text" id="monthly_salary" ng-model="formdata.monthly_salary" placeholder="Input your monthly salary">
		                </div>
		            </div>
					
					<div class="control-group">
		                <label class="control-label" for="tax_status">Tax Status</label>
		                <div class="controls">
							<select ng-model="formdata.tax_status">
								<option>Single</option>
								<option>Married</option>
							</select>
		                </div>
		            </div>
					
					<div class="control-group">
		                <label class="control-label" for="num_dependents">Number of dependents</label>
		                <div class="controls">
							<select calculate2 ng-model="formdata.num_dependents">
								<option>0</option>
								<option>1</option>
								<option>2</option>
								<option>3</option>
								<option>4</option>
							</select>
		                </div>
		            </div>
					
					<div class="control-group">
		                <label class="control-label" for="non_taxable">Non-taxable income</label>
		                <div class="controls">
							<input calculate3 type="text" id="non_taxable" ng-model="formdata.non_taxable" placeholder="Input non-taxable income" />
		                </div>
		            </div>

		            <div class="control-group">
		                <div class="controls">
		                    <!--<button type="submit" class="btn btn-primary" ng-click="addRecord(formdata)" style="margin-right:5px">Compute</button>-->
		                    <button type="button" class="btn btn-warning" ng-click="resetRecord()" > Reset to default</button>
		                </div>
		            </div>	
		            
		        </form>
	        </div>
	        <!--// the input-->


	        <!-- the calculate-->
	        <div class="span6" >
				<h3>{{formdata.pay_period}}</h3>
		        <table class="table table-hover span6" >
	              <tbody>
	                <tr>
					  <td colspan="2"><strong>Basic Pay </strong> <span class="income"> {{records.basic_pay}}</span></td>
					  
	                </tr>
					<tr>
					  <td colspan="2">
						
						<table class="span5">
							<tbody>
								<tr>
									<td  style="border:none">SSS Contribution  </td>
									<td  style="border:none"><span class="small_deduc">{{records.sss}}</span></td>
								</tr>
								<tr>
									<td>Philhealth Contribution  </td>
									<td><span class="small_deduc">{{records.philhealth}}</span></td>
								</tr>
								<tr>
									<td>Pagibig Contribution  </td>
									<td><span class="small_deduc">{{records.pagibig}}</span></td>
								</tr>
								<tr>
									<td>Witholding tax  </td>
									<td><span class="small_deduc">{{records.tax}}</span></td>
								</tr>
								<tr>
									<td colspan="2"><h4>Total Deductions  <span class="deductions"> {{records.total_deductions}}</span></h4></td>
								</tr>
							</tbody>
						</table>
						
					  </td>
	                </tr>
					
					<!--
					<tr>
					  <td><strong>Gross Pay :</strong></td>
					  <td><strong>{{records.gross_pay}}</strong></td>
	                </tr>
					
					
					<tr>
					  <td colspan="2">
					  <h4>Tax Deduction : <span class="deductions"> {{records.tax}}</span></h4>
					  <table class="span4">
							<tbody>
								<tr>
									<td>Witholding tax : </td>
									<td><span class="small_deduc">{{records.tax}}</span></td>
								</tr>
							</tbody>
						</table>
					  </td>
	                </tr>
					-->

					<tr>
					  <td><strong>Non-taxable Income </strong><span class="income">{{formdata.non_taxable}}</span></td>
	                </tr>
					
					<tr>
					  <td><br /><h1>Net Pay <span>{{ records.net }}</span></h1><br /></td>
	                </tr>
					
	              </tbody>
	            </table>
				<button type="button" class="btn btn-primary pull-right" ng-click="resetRecord()" > Print computation</button>
				
	        </div>
		<!-- //the view-->

		</div>
    </div>
    <!--// the controller-->

    <!-- the scripts-->
    <script src="js/libs/angular.min.js"></script>
    <script src="js/libs/ui-bootstrap-0.5.0.min.js"></script>
    <script src="js/libs/ui-bootstrap-tpls-0.5.0.min.js"></script>
	<script type="text/javascript" src="js/apps/mymain.js"></script>
	<script type="text/javascript" src="js/apps/myapp.js"></script>
	<!--// the scripts-->

  </body>
</html>

