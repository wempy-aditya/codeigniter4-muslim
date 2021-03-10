async function loadNiatShalat() {
    fetch("/assets/public/api/data/dataNiatShalat.json")
    .then(function(response) {
        return response.json()
    })
    .then(function(data) {
        var loadingBacaanShalat1 = document.getElementById("loadingBacaanShalat1");
        loadingBacaanShalat1.remove();
        var list = "";
        var nomer = 0;
        data.forEach((itemData) => {
            nomer++
            list += '<div class="accordion-item" data-aos="zoom-in-up">'+
                    '<h2 class="accordion-header" id="heading'+ nomer +'">'+
                    '<button class="accordion-button text-start collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse'+ nomer +'" aria-expanded="true" aria-controls="collapse'+ nomer +'">'+
                    itemData.name+
                    '</button>'+
                    '</h2>'+
                    '<div id="collapse'+ nomer +'" class="accordion-collapse collapse" aria-labelledby="heading'+ nomer +'" data-bs-parent="#niatShalat">'+
                    '<div class="accordion-body">'+
                    '<h4 class="text-end ayatArab1">'+ itemData.arabic +'</h4><br>'+
                    '<b>'+ itemData.latin +'</b><br>'+
                    '<p>'+ itemData.terjemahan +'</p>'+
                    '</div>'+
                    '</div>'+
                    '</div>';
        });
        document.getElementById('niatShalat').innerHTML = list;
    })
}
loadNiatShalat()

async function loadBacaanShalat() {
    fetch("/assets/public/api/data/dataBacaanShalat.json")
    .then(function(response) {
        return response.json()
    })
    .then(function(data) {
        var loadingBacaanShalat2 = document.getElementById("loadingBacaanShalat2");
        loadingBacaanShalat2.remove();
        var list = "";
        var nomer = 0;
        data.forEach((itemData) => {
            nomer++
            list += '<div class="accordion-item" data-aos="zoom-in-up">'+
                    '<h2 class="accordion-header" id="heading1'+ nomer +'">'+
                    '<button class="accordion-button text-start collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse1'+ nomer +'" aria-expanded="true" aria-controls="collapse1'+ nomer +'">'+
                    itemData.name+
                    '</button>'+
                    '</h2>'+
                    '<div id="collapse1'+ nomer +'" class="accordion-collapse collapse" aria-labelledby="heading1'+ nomer +'" data-bs-parent="#bacaanShalat">'+
                    '<div class="accordion-body">'+
                    '<h4 class="text-end ayatArab1">'+ itemData.arabic +'</h4><br>'+
                    '<b>'+ itemData.latin +'</b><br>'+
                    '<p>'+ itemData.terjemahan +'</p>'+
                    '</div>'+
                    '</div>'+
                    '</div>';
        });
        document.getElementById('bacaanShalat').innerHTML = list;
    })
}
loadBacaanShalat()