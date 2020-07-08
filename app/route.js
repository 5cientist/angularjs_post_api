var app = angular.module("insert",["ngRoute"]);
app.controller("controller", function($scope, $http){
$scope.insert = function(){
    $http.post(
        "api/insert_data.php",
        {'name':$scope.name, 'email':$scope.email, 'age':$scope.age}
    ).success(function(data){
        alert(data);
        $scope.name = null;
        $scope.email = null;
        $scope.age = null ;
        $scope.displayData()
    });


}

});
