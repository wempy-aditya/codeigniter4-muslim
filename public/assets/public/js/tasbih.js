var idBacaanTasbih = 1;
function previousBacaanTasbih(event) {
    event.preventDefault();
    if (idBacaanTasbih != 0) {
        idBacaanTasbih -= 1;
        loadDataAsmaulHusna(idBacaanTasbih);
    }
}
function nextBacaanTasbih(event) {
    event.preventDefault();
    idBacaanTasbih += 1;
    loadDataAsmaulHusna(idBacaanTasbih);
}

loadDataAsmaulHusna(idBacaanTasbih); 
async function loadDataAsmaulHusna(idBacaanTasbih) {
    fetch("/Rest_api/get_wirid/"+idBacaanTasbih)
    .then(function(response) {
        return response.json()
    })
    .then(function(data) {
        if (data.wirid != null) {
            document.getElementById('bacaanTasbihArab').innerHTML = data.wirid.arab;
            document.getElementById('bacaanTasbihLatin').innerHTML = data.wirid.latin;
            document.getElementById('bacaanTasbihArti').innerHTML = data.wirid.arti;
            tasbihCounter("tasbihCounterValue"+data.wirid.id_wirid);
        }
    })
}

function tasbihCounter(tasbihType){
    document.getElementById("tasbihType").value = tasbihType;
    if (localStorage.getItem(tasbihType) != undefined) {
        document.getElementById('tasbihCounter').innerHTML = localStorage.getItem(tasbihType);
    } else {
        localStorage.setItem(tasbihType, 0);
        document.getElementById('tasbihCounter').innerHTML = localStorage.getItem(tasbihType);
    }
    
}


function minusValueCounter(event) {
    event.preventDefault();
    var tipeTasbih = document.getElementById('tasbihType').value;
    var currentValue = parseInt(localStorage.getItem(tipeTasbih));
    if (currentValue != 0) {
        var updateCurrentValue = currentValue - 1;
        localStorage.setItem(tipeTasbih, updateCurrentValue);
        tasbihCounter(tipeTasbih);
    }
}

function plusValueCounter(event) {
    event.preventDefault();
    var tipeTasbih = document.getElementById('tasbihType').value;
    var updateCurrentValue = parseInt(localStorage.getItem(tipeTasbih)) + 1;
    localStorage.setItem(tipeTasbih, updateCurrentValue);
    tasbihCounter(tipeTasbih);
}

function resetValueTasbih(event) {
    event.preventDefault();
    var tipeTasbih = document.getElementById('tasbihType').value;
    localStorage.setItem(tipeTasbih, 0);
    tasbihCounter(tipeTasbih);
}