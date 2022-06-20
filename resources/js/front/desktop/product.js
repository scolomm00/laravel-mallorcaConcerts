export let product = () => {

    let showProductButtons = document.querySelectorAll('.products-element-show');
    let main = document.querySelector('main');

    document.addEventListener("renderProductModules",( event =>{
        product();
    }), {once: true});

    if(showProductButtons){

        showProductButtons.forEach(showProductButton => {

            showProductButton.addEventListener("click", () => {

                let url = showProductButton.dataset.url;

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