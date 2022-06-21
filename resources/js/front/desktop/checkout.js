export let checkout = () => {

    let storeButtons = document.querySelectorAll('.cart-resume-button-buy');
    let main = document.querySelector('main');

    document.addEventListener("renderProductModules",( event =>{
        checkout();
    }), {once: true});

    if(storeButtons){

        storeButtons.forEach(storeButton => {

            storeButton.addEventListener("click", () => {

                let url = storeButton.dataset.url;

                let sendCreateRequest = async () => {

                    document.dispatchEvent(new CustomEvent('startWait'));

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

                        document.dispatchEvent(new CustomEvent('renderProductModules'));
                    })
                    .catch(error =>  {
                                    
                        if(error.status == '500'){
                            console.log(error);
                        };
                    });
                      
                };

                sendCreateRequest();
                
            });
        });
    }
}