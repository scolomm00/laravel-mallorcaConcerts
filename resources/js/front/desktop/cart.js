export let cart = () => {

    let main = document.querySelector("main");
    let plusMinusButtons = document.querySelectorAll('.plus-minus-button');
    let storeButton = document.querySelector('.cart-resume-button-buy');

    document.addEventListener("cart",( event =>{
        cart();
    }), {once: true});
    
    plusMinusButtons.forEach(plusMinusButton => {

        plusMinusButton.addEventListener("click", () => {

            let url = plusMinusButton.dataset.url;

            let sendNewRequest = async () => {
                
                let response = await fetch(url, {
                    headers: {
                        'X-Requested-With': 'XMLHttpRequest',
                    },
                    method: 'GET', 
                })
                .then(response => {
                                
                    if (!response.ok) throw response;

                    return response.json();
                })
                .then(json => {

                    main.innerHTML = json.content;

                    document.dispatchEvent(new CustomEvent('cart'));
                })
                .catch(error =>  {
    
                    if(error.status == '500'){
                        console.log(error);
                    };
                });
            };

            sendNewRequest();

        });
    });
 
    if(storeButton){

        storeButton.addEventListener("click", () => {

            let url = storeButton.dataset.url;

            let sendCreateRequest = async () => {

                let response = await fetch(url, {
                    headers: {
                        'X-Requested-With': 'XMLHttpRequest',
                    },
                    method: 'GET', 
                })
                .then(response => {
                                
                    if (!response.ok) throw response;
                                
                    return response.json();
                })
                .then(json => {
                                
                    main.innerHTML = json.content;

                    document.dispatchEvent(new CustomEvent('checkout'));
                })
                .catch(error =>  {
                                
                    if(error.status == '500'){
                        console.log(error);
                    };
                });
                    
            };

            sendCreateRequest();
            
        });
    }
}