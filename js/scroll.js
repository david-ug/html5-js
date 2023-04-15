// niech nasza funkcja uruchamia się zaraz po załadowaniu strony, czyli zgodnie z jQuery gdy dokument będzie ready
$(document).ready(function(){
    // dodajmy płynne scrollowanie do wszystkich linków i niech reaguje na event, którym będzie kliknięcie
    $("a").on('click', function(event) {

        // za pomocą wbudowanej funkcji preventDefault() usuwamy wszystkie domyślne zachowania naszego linku
        event.preventDefault();

        // Zapiszmy teraz do zmiennej wartość href naszego odnośnika, dla którego funkcja została wywołana (linku, w który kliknęliśmy)
        var hash = $(this).attr('href');

        // Wskazujemy elementy html i body (oba, aby działało na wszystkich przeglądarkach) i wykorzystując metodę jQuery animate() każemy wykonać płynną animację od góry strony do miejsca, w którym jest nasz odnośnik (href). 800 to czas w milisekundach ile czasu trwa cała animacja.
        $('html, body').animate({
            scrollTop: $(hash).offset().top
        }, 800);
    });
});
