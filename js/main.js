window.addEventListener('load', function () {
    $('#loading').slideDown(0);
    SetWeather("Ramsar");
});

$('#btnSearch').click(function () {
    var CityName = $('#SearchInput').val();
    if ($.trim(CityName) != "") {
        $('#loading').slideDown(0);
        SetWeather(CityName).then((response) => {
            SetStatus(response);
            $('#Main').fadeIn(150);
            $('#loading').slideUp(0); 
        }).catch((err) => {
            alert("city not found!");
            $('#Main').fadeIn(150);
            console.log('has an error' , err);
        });
    }
    else
        alert("Can not be empty");

});


var SetWeather = (CityName = "Tehran") => {
    var url = "https://api.openweathermap.org/data/2.5/weather?q=" + CityName + "&appid=7c5d387d3fdeefc4c073410663110b7f";
    $('#Main').slideUp(0);
    return new Promise((resolve , reject) => {        
        $.ajax({
                method: 'GET',
                url: url,
                success: function (response) {
                    resolve(response);                    
                },
                error: function (error) {
                    reject(error)                    
                }
        })
    });
    
}

var SetStatus = function (response) {
    $("#StatusImage").attr("src", "images/" + response.weather[0].main + ".png");
    $('#CityName span').text(response.name);
    $.get("https://restcountries.eu/rest/v2/alpha/" + response.sys.country, null, function (msg) {
        $('#CountryName').text(msg.name);
        $('#CountryFlag').attr('src', msg.flag);
    });
    $('#WeatherStatus').text(response.weather[0].main);
    $('#WeatherStatusDesc').text(response.weather[0].description + "...");
    $('#humidity').text(response.main.humidity);
    $('#pressure').text(response.main.pressure);
    $('#temp').text(response.main.temp);
    $('#WindSpeed').text(response.wind.speed);
    $('#WindDegree').text(response.wind.deg);
}



