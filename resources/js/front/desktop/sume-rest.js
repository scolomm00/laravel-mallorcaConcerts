export let sumeRest = () => {

    let restas = document.querySelectorAll(".rest");
    let sumas = document.querySelectorAll(".sume");

    document.addEventListener("renderProductModules",( event =>{
        sumeRest();
    }), {once: true})
    
    sumas.forEach(suma => {

        suma.addEventListener("click", (event) => {

            event.preventDefault();

            let contador = suma.closest('.box-plus-minus').querySelector('.quantity');
            contador.value  = (parseInt(contador.value) + 1);
            
        });
    });

    restas.forEach(resta => {

        resta.addEventListener("click", (event) => {

            event.preventDefault();

            let contador = resta.closest('.box-plus-minus').querySelector('.quantity');

            if (contador.value > 1) {

                contador.value = (parseInt(contador.value) - 1);
            }
        });
    });
}