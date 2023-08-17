<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Clima e Geolocalização com Codeigniter <?= CodeIgniter\CodeIgniter::CI_VERSION ?></title>

    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.9.3/dist/leaflet.css"
        integrity="sha256-kLaT2GOSpHechhsozzB+flnD+zUyjE2LlfWPgU04xyI=" crossorigin="" />


    <style>
    #map {
        height: 90vh;
    }
    </style>

</head>

<body>


    <main class="container-fluid pt-2 pb-5">

        <h1 class="text-center">Clima e Geolocalização com Codeigniter <?= CodeIgniter\CodeIgniter::CI_VERSION ?></h1>

        <div class="row">

            <div class="col-md-8">

                <!-- Dados do clima-->

                <div class="row mt-5">

                    <div class="col">
                        <input type="text" autocomplete="off" inputmode="numeric" id="latitude" class="form-control"
                            placeholder="Latitude" aria-label="Latitude">
                    </div>

                    <div class="col">
                        <input type="text" autocomplete="off" inputmode="numeric" id="longitude" class="form-control"
                            placeholder="Longitude" aria-label="Longitude">
                    </div>

                    <div class="col-md-12">
                        <button type="button" id="btnGetWeather" class="btn btn-primary mt-4">Obter clima</button>
                    </div>

                </div>


                <div class="row gx-2 mt-5" id="cardsWeather">

                    <!-- Receberá os cards do clima -->

                </div>


                <div class="row gx-2 mt-5" id="cardsWeatherAlerts">

                    <!-- Receberá os alertas do clima -->

                </div>



            </div>


            <div class="col-md-4 pt-5">

                <!-- Mapa -->

                <div id="map"></div>

            </div>

        </div>


    </main>


    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <script src="https://unpkg.com/leaflet@1.9.3/dist/leaflet.js" integrity="sha256-WBkoXOwTeyKclOHuWtc+i2uENFpDZ9YPdf5Hf+D7ewM=" crossorigin=""></script>


    <script>
    // obtém os dados do clima
    const fetchWeather = () => {

        let latitude = document.getElementById('latitude').value;
        let longitude = document.getElementById('longitude').value;

        // verifica e lat e long estão com campos vazios
        if (!latitude || !longitude) {

            document.getElementById('latitude').classList.add('border-danger');
            document.getElementById('longitude').classList.add('border-danger');

            return;
        }

        document.getElementById('latitude').classList.remove('border-danger');
        document.getElementById('longitude').classList.remove('border-danger');


        let url = `<?php echo route_to('weather') ?>?latitude=${latitude}&longitude=${longitude}`;


        fetch(url, {
            method: "get",
            headers: {
                "Content-Type": "application/json",
                "X-Requested-With": "XMLHttpRequest"
            }
        }).then((response) => {

            return response.json();


        }).then((data) => {

            document.getElementById('cardsWeather').innerHTML = data.cardsWeather;

        }).catch((error) => {

            document.getElementById('cardsWeather').innerHTML =
                `<div class="alert alert-danger">Não foi possível obter os dados do clima: ${error}</div>`;

        });

    }

    document.getElementById('btnGetWeather').addEventListener('click', fetchWeather);
    </script>
</body>
    
</html>