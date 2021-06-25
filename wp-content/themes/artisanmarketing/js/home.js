import '../css/home.scss';
import gsap from 'gsap/all';

document.querySelectorAll(".js-marquee-text").forEach(function (e) {
    var t = e.querySelector("div");
    var elementWidth = e.querySelector(".text").offsetWidth;
    var windowWidth = window.innerWidth;

    for (var counter = 1; counter <= Math.ceil(windowWidth / elementWidth); ++counter) {
        var o = t.cloneNode(!0);
        t.after(o);
    }
});

document.querySelectorAll(".js-marquee-text").forEach(function (e) {
    var t = e.querySelectorAll("div"),
        o = e.querySelector(".text").textContent.length;
    if (e.dataset.speed) var r = e.dataset.speed;
    else r = 4;
    if (e.dataset.direction) var n = 100;
    else n = -100;
    var a = (r * o) / 4;
    a = a.toFixed(1);
    var c = gsap.to(t, { duration: a, xPercent: n, ease: "none", repeat: -1 }).timeScale(1);
});

