var count = new Date("april 12, 2021 00:00:00").getTime();
var x = setInterval(function() {
    var now = new Date().getTime();
    var d = count - now;

    var days = Math.floor(d/(1000*60*60*24));
    var hours = Math.floor((d%(1000*60*60*24))/(1000*60*60));
    var minutes = Math.floor((d%(1000*60*60))/(1000*60));
    var seconds = Math.floor((d%(1000*60))/1000);

    document.getElementById("days").innerHTML = days;
    document.getElementById("hours").innerHTML = hours;
    document.getElementById("minutes").innerHTML = minutes;
    document.getElementById("seconds").innerHTML = seconds;
    
    var proses1 = days*(100/120);
    document.getElementById("progressLine1").innerHTML = '<div class="progress-bar progress-bar-striped bg-secondary" role="progressbar" style="width: ' + proses1 + '%" aria-valuenow="' + days + '" aria-valuemin="0" aria-valuemax="120"></div>';
    var proses2 = hours*(100/24);
    document.getElementById("progressLine2").innerHTML = '<div class="progress-bar progress-bar-striped bg-secondary" role="progressbar" style="width: ' + proses2 + '%" aria-valuenow="' + hours + '" aria-valuemin="0" aria-valuemax="24"></div>';
    var proses3 = minutes*(100/60);
    document.getElementById("progressLine3").innerHTML = '<div class="progress-bar progress-bar-striped bg-secondary" role="progressbar" style="width: ' + proses3 + '%" aria-valuenow="' + minutes + '" aria-valuemin="0" aria-valuemax="60"></div>';
    var proses4 = seconds*(100/60);
    document.getElementById("progressLine4").innerHTML = '<div class="progress-bar progress-bar-striped bg-secondary" role="progressbar" style="width: ' + proses4 + '%" aria-valuenow="' + seconds + '" aria-valuemin="0" aria-valuemax="60"></div>';

    if(d <= 0){
        clearInterval(x);
    }
    // console.log(days, hours, minutes, seconds);

},1000)