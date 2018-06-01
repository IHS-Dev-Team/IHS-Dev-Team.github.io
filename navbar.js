let prevScrollpos = window.pageYOffset;
window.onscroll = function () {
    let currentScrollPos = window.pageYOffset;
    if (prevScrollpos < currentScrollPos || currentScrollPos <= 0) {
        document.getElementById("navbar").style.top = "0px";
    }
    else {
        document.getElementById("navbar").style.top = "-75px";
    }
    prevScrollpos = currentScrollPos;
};
