document.addEventListener("DOMContentLoaded", function(event) {
    window.onload = function () {
        // gsap.to('.main-icons', {duration: 1, opacity: 1, delay: 0.25, stagger: .5})
        gsap.from('.included-bars', {duration: 1, width: 100, delay: 0.25, stagger: 1})
        gsap.to('.hourly-block', {duration: 1, opacity: 1, delay: 1, stagger: .5})
    }
});

const monthNames = ["January", "February", "March", "April", "May", "June",
    "July", "August", "September", "October", "November", "December"
];

    function monthFunction() {
        const today = new Date();
        const month = monthNames[today.getMonth()];
        document.getElementById("current-month").innerHTML = month;
}

monthFunction();
