async function loadDataAsmaulHusna() {
    fetch("/assets/public/api/data/dataDoaHarian.json")
    .then(function(response) {
        return response.json()
    })
    .then(function(data) {
        var loadingAsmaulHusna = document.getElementById("loadingAsmaulHusna");
        loadingAsmaulHusna.remove();
        var list = "";
        var nomer = 0;
        data.data.forEach((itemData) => {
            nomer++
            list += '<div class="accordion-item">'+
                    '<h2 class="accordion-header" id="heading'+ nomer +'">'+
                    '<button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse'+ nomer +'" aria-expanded="true" aria-controls="collapse'+ nomer +'">'+
                    itemData.title+
                    '</button>'+
                    '</h2>'+
                    '<div id="collapse'+ nomer +'" class="accordion-collapse collapse" aria-labelledby="heading'+ nomer +'" data-bs-parent="#doaHarian">'+
                    '<div class="accordion-body">'+
                    '<h4 class="text-end ayatArab">'+ itemData.arabic +'</h4><br>'+
                    '<b>'+ itemData.latin +'</b><br>'+
                    '<p>'+ itemData.translation +'</p>'+
                    '</div>'+
                    '</div>'+
                    '</div>';
        });
        document.getElementById('doaHarian').innerHTML = list;
    })
}
loadDataAsmaulHusna()