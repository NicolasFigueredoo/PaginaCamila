

document.addEventListener("DOMContentLoaded", () =>{


const imprimirImagenes = (Numero) => {
    
    $(".carousel").append(`<div class="carousel-item">
    <img class="imagenuña" src="../Estilos/Imagenes/imguñas/imguña${Numero}.jpeg">
</div>`)
}

let array = [1,2,3,4,5,6,7,8,9,10,11,12,13,14];

array.forEach((numero)=>{

    imprimirImagenes(numero);
})

function autoplay() {
    $('.carousel').carousel('next');
    setTimeout(autoplay, 3000);
  }


 const elementoCarrusel = document.querySelectorAll(".carousel");

 M.Carousel.init(elementoCarrusel, {
    autoplay: true,
    duration: 5,
    dist: 5,
    shift: 5,
    padding:5,
    numvisible:4 
}, setTimeout(autoplay, 3000)

);


});


