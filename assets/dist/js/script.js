$(function () {



    const sr = ScrollReveal({
        origin: 'top',
        distance: '60px',
        duration: 2500,
        delay: 400,
        origin: 'top'
    });

    sr.reveal('.header-title' , {origin: 'top'});
    sr.reveal('.item-scroll' , {origin: 'left'});
    sr.reveal('.user-scroll' , {origin: 'right'});

});

