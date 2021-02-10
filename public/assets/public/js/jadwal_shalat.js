var currentLocation = localStorage.getItem("currentLocation");
if (currentLocation != undefined) {

    if (currentLocation == "none") {
        document.getElementById('lokasiDaerah').innerText = "not set";
    } else {
        console.log("berhasil");
    }

} else {
    localStorage.setItem("currentLocation", "none");
}


var buttonLocation = document.getElementById("buttonLocation");
buttonLocation.onclick = function(){
    var currentDate = document.getElementById("currentDate").value;
    var locationSelect = document.getElementById("locationSelect").value;
    var separate = locationSelect.split("_");
    localStorage.setItem("currentLocation", separate[0]);

    fetch('https://api.banghasan.com/sholat/format/json/jadwal/kota/'+ separate[0] +'/tanggal/'+currentDate)
    .then(function(response) {
        return response.json()
    })
    .then(function(data) {
        var ashar = data.jadwal.data.ashar;
        var dhuha = data.jadwal.data.dhuha;
        var dhuhur = data.jadwal.data.dzuhur;
        var imsak = data.jadwal.data.imsak;
        var isya = data.jadwal.data.isya;
        var maghrib = data.jadwal.data.maghrib;
        var subuh = data.jadwal.data.subuh;
        var terbit = data.jadwal.data.terbit; 
        document.getElementById('lokasiDaerah').innerText = separate[1];
        document.getElementById('imsak').innerText = imsak;
        document.getElementById('subuh').innerText = subuh;
        document.getElementById('terbit').innerText = terbit;
        document.getElementById('dhuha').innerText = dhuha;
        document.getElementById('dhuhur').innerText = dhuhur;
        document.getElementById('ashar').innerText = ashar;
        document.getElementById('maghrib').innerText = maghrib;
        document.getElementById('isya').innerText = isya;
    })
}