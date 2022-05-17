export let form = () => {

    let storeButtons = document.querySelectorAll('.store-button');

    storeButtons.forEach(storeButton => {
        
        storeButton.addEventListener('click', (event) => {

            event.preventDefault();

            document.dispatchEvent(new CustomEvent('message', {
                detail: {
                    text: 'Formulario enviado correctamente',
                    type: 'success'
                }
            }));
        });
    })
}