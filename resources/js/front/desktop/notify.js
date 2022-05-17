export let notify = () => {

    document.addEventListener('message', (event => {

        let notify = document.getElementById('notify');
        let notificationMessage = document.getElementById('notification-message');

        notificationMessage.innerHTML = event.detail.text;
        notify.classList.add(event.detail.type);
        notify.classList.add('active');

        setTimeout(() => {

            notify.classList.remove('active');
            notify.classList.remove(event.detail.type);
        }, 5000);

    }));
}