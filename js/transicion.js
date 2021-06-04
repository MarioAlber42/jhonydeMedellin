let animado = document.querySelectorAll(".animado");

function mostrarScroll() {
    let scrollTop = document.documrntElement.scrollTop;
    for (var i=0; i < animado.length; i++) {
        let alturAnimado = animado[i].offsetTop;
        if (alturaAnimado < scrollTop) {
            animado[i].style.opacity = i;
                }
    }
}

window.addEventListener('scoll', mostrarScroll);