export let errorsFormMessage = () => {

    document.addEventListener('errorsMessage', (event => {

        let errors = document.getElementById('error');
        let errorMessage = document.getElementById('message-error');


        Object.keys(event.detail.errors).forEach(function(key) {
            errorMessage += '<li>' + errors[key] + '</li>';
        })

        errors.innerHTML = errorMessage;
        errors.classList.add('active');
        errorMessage.classList.add('active');

    }));
}