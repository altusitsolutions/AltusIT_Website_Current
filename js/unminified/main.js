// PRELOADER
var tl = new TimelineMax({
    repeat: -1
});

tl.add(
    TweenMax.from(".logo-svg", 1.3, {
        scale: .8,
        ease: Cubic.easeInOut
    })
);

tl.add(
    TweenMax.to(".logo-svg", 1.3, {
        scale: .8,
        ease: Cubic.easeInOut
    })
);

function sleep(ms) {
    return new Promise(resolve => setTimeout(resolve, ms));
}

$(window).on("load", function() {
	sleep(1500).then(() => { 
        $(".loader_wrapper").fadeOut("slow"); 
    });
});

// FADE IN ON SCROLL
const faders = document.querySelectorAll('.fade_in');
const sliders = document.querySelectorAll('.slide_in');
const appearOptions = {
    threshold: 0.1,
    rootMargin: "0px 0px -50px 0px",

};

const appearOnScroll = new IntersectionObserver(function(entries, appearOnScroll) {
    entries.forEach(entry => {
        if (!entry.isIntersecting) {
            return;
        } else {
            entry.target.classList.add('appear');
            appearOnScroll.unobserve(entry.target);
        }
    })
}, appearOptions);

faders.forEach(fader => {
    appearOnScroll.observe(fader);
});

sliders.forEach(slider => {
    appearOnScroll.observe(slider);
});

// FADER FOR TESTIMONIALS SPECIFICALLY
const testimonial_fade = document.querySelectorAll('.testimonial_fade_in');
const testimonial_options = {
    threshold: 0.4,
    rootMargin: "0px 0px -50px 0px",

};

const testimonial_on_scroll = new IntersectionObserver(function(entries, testimonial_on_scroll) {
    entries.forEach(entry => {
        if (!entry.isIntersecting) {
            return;
        } else {
            entry.target.classList.add('appear');
            testimonial_on_scroll.unobserve(entry.target);
        }
    })
}, testimonial_options);

testimonial_fade.forEach(fader => {
    testimonial_on_scroll.observe(fader);
});