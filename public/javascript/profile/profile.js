var c = 0;
function openProfile(x) {
    x.classList.toggle("change");
    var l = document.querySelector(".menuProfile");
    var k = document.querySelector(".buttonMenuProfile");
    while (c== 1 || c > 1){
        l.style.display ="none";
        k.style.display ="block";
        c = 0;
        return;
    }
    while ( c == undefined || c == 0){
        l.style.display ="block";
        k.style.display ="none";
        c = 1;
        return;
    }
}