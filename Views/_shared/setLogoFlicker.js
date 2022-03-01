window.onload = function () {
    var logo = document.getElementById("logo");

    setInterval(function () {
        $(logo).animate({ opacity: 0.0 }, 150);
        $(logo).animate({ opacity: 1.0 }, 150);
        $(logo).animate({ opacity: 0.0 }, 150);
        $(logo).animate({ opacity: 1.0 }, 1500);
    }, 10000);
};
