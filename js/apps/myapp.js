var myController = function($scope,$routeParams, Data){
		
		/*set default*/
		$scope.formdata = {
			pay_period: "Semi-Monthly",
			monthly_salary: 0,
			basic_pay: 0,
			tax_status: "Single",
			num_dependents: 0,
			non_taxable: 0
		}
		
		$scope.records = {
			basic_pay: 0 ,
			sss : 0,
			philhealth : 0,
			pagibig : 0,
			other_deductions : 0,
			gross_pay : 0,
			tax : 0,
			total_deductions: 0,
			net : 0
		}
		
		
		
		$scope.resetRecord = function() {
			var default_data = {
				pay_period: "Semi-Monthly",
				monthly_salary: 0,
				basic_pay: 0,
				tax_status: "Single",
				num_dependents: 0,
				non_taxable: 0
			}
			$scope.formdata = default_data;
			
			$scope.calculate(default_data);
		};
		
		
		/*function to auto calculate*/
		$scope.calculate = function(formdata){
			var to_ajax_data = {
				monthly_salary : formdata.monthly_salary,
				num_dependents : formdata.num_dependents,
				non_taxable : formdata.non_taxable
			};
			/*get data via ajax*/
			Data.getRecords(to_ajax_data).then(function(records) {
			
				var basic_pay = (formdata.pay_period == "Semi-Monthly") ? formdata.monthly_salary / 2 : formdata.monthly_salary;
				var non_taxable = (formdata.non_taxable) ? parseFloat(formdata.non_taxable) : 0;
				var tot_net = (basic_pay  - records.other_deductions ) - records.tax + non_taxable;
				var tot_deduction = records.other_deductions + records.tax;
				$scope.records = {
					basic_pay: basic_pay ,
					sss : records.sss,
					philhealth : records.philhealth,
					pagibig : (records.pagibig).toFixed(2),
					other_deductions : records.other_deductions,
					gross_pay : basic_pay- records.other_deductions,
					tax : (records.tax).toFixed(2),
					total_deductions : (tot_deduction).toFixed(2),
					net : (tot_net).toFixed(2)
				}
			});
		}
		
		
		
		
		
		  //handling the submit button for the form
		  $scope.addRecord = function(formdata) {
		  	$scope.records.push(formdata);
		    $params = formdata;
		  }


		

}

myModule.directive("calculate", function(){
	return function (scope, element, attr){
		element.bind("keyup",function(){
			scope.calculate(scope.formdata);
		});
	}
});


myModule.directive("calculate2", function(){
	return function (scope, element, attr){
		element.bind("change",function(){
			scope.calculate(scope.formdata);
		});
	}
});

myModule.directive("calculate3", function(){
	return function (scope, element, attr){
		element.bind("keyup",function(){
			scope.calculate(scope.formdata);
		});
	}
});


