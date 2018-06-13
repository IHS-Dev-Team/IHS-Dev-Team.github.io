let prevScrollpos = window.pageYOffset;
window.onscroll = function () {
    let currentScrollPos = window.pageYOffset;
    if (currentScrollPos <= 0 || (prevScrollpos >= currentScrollPos && (window.innerHeight + window.scrollY) < document.body.offsetHeight)) {
        document.getElementById("navbar").style.top = "5px";
    }
    else {
        document.getElementById("navbar").style.top = "-75px";
    }
    prevScrollpos = currentScrollPos;
};
