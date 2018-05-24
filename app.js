angular.module('FaidherbeEnPoche',[
    'ngRoute', 'ngCookies', 'ngMaterial', 'ngMessages'
]).config(['$locationProvider', function($locationProvider){
    $locationProvider.html5Mode(true);
    $locationProvider.hashPrefix('!');
}])