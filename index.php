<!doctype html>
<html lang="fa">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Weather</title>
    <meta name="description" content="Meteorological site for all regions of the world - Programmer and designer: Hamidreza Ramzani">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/main.css">
</head>
<body>
<div class="bg"></div>

<img src="images/loading.svg"  id="loading"  alt="">
<br>
<br>
<div class="container-fluid">
    <div class="row justify-content-center">
        <div class="col-12 ">
            <h1 class="text-center text-light" id="WelcomeSite">Weather in world!</h1>
            <h5 class="FU text-center text-warning" >create by Hamidreza Ramzani</h5>

        </div>
        <div class="col-12 col-md-4 position-relative SearchBox my-3 ">
                <input type="text" id="SearchInput" placeholder="enter the city name:">
                <button type="button" id="btnSearch" class="btn btn-sm btn-success">Go</button>
        </div>
    </div>
    <div class="row justify-content-center" id="Main" style="display: none">

        <div class="col-12 col-md-3 offset-md-1 p-2 MainStatus">
            <div class="ImageStatus">
                <img src="images/Clear.png" id="StatusImage" width="100%" height="100%" alt="">
            </div>
            <div class="CityStatus">
                <div >
                    <h1 class="d-block text-light FU" id="CityName">
                        <span>
                            Tehran
                        </span>
                        <img src="images/city.png" alt="">
                    </h1>
                </div>
                    <h3 class="d-block text-light FU " id="CountryName">IRAN</h3>

                <img src="images/1.svg" id="CountryFlag" width="80%" height="70" style="border-radius: 5px" alt="">

            </div>
            <div class="WeatherStatus">
                <h1 class="text-light text-right d-block FU" >
                    <img src="images/Thermometer.png" alt="">
                    <span id="WeatherStatus">Clear</span>
                </h1>
                <h4 class="float-right text-light FU d-block">
                    <img src="images/ds.png" alt="">
                   <span id="WeatherStatusDesc">
                        clear sky...
                   </span>
                </h4>
            </div>
        </div>
        <div class="col-12 col-md-3 MoreStatus p-2 my-3">
            <ul>
                <br>

                <li>
                    <span class="title float-right">
                        <img src="images/humidity.png" alt="">
                        humidity
                    </span>
                    <span class="value float-left" id="humidity">value</span>
                </li>

                <li>
                    <span class="title float-right">
                        <img src="images/pressure.png" alt="">
                        pressure
                    </span>
                    <span class="value float-left" id="pressure">value</span>
                </li>


                <li>
                    <span class="title float-right">
                        <img src="images/tools-and-utensils.png" alt="">
                        temp
                    </span>
                    <span class="value float-left" id="temp">value</span>
                </li>

                <li>
                    <span class="title float-right">
                        <img src="images/breeze.png" alt="">
                        wind speed
                    </span>
                    <span class="value float-left" id="WindSpeed">value</span>
                </li>

                <li>
                    <span class="title float-right">
                        <img src="images/cold.png" alt="">
                        Wind Degree
                    </span>
                    <span class="value float-left" id="WindDegree">value</span>
                </li>
            </ul>
        </div>
    </div>

</div>
<br>
<br>
</body>
<script src="js/jquery.js"></script>
<script src="js/main.js"></script>
</html>