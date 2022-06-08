export let menu = () => {

    let menuButtons = document.querySelectorAll('.buttons-menu');
    let main = document.querySelector('main');

    document.addEventListener("loadProduct", (event => {
        main.innerHTML = event.detail.main;
    }));

    document.addEventListener("renderProductModules", (event => {
        menu();
    }), { once: true });

    if(menuButtons){

        menuButtons.forEach(menuButton => {

            menuButton.addEventListener("click", () => {

                let url = menuButton.dataset.url;

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
                                    
                        document.dispatchEvent(new CustomEvent('loadProduct', {
                            detail: {
                                main: json.content,
                            }
                        }));

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