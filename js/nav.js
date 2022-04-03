$(document).ready(function () {
    var x = true
    const navToggle = $("#navtoggle");
    const nav = $("#nav");
    navToggle.on("click", function (event) {
        event.preventDefault();
        nav.toggleClass("show");
        if (x) {
            document.getElementById("ui").src = 'img/clos.svg';
        } else {
            document.getElementById("ui").src = 'img/menu.svg';
        }
        x = !x;
    });
});