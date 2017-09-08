var map;
function initMap() {
    map = new google.maps.Map(document.getElementById('map'), {
        center: {lat: 46.4179322, lng: 30.7246878},
        zoom: 17
    });

    marker = new google.maps.Marker({
        map:map,
        // draggable:true,
        // animation: google.maps.Animation.DROP,
        position: new google.maps.LatLng(46.4176122, 30.725),
        icon: 'http://sitecare.vn.ua/last/img/marker.png' // null = default icon
    });

}