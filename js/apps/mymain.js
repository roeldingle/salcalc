var myModule = angular.module('myModule', ['ui.bootstrap']);

myModule.factory('Data', ['$http', '$rootScope', function($http, $rootScope) {

  var records = [];
 
  return {
    getRecords: function(select_data) {
      return $http.get('models/model_get.php', {

         params: select_data

        }).then(function(response) {
        records = response.data;
        $rootScope.$broadcast('handleRecords',records);
        return records;
      });
    }
  };

}]);