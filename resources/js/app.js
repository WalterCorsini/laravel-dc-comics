import "./bootstrap";
import "~resources/scss/app.scss";
import * as bootstrap from "bootstrap";
import.meta.glob(["../img/**"]);

//selection all delete form button
const deleteBtns = document.querySelectorAll('.delete button');

// controll that there are button
if(deleteBtns.length>0){
    //create foreach to apply eventlistner on click to button
    deleteBtns.forEach((btn) => {
        btn.addEventListener('click', function (e){
            e.preventDefault();
            // save title take to button by dataset attribute
            const title = btn.dataset.comicTitle;
            // create message to show on page when click form button
            document.getElementById('message').innerHTML = `stai per cancellare<br> <strong>${title}</strong>,<br> ne sei sicuro?`;
            // select button to confirm delete
            const modal = new bootstrap.Modal(document.getElementById('delete-modal'));
            //listen event click button
            document.getElementById("modal-delete-btn")
                .addEventListener("click", function () {
                    // when clicked, I submit the form button (parent)
                    btn.parentElement.submit();
                });
            // show modal on page.
             modal.show();
        });
});
}
