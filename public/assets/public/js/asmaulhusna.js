async function loadDataAsmaulHusna() {
    fetch("/assets/public/api/data/dataAsmaulHusna.json")
    .then(function(response) {
        return response.json()
    })
    .then(function(data) {
        var loadingAsmaulHusna = document.getElementById("loadingAsmaulHusna");
        loadingAsmaulHusna.remove();
        var list = "";
        data.data.forEach((itemData) => {
            list += '<tr>'+
                '<th>' + itemData.index + '</th>'+
                '<td>' + itemData.arabic + '</td>'+
                '<td>' + itemData.latin + '</td>'+
                '<td>' + itemData.translation_id + '</td></tr>';
        });
        document.getElementById('dataAsmaulHusna').innerHTML = list;
    })
}
loadDataAsmaulHusna()

var scrolldelay;
function playAsmaulHusna() { 
    playAudio();
    startScroll();
}
function startScroll() {
    window.scrollBy(0,48);
    scrolldelay = setTimeout(startScroll, 2236);
}
// var audioAsmaulHusna = new Audio('/assets/public/audio/Asmaul_Husna.mp3');
var audioAsmaulHusna = document.getElementById('audioAsmaulHusna');
function playAudio() {
    audioAsmaulHusna.play();
}
function stopAudio() {
    audioAsmaulHusna.pause();
}
function stopScroll() {
    stopAudio()
    clearTimeout(scrolldelay);
    window.scrollTo({top: 0, behavior: 'smooth'});
}