export let menu = () => {

    let menuButtons = document.querySelectorAll('.buttons-menu');
    let main = document.querySelector('main');

    if(menuButtons){

        menuButtons.forEach(menuButton => {

            menuButton.addEventListener("click", () => {

                let url = menuButton.dataset.url;

                console.log(url);

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