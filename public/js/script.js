function ajax(){
    var req = new XMLHttpRequest();
    var form = document.getElementById("form");
    req.open(form.method, form.action, true);
    req.responseType = 'json';
    req.send(new FormData(form));
    req.onreadystatechange = function(){

        if(req.readyState === 4 && req.status === 200){
            
            var table = document.getElementById("weather");
            var row = table.insertRow(1);
            var json = req.response;
            var city = row.insertCell(0);
            city.innerHTML = form.city.value;
            var weather = row.insertCell(1);
            weather.innerHTML = json['weather'];
            var temperature = row.insertCell(2);
            temperature.innerHTML = json['temp'];
            var windSpeed = row.insertCell(3);
            windSpeed.innerHTML = json['wind'];
            var now = new Date();
            var month = now.getMonth() + 1;
            var day = now.getDate();
            var hour = now.getHours();
            var min = now.getMinutes();
            var date = row.insertCell(4);
            date.innerHTML = month + "/" + day + "  " + hour + ":" + min;
            form.city.value = null;
        
        }
    }
}

