var idBacaanTasbih = 1;
function previousBacaanTasbih(event) {
    event.preventDefault();
    if (idBacaanTasbih != 1) {
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
    document.getElementById("buttonAddMain").classList.remove("cardCircleShadow");
    playAudio();
    var tipeTasbih = document.getElementById('tasbihType').value;
    var updateCurrentValue = parseInt(localStorage.getItem(tipeTasbih)) + 1;
    localStorage.setItem(tipeTasbih, updateCurrentValue);
    tasbihCounter(tipeTasbih);
    setTimeout(munculShadow, 180);
}
function munculShadow() {
    document.getElementById("buttonAddMain").classList.add("cardCircleShadow")
}

function resetValueTasbih(event) {
    event.preventDefault();
    var tipeTasbih = document.getElementById('tasbihType').value;
    localStorage.setItem(tipeTasbih, 0);
    tasbihCounter(tipeTasbih);
}

var audioClickButton = document.getElementById('audioClickButton');
function playAudio() {
    audioClickButton.play();
}

document.onkeydown = clickKeyboardButton;
function clickKeyboardButton(e) {
    e = e || window.event;
    if (e.keyCode == '37') {
        minusValueCounter(event)
    }
    else if (e.keyCode == '39') {
        plusValueCounter(event)
    }
}