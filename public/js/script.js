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

var tl = gsap.timeline({scrollTrigger: {trigger: ".ff-1", start: 'top center+=10%'}});
tl.from(".ff-1", {opacity: 0, ease: 'power2.in', duration: 0.4});
tl.from(".ff-3", {opacity: 0, ease: 'power2.in', duration: 0.4});
tl.from(".ff-5", {opacity: 0, ease: 'power2.in', duration: 0.4});
tl.from(".ff-2", {opacity: 0, ease: 'power2.in', duration: 0.4});
tl.from(".ff-4", {opacity: 0, ease: 'power2.in', duration: 0.4});
tl.from(".ff-6", {opacity: 0, ease: 'power2.in', duration: 0.4});

var frame_count  = 18,
    offset_value = 540,
    frame_two = 19,
    offset_two = 600,
    frame_count_swing  = 17,
    offset_swing = 600,
    frame_count_fall  = 19,
    offset_fall = 600,
    // frame_count_first = 1,
    // offset_first = 914;
    frame_count_first = 10,
    offset_first = 600.25;

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
    gsap.to(".viewer-swing", {
        backgroundPosition: (-offset_swing * frame_count_swing) + "px 50%",
        ease: "steps(" + frame_count_swing + ")", // use a stepped ease for the sprite sheet
        scrollTrigger: {
            trigger: ".scene-swing",
            start: "top top+=100",
            end: "+=" + (frame_count_swing * offset_swing),
            pin: true,
            scrub: true,
            // markers: true
        }
    });
    gsap.to(".viewer-fall", {
        backgroundPosition: (-offset_fall * frame_count_fall) + "px 50%",
        ease: "steps(" + frame_count_fall + ")", // use a stepped ease for the sprite sheet
        scrollTrigger: {
            trigger: ".scene-fall",
            start: "top top+=100",
            end: "+=" + (frame_count_fall * offset_fall),
            pin: true,
            scrub: true,
            // markers: true
        }
    });
    gsap.to(".viewer-first", {
        backgroundPosition: (-offset_first * frame_count_first),
        ease: "steps(" + frame_count_first + ")", // use a stepped ease for the sprite sheet
        scrollTrigger: {
            trigger: ".scene-first",
            start: "top top",
            end: "+=" + (frame_count_first * offset_first),
            pin: true,
            scrub: true,
            // markers: true
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
    gsap.to('.animate-colors-blue', {duration: 1, ease: "back.inOut(2)", y: 0});
    gsap.to('.sou-box-blue', {duration: 1, ease: "back.inOut(2)", rotate: 40});
    gsap.to('.animate-blue-text', {duration: 1, ease: "back.inOut(2)", opacity: 1});
    gsap.to('.animate-colors-red', {duration: 1, ease: "back.inOut(2)", y: 0, scrollTrigger: {
            trigger: '.animate-colors-red',
            start: 'top top+=25%',
            end: 'bottom center',
        }});
    gsap.to('.animate-red-text', {duration: 1, ease: "back.inOut(2)", opacity: 1, scrollTrigger: {
            trigger: '.animate-colors-red',
            start: 'top top+=25%',
            end: 'bottom center',
        }});
    gsap.to('.sou-box-red', {duration: 1, ease: "back.inOut(2)", rotate: -40, scrollTrigger: {
            trigger: '.animate-colors-red',
            start: 'top top+=25%',
            end: 'bottom center',
        }});
    gsap.to('.animate-colors-yellow', {duration: 1, ease: "back.inOut(2)", y: 0, scrollTrigger: {
            trigger: '.animate-colors-yellow',
            start: 'top top+=25%',
            end: 'bottom center',
        }});
    gsap.to('.animate-yellow-text', {duration: 1, ease: "back.inOut(2)", opacity: 1, scrollTrigger: {
            trigger: '.animate-colors-yellow',
            start: 'top top+=25%',
            end: 'bottom center',
        }});
    gsap.to('.sou-box-yellow', {duration: 1, ease: "back.inOut(2)", rotate: 40, scrollTrigger: {
            trigger: '.animate-colors-yellow',
            start: 'top top+=25%',
            end: 'bottom center',
        }});
    gsap.to('.animate-colors-purple', {duration: 1, ease: "back.inOut(2)", y: 0, scrollTrigger: {
            trigger: '.animate-colors-purple',
            start: 'top top+=25%',
            end: 'bottom center',
        }});
    gsap.to('.animate-purple-text', {duration: 1, ease: "back.inOut(2)", opacity: 1, scrollTrigger: {
            trigger: '.animate-colors-purple',
            start: 'top top+=25%',
            end: 'bottom center',
        }});
    gsap.to('.sou-box-purple', {duration: 1, ease: "back.inOut(2)", rotate: -40, scrollTrigger: {
            trigger: '.animate-colors-purple',
            start: 'top top+=25%',
            end: 'bottom center',
        }});
    gsap.to('.your-dance-studio', {y: '-30%', scrollTrigger: {
            scrub: true,
        }});
    gsap.to('.text-darken-1', {color: '#1c1a27', scrollTrigger: {
        trigger: '.text-darken-1',
        scrub: true,
        }});
    gsap.to('.text-darken-2', {color: '#1c1a27', scrollTrigger: {
        trigger: '.text-darken-2',
        scrub: true,
        }});
    gsap.to('.text-darken-3', {color: '#1c1a27', scrollTrigger: {
        trigger: '.text-darken-3',
        scrub: true,
        }});
    gsap.to('.text-darken-4', {color: '#1c1a27', scrollTrigger: {
        trigger: '.text-darken-4',
        scrub: true,
        }});
    gsap.to('.hive-lift', {y: -33, rotate: 15, scrollTrigger: {
            trigger: '.hive-lift',
            start: 'top top+=70%',
            scrub: true,
            toggleClass: 'hive-darken',
        }});
    gsap.to('.hive-lift-2', {y: -33, rotate: 15, scrollTrigger: {
            trigger: '.hive-lift-2',
            start: 'top top+=70%',
            scrub: true,
            toggleClass: 'hive-darken',
        }});
    gsap.to('.hive-lift-3', {y: -33, rotate: 15, scrollTrigger: {
            trigger: '.hive-lift-3',
            start: 'top top+=90%',
            scrub: true,
            toggleClass: 'hive-darken',
        }});
    gsap.to('.hive-lift-4', {y: -33, rotate: 15, scrollTrigger: {
            trigger: '.hive-lift-4',
            start: 'top top+=70%',
            scrub: true,
            toggleClass: 'hive-darken',
        }});
    gsap.to('.hive-lift-5', {y: -33, rotate: 15, scrollTrigger: {
            trigger: '.hive-lift-5',
            start: 'top top+=70%',
            scrub: true,
            toggleClass: 'hive-darken',
        }});
    gsap.to('.hive-lift-6', {y: -33, rotate: 15, scrollTrigger: {
            trigger: '.hive-lift-6',
            start: 'top top+=70%',
            scrub: true,
            toggleClass: 'hive-darken',
        }});
    gsap.to('.hive-lift-7', {y: -33, rotate: 15, scrollTrigger: {
            trigger: '.hive-lift-7',
            start: 'top top+=70%',
            scrub: true,
            toggleClass: 'hive-darken',
        }});
    gsap.to('.hive-lift-8', {y: -33, rotate: 15, scrollTrigger: {
            trigger: '.hive-lift-8',
            start: 'top top+=70%',
            scrub: true,
            toggleClass: 'hive-darken',
        }});
    gsap.to('.hive-lift-9', {y: -33, rotate: 15, scrollTrigger: {
            trigger: '.hive-lift-9',
            start: 'top top+=70%',
            scrub: true,
            toggleClass: 'hive-darken',
        }});
    gsap.to('.hive-lift-10', {y: -33, rotate: 15, scrollTrigger: {
            trigger: '.hive-lift-10',
            start: 'top top+=70%',
            scrub: true,
            toggleClass: 'hive-darken',
        }});
    gsap.to('.hive-lift-11', {y: -33, rotate: 15, scrollTrigger: {
            trigger: '.hive-lift-11',
            start: 'top top+=70%',
            scrub: true,
            toggleClass: 'hive-darken',
        }});
    gsap.to('.hive', {duration: 3, ease: "power2.in", y: -33, rotate: 15, scale: 1.1, scrollTrigger: {
            trigger: '.hive',
            start: 'top bottom',
            end: 'bottom center',
        }});
    gsap.to('.bg-welcome', {opacity: 0, scrollTrigger: {
            trigger: '.bg-welcome',
            start: 'top top+=10%',
            end: 'bottom center',
            scrub: true,
        }});
    gsap.to('.main-logo', {y: 200, scrollTrigger: {
            trigger: '.main-logo',
            start: 'top top+=10%',
            end: 'bottom center',
            scrub: true,
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


// document.getElementById("up-on-top").onclick = function() {upOnTop()};
// document.getElementById("scroll-fall").onclick = function() {scrollFall()};

function upOnTop() {
    gsap.to(window, {duration: 2, scrollTo: 0});
}

function downToBottom() {
    gsap.to(window, {duration: 5, ease: 'power2.inOut', scrollTo: '#bottom'});
}

function slowToBottom() {
    gsap.to(window, {duration: 10, ease: 'power2.inOut', scrollTo: '#bottom'});
}

function scrollFall() {
    gsap.to(window, {duration: 2, ease: 'power2.inOut', scrollTo: "#arrived-fall"});
}

function scrollSwing() {
    gsap.to(window, {duration: 1.25, scrollTo: "#arrived-swing"});
}

function blueToRed() {
    gsap.to(window, {duration: 2, ease: 'power2.inOut', scrollTo: "#section-colors-red"});
}

function redToYellow() {
    gsap.to(window, {duration: 2, ease: 'power2.inOut', scrollTo: "#section-colors-yellow"});
}

function yellowToPurple() {
    gsap.to(window, {duration: 2, ease: 'power2.inOut', scrollTo: "#section-colors-purple"});
}
