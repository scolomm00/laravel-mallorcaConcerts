export let sumeRest = () => {

    let restas = document.querySelectorAll(".rest");
    let sumas = document.querySelectorAll(".sume");

    sumas.forEach(suma => {

        suma.addEventListener("click", () => {

            let contador = suma.closest('.box-plus-minus').querySelector('.plus-minus-input');
            contador.value  = (parseInt(contador.value) + 1);
            
        });
    });

    restas.forEach(resta => {

        resta.addEventListener("click", () => {

            let contador = resta.closest('.box-plus-minus').querySelector('.plus-minus-input');

            if (contador.value > 1) {

                contador.value = (parseInt(contador.value) - 1);
            }
        });
    });
}