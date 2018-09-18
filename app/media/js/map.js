var MapPage = function (options) {
    var pageOptions = $.extend(true, {
            icon: '',
            coordinates: []
        }, options),
        directionsDisplay = new google.maps.DirectionsRenderer({
            suppressMarkers: true
        }),
        map;

    var mapCenter = new google.maps.LatLng(pageOptions.coordinates[0], pageOptions.coordinates[1]);

    var mapOptions = {
        zoom: 15,
        center: mapCenter,
        scrollwheel: false,
        navigationControl: false,
        mapTypeControl: false,
        scaleControl: true,
        draggable: true,
        mapMaker: true
    };

    map = new google.maps.Map(document.getElementById('map-canvas'), mapOptions);

    marker = new google.maps.Marker({
        map: map,
        position: new google.maps.LatLng(pageOptions.coordinates[0], pageOptions.coordinates[1]),
        icon: pageOptions.icon
    });

    directionsDisplay.setMap(map);
};