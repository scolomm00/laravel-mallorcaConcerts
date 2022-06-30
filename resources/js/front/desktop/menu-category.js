export let menuCategory = () => {

    let categoryMenus = document.querySelectorAll('.buttons-category');
    let main = document.querySelector('main');

    document.addEventListener("products",( event =>{
        
        menuCategory();
        
    }), {once: true});

    if(categoryMenus){

        categoryMenus.forEach(categoryMenu => {

            categoryMenu.addEventListener("click", () => {

                let url = categoryMenu.dataset.url;

                let sendShowRequest = async () => {

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

                        document.dispatchEvent(new CustomEvent('loadSection', {
                            detail: {
                                section: 'products'
                            }
                        }));
                    })
                    .catch(error =>  {
                                    
                        if(error.status == '500'){
                            console.log(error);
                        };
                    });
                      
                };

                sendShowRequest();
                
            });
        });
    };
}