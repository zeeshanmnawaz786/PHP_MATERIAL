// local time
const date = new Date();
const options = {
  weekday: "long",
  year: "numeric",
  month: "long",
  day: "numeric",
};
const formattedDate = date.toLocaleDateString("en-US", options);

// Json data
var weatherData = [
  {
    city: "karachi",
    temperature: "20",
    Weather: "Sunny",
    humidity: "75",
    wind_speed: "15",
    Tem_Range: "10°C /15°C",
  },
  {
    city: "lahore",
    temperature: "25",
    Weather: "Cloudy",
    humidity: "60",
    wind_speed: "10",
    Tem_Range: "18°C / 22°C",
  },
  {
    city: "quetta",
    temperature: "15",
    Weather: "Rainy",
    humidity: "80",
    wind_speed: "20",
    Tem_Range: "8°C / 12°C",
  },
  {
    city: "islamabad",
    temperature: "30",
    Weather: "Sunny",
    humidity: "85",
    wind_speed: "5",
    Tem_Range: "25°C / 30°C",
  },
  {
    city: "gilgit",
    temperature: "10",
    Weather: "Snowy",
    humidity: "70",
    wind_speed: "25",
    Tem_Range: "-5°C / 0°C",
  },
];

// logic
function getCityWeather(cityName) {
  for (let i = 0; i < weatherData.length; i++) {
    if (weatherData[i].city.toLowerCase() === cityName.toLowerCase()) {
      return weatherData[i];
    }
  }
  return null;
}

function showWeatherInfo(cityName) {
  const cityWeather = getCityWeather(cityName);
  if (!cityWeather) {
    document.getElementById(
      "weatherInfo"
    ).innerHTML = `<p style="margin:20px 0px; color: white;">City not found</p>`;
    return;
  }

  // html response
  const weatherInfoHTML = `
  <div style="margin:20px 0px; color: white;" >
  
    <h2 >${cityWeather.city}</h2>
    <p style="margin-top:10px">${formattedDate}</p>

  </div>
  <hr>
  <div align=left style="margin:20px 0px; color: white;" >

    <p style="margin-top:10px">Temperature: ${cityWeather.temperature}°C</p>
    <p style="margin-top:10px">Weather: ${cityWeather.Weather}°C</p>
    <p style="margin-top:10px">Humidity: ${cityWeather.humidity}%</p>
    <p style="margin-top:10px">Wind Speed: ${cityWeather.wind_speed} km/h</p>
    <p style="margin-top:10px">Temp Range: ${cityWeather.Tem_Range}</p>
  
  </div>
  `;
  document.getElementById("weatherInfo").innerHTML = weatherInfoHTML;
}

function getWeather() {
  const cityName = document.getElementById("cityName").value;
  showWeatherInfo(cityName);
}
