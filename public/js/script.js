function ajax(){
    var req = new XMLHttpRequest();
    var form = document.getElementById("form");
    req.open(form.method, form.action, true);
    req.responseType = 'json';
    req.send(new FormData(form));
    req.onreadystatechange = function(){

        if(req.readyState === 4 && req.status === 200){
        
            var para = document.createElement('p');
            var json = req.response;
            para.textContent = "City: " + form.city.value + " Weather: " + json['weather'] + " Tempature: " + json['temp'] + " Wind speed:" + json['wind'];
            document.body.appendChild(para);
            form.city.value = null;
        
        }
    }
}

