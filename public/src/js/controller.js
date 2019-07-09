angular.module('myApp', []).controller('myController', function ($scope, $http) {

    $scope.state = {
        Page: 'index'
    };

    $scope.fetchData = function () {
        $http({
            url: 'fetch-data',
            method: 'get'
        }).then(function (res) {
            $scope.products = (res.data);
        });
    };
    $scope.fetchData();

    $scope.fetchCart = function () {
        $http({
            url: 'fetchCart',
            method: 'get'
        }).then(function (res) {
            $scope.cart = res.data;

        })
    };
    $scope.fetchCart();

    $scope.addToCart = function (id) {
        $http({
            url: 'addToCart',
            method: 'post',
            data: {id: id}
        }).then(function (res) {
            $scope.cart = (res.data);
        });
    }

    $scope.less = function (id) {
        console.log(id);
        $http({
            url: 'less',
            method: 'post',
            data: {id: id}
        }).then(function (res) {
            $scope.cart = res.data;
        })
    }

    $scope.removeItem = function (id) {
        $http({
            url: 'removeItem',
            method: 'post',
            data: {id: id}
        }).then(function (res) {
            $scope.cart = res.data;
        })
    }

    $scope.clear = function () {
        $http({
            url: 'clearitem',
            method: 'get'
        }).then(function () {
            $scope.cart = null;
            $scope.state.Page = 'index';
        })
    }
});