async function randomQuote() {
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
randomQuote()

var scrolldelay;
function pageScroll1() { 
    playAudio();
    pageScroll();
}
function pageScroll() {
    window.scrollBy(0,48);
    scrolldelay = setTimeout(pageScroll, 2240);
}
function playAudio() {
    var audioAsmaulHusna = new Audio('/assets/public/audio/Asmaul_Husna.mp3');
    audioAsmaulHusna.play()
}
function stopScroll() {
    clearTimeout(scrolldelay);
}