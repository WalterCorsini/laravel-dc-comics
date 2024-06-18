import "./bootstrap";
import "~resources/scss/app.scss";
import * as bootstrap from "bootstrap";
import.meta.glob(["../img/**"]);

//selezione tutti i bottoni elimina nella pagina
const deleteBtns = document.querySelectorAll('.delete button');

// controllo che ci siano bottoni per eseguire questo codice
if(deleteBtns.length>0){
    //creo un foreach per poter applicare ad ogni bottone l'ascolto dell'evento click
    deleteBtns.forEach((btn) => {
        btn.addEventListener('click', function (e){
            e.preventDefault();
            // salvo il titolo prelevato dal bottone che ha un attributo dataset (data-nomescelto)
            const title = btn.dataset.comicTitle;
            // personalizzo il messaggio in pagina a seconda del film da cancellare inserendo il titolo
            document.getElementById('message').innerHTML = `stai per cancellare<br> <strong>${title}</strong>,<br> ne sei sicuro?`;
            // seleziono il bottone cancella in pagina
            const modal = new bootstrap.Modal(document.getElementById('delete-modal'));
            //mi metto in ascolto dell'evento click
            document.getElementById("modal-delete-btn")
                .addEventListener("click", function () {
                    // se viene cliccato faccio submit del genitore (il pulsante submit del form)
                    btn.parentElement.submit();
                });
            // mostra il modale
             modal.show();
        });
});
}
