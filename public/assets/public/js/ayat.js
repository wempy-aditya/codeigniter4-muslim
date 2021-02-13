var ayatTersimpan = localStorage.getItem("ayatTersimpan");
if (ayatTersimpan != undefined) {

    if (ayatTersimpan == "none") {
        document.getElementById('topNotification').innerText = "Belum ada yang disimpan";
        document.getElementById('btnTerakhirBaca').href = "#";
        console.log("none");
    } else {
        var currentUrl = window.location.href; 
        // halo gan jangan lupa saat sudah di server link diawah ini diubah ya!!!!!!!!!
        if (currentUrl == "http://localhost:8080/Quran") {
            document.getElementById('topNotification').innerText = localStorage.getItem("ayatTersimpan");
            document.getElementById('btnTerakhirBaca').href = localStorage.getItem("linkAyat");
        }
        console.log("berhasil");
    }

} else {
    localStorage.setItem("ayatTersimpan", "none");
}

function simpanAyat(event, ayat, linkAyat) {
    event.preventDefault();

    console.log(ayat);
    localStorage.setItem("ayatTersimpan", ayat);
    console.log(linkAyat);
    localStorage.setItem("linkAyat", linkAyat);
}

function shareLink(event, link) {
    event.preventDefault();

    var shareLink = document.createElement("textarea");
    document.body.appendChild(shareLink);
    shareLink.value = link;
    shareLink.select();
    document.execCommand("copy");
    document.body.removeChild(shareLink);
}

