function openModal() {
    var modal = document.getElementById("myModal");
    if (modal) {
        modal.style.display = "flex";
    }
}

    function closeModal() {
        var modal = document.getElementById("myModal");
        if (modal) {
            modal.style.display = "none";
        }
    }

    window.onclick = function(event) {
        var modal = document.getElementById("myModal");
        if (modal && event.target === modal) {
            modal.style.display = "none";
        }
    }
