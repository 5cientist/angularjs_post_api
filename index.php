<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Angilarjs post</title>
    <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.6.9/angular.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.6.9/angular-route.js"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">

</head>
<body>
<div class="container">

<h1 align="center">DATA</h1>
<div ng-app="insert" nng-controller="controller">
<label>Name</label>
<input type="text" name="name" ng-model="name" class="form-control">
<br>
<label>email</label>
<input type="text" name="email" ng-model="email" class="form-control">
<br>
<label>age</label>
<input type="text" name="age" ng-model="age" class="form-control">
<br>
<input type="submit" name="insert" class="btn btn-success" ng-click="inser()" value="Insert">


</div>




</div>

    
</body>
</html>