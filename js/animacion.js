//Aquí es donde aplico animación a cualquier elemento de la página

window.sr = ScrollReveal();

    sr.reveal('.navbar', {
        duration: 2000,
        origin: 'bottom',
        distance: '-100px'
    });

    sr.reveal('.imagen', {
        duration: 2000,
        origin: 'rigth',
        distance: '-100px'
    });

    sr.reveal('.redes-sociales', {
        duration: 2000,
        origin: 'left',
        distance: '-100px'
    });
