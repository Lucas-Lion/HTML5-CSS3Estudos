const button = document.querySelector("button")
const modal = document.querySelector("dialog")
const buttonClose = document.querySelector("dialog button")

button.onclick = function () {
    modal.showModal()
}

buttonClose.onclick = function () {
    modal.close()
}

modal.addEventListener("click", function(event) {
    if (event.target === modal) {
        modal.close();
    }
});
