function viewDiv() {
    document.getElementById("os").style.display = "block";
};

function downloadok() {
    var select = document.getElementById("select");
    var index = select.value;
    if (index == 1)
        window.location = "files/math7win.exe";
    else if (index == 2) window.location = "files/mathwin.exe";
   
}
function viewLINUX() {
    document.getElementById("os").style.display = "none";
};
function viewMACOS() {
    document.getElementById("os").style.display = "none";
};