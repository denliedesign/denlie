// import { gsap } from "gsap/dist/gsap";
// import { ScrollToPlugin } from "gsap/dist/ScrollToPlugin";
// import { ScrollTrigger } from "gsap/dist/ScrollTrigger";
//
// gsap.registerPlugin(ScrollToPlugin, ScrollTrigger);

const monthNames = ["January", "February", "March", "April", "May", "June",
    "July", "August", "September", "October", "November", "December"
];

function monthFunction() {
    const today = new Date();
    const month = monthNames[today.getMonth()];
    document.getElementById("current-month").innerHTML = month;
}

var frame_count  = 18,
    offset_value = 540,
    frame_two = 19,
    offset_two = 600;

function animate(){
    gsap.to('#intro img', {opacity: 0, scrollTrigger: {
        trigger: '#intro',
            start: 'top top',
            end: 'bottom center',
            scrub: true
        }});
    gsap.set('#intro-gray', {scrollTrigger: {
        trigger: '#intro-gray',
        start: 'top bottom-=10%',
        end: 'bottom center-=10%',
        toggleClass: 'active'
    }});
    const parallaxTL = gsap.timeline({
        ease: 'none',
        scrollTrigger: {
            trigger: '.bcg-parallax',
            start: 'top bottom',
            scrub: true

        }
    });
    gsap.to(".viewer", {
        backgroundPosition: (-offset_value * frame_count) + "px 50%",
        ease: "steps(" + frame_count + ")", // use a stepped ease for the sprite sheet
        scrollTrigger: {
            trigger: ".scene",
            start: "top top+=100",
            end: "+=" + (frame_count * offset_value),
            pin: true,
            scrub: true
        }
    });
    gsap.to(".viewer-two", {
        backgroundPosition: (-offset_two * frame_two) + "px 50%",
        ease: "steps(" + frame_two + ")", // use a stepped ease for the sprite sheet
        scrollTrigger: {
            trigger: ".scene-two",
            start: "top top+=100",
            end: "+=" + (frame_two * offset_two),
            pin: true,
            scrub: true
        }
    });
    gsap.from('.included-bars', {duration: 1, width: 100, delay: 0.25, stagger: 1});
    gsap.to('.hourly-block', {duration: 1, opacity: 1, delay: 1, stagger: .5});

    parallaxTL
        .from('.content-wrapper', {duration: 0.4, autoAlpha: 0}, 0.4)
        .from('.bcg', {duration: 1.75, y: '-50%'}, 0);
    parallaxTL
        .from('.content-texture-wrapper', {duration: 1, autoAlpha: 0}, 1)
        .from('.bg-texture', {duration: 2, y: '-80%'}, 0);
    TweenMax.to(".highlight-seo ", 1, {className:"highlight-more", repeat:-1, delay:0.5, repeatDelay:0.5, yoyo:true});
    gsap.to('.animate-ballerina', {skewX: 3, scrollTrigger: {
            trigger: '#section-animate-1',
            start: 'top top+=20%',
            end: 'bottom center',
            scrub: true
        }});
    gsap.set('.animate-color', {scrollTrigger: {
            trigger: '.animate-color',
            start: 'top bottom-=10%',
            end: 'bottom center-=10%',
            toggleClass: 'decolor'
        }});
    gsap.set('.animate-recital', {scrollTrigger: {
            trigger: '.animate-recital',
            start: 'top center',
            end: 'bottom center',
            toggleClass: 'recital-go'
        }});

}

function nextQuestion() {
    gsap.to(window, {duration: 1, scrollTo: {y: "#stylequestion", offsetY: 200}});
}

function endTest() {
    gsap.to(window, {duration: 1, scrollTo: {y: "#endtest", offsetY: 200}});
}

window.addEventListener('load', function(){
    animate();
    monthFunction();
})


document.getElementById("up-on-top").onclick = function() {upOnTop()};
function upOnTop() {
    gsap.to(window, {duration: 2, scrollTo: 0});
}

