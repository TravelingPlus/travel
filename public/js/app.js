var allYoWays = angular.module('allYoWays', ['uiGmapgoogle-maps']).config(
    ['uiGmapGoogleMapApiProvider', function(GoogleMapApiProviders) {
        GoogleMapApiProviders.configure({
            key: 'AIzaSyA9ryo3MwUUszyGD4G6OBe_c-TL-38AkGI',
            china: true
        });
    }]
);