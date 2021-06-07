$(function () {
    var words = [
        'une future développeuse',
        'curieuse et passionnée',
        'en recherche d\'une alternance'
    ],
        i = 0;

    // on gère l'affichage du menu responsive pour les écrans inférieurs ou égaux à médium (<992px)
    $(".navbar-responsive").toggle();

    $(".menu").click(function () {
        $(".navbar-responsive").toggle("slow");
    });

    // on gère l'affichage du niveau aléatoire des phrases d'accroche du header (toutes les 3.5 secondes)
    setInterval(function () {
        $("#words").fadeOut(function () {
            $(this).html(words[i = (i + 1) % words.length]).fadeIn();
        });
    }, 3500);

    // on gère le scroll vers les différentes sections du site
    $(".scroll").click(function () {
        var section = $("." + this.id);
        $("html,body").animate({ scrollTop: section.offset().top }, 'slow');
    });

    // On gère l'animation des progress-bar pour les compétences
    window.sr = ScrollReveal();
    sr.reveal('.progress-bar',{
        origin : 'left',
        duration : 2000,
        distance : '100%'
    });


});