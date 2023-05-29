   <!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=, initial-scale=1.0" />
    <title>Weather App</title>
    <link rel="stylesheet" href="style.css" />
  </head>
  <body>
    <div class="main-container">
      <div class="container top">
        <h1>Weather App</h1>
        <input
          type="text"
          class="search"
          id="cityName"
          placeholder="Search by city name"
        />
        <button type="submit" onclick="getWeather()" class="btn">Submit</button>

        <div id="weatherInfo" class="container">
            <div class="icon">
              <img src="" alt="" class="weather-icon" />
            </div>
            <div class="location">
              <div class="city">NewYork, US</div>
              <div class="date">Thursday, May 11 2023</div>
            </div>
            <div class="current">
              <div class="temp">Temp: 25<span>°C </span></div>
              <div class="temp">Humidity: 70 <span>°C</span></div>
              <div class="temp">Wind Speed: 25 <span>°C</span></div>
              <div class="weather">Weather: Sunny</div>
              <div class="temp-range">Temp Range: 10°C / 15°C</div>
            </div>
          </div>
        </div>
    </div>

    <script src="app.js"></script>
  </body>
</html>

