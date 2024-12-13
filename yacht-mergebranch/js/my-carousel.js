$('.owl-carousel').owlCarousel({
    rtl: true,
    loop: true,
    margin: 10,
    nav: true,
    navContainer: '.custom-nav-container',
    responsive: {
        0: {
            items: 1
        },
        600: {
            items: 2
        },
        800: {
            items: 3
        },
        1000: {
            items: 3
        },
        1400: {
            items: 4
        },
        1600: {
            items: 5
        }
    }
});
