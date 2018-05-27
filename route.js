angular.module('FaidherbeEnPoche')
.config(['$routeProvider',
    function($routeProvider){
        $routeProvider

        // ==== Routes front-end ==== //
        .when('/', {
            templateUrl : '/inde.php',
        })
        .when('/login', {
            templateUrl : '/index.php',
        })
        .when('/band/:bandId', {
            templateUrl : '/',
        })
        .when('/accueil', {
            templateUrl : '/view/pageprincipale/main.php',
        })
        .when('/khlasse', {
            templateUrl : '/view/pageprincipale/khlasse.php',
        })
        .when('/profil', {
            templateUrl : '/view/pageprincipale/profil.php',
        })
        .when('/forum', {
            templateUrl : '/view/pageprincipale/forum.php',
        })
        .when('/infoprofil', {
            templateUrl : '/view/pageprincipale/Infoperso.php',
        })
        .when('#', {
            redirectTo : '/'
        })
        .otherwise({
            redirectTo : '/'
        });
    }
]);