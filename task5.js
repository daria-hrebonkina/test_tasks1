window.onload = function() {
    var modal = document.getElementById('popup');
    var btn = document.getElementById("btnAsk");
    var span = document.getElementsByClassName("close")[0];
    btn.addEventListener('click', function(e) {
        e.preventDefault();
    }, false);
    btn.onclick = function() {
        modal.style.display = "block";
    }
    span.onclick = function() {
        modal.style.display = "none";
    }
    window.onclick = function(event) {
        if (event.target == modal) {
            modal.style.display = "none";
        }
    }
}
