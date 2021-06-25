import 'popper.js';
import 'bootstrap';
import LocomotiveScroll from 'locomotive-scroll';
import gsap from 'gsap/all';
import '../css/layout.scss';



window.addEventListener("load", function () {

    /*
    *   locomotive
    */

    const scroll = new LocomotiveScroll({
        el: document.querySelector('[data-scroll-container]'),
        smooth: true,
    });

    /*
    *   loader
    */
    var loader = gsap.timeline();
    loader.to('.loader__logo-container', { duration: 0.7, scale: 0, ease: "expo.out" })
        .to('.loader', { duration: 1.2, yPercent: -100, ease: "expo.inOut" });
});