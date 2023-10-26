    

      $(document).ready(function () {
        // Al clic su una domanda, mostra o nascondi la risposta
        $(".question").click(function () {
            $(this).find(".answer").slideToggle();
        });
    });

    