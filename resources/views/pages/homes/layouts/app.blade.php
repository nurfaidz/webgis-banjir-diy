<!DOCTYPE html>
<html lang="en">
<head>
    <title>SIGAB Jogja</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="format-detection" content="telephone=no">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="author" content="">
    <meta name="keywords" content="">
    <meta name="description" content="">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="{{asset('assets/front/css/vendor.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('assets/css/style.css')}}">
    <link rel="stylesheet" href="https://unpkg.com/leaflet/dist/leaflet.css"/>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;700&family=Open+Sans:ital,wght@0,400;0,700;1,400;1,700&display=swap"
        rel="stylesheet">
    @stack('styles')

</head>
<body>

@include('pages.homes.layouts.header')

@yield('content')

@include('pages.homes.layouts.footer')
<script src="{{asset('assets/front/js/jquery-1.11.0.min.js')}}"></script>
<script src="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe"
        crossorigin="anonymous"></script>
<script src="{{asset('assets/front/js/plugins.js')}}"></script>
<script src="{{asset('assets/front/js/script.js')}}"></script>

{{-- Leaflet --}}
<script src="https://unpkg.com/leaflet/dist/leaflet.js"></script>
@stack('scripts')
<script>
    var map = L.map('map').setView([-7.797068, 110.370529], 10);

    L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
        attribution: '&copy; OpenStreetMap contributors'
    }).addTo(map);

    // Load File GeoJSON
    fetch('{{ asset('assets/geojson/di-yogyakarta.geojson') }}')
        .then(response => response.json())
        .then(data => {
            L.geoJSON(data, {
                style: function (feature) {
                    return {
                        color: "#FF0000",
                        weight: 2,
                        opacity: 0.7,
                        fillColor: "#FF0000",
                        fillOpacity: 0.2
                    };
                },
                onEachFeature: function (feature, layer) {
                    if (feature.properties && feature.properties.name) {
                        layer.bindPopup(feature.properties.name);
                    }
                }
            }).addTo(map);
        })
        .catch(error => console.error('Gagal memuat batas wilayah:', error));
</script>
</body>
</html>
