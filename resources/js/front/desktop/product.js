export let product = () => {

    let showProductButtons = document.querySelectorAll('.products-element-show');
    let main = document.querySelector('main');
    let forms = document.querySelectorAll(".front-form");
    let storeButton = document.querySelector('.store-button');

    document.addEventListener("products",( event =>{
        
        product();
        
    }));

    if(storeButton){

        storeButton.addEventListener("click", (event) => {

            event.preventDefault();
    
            forms.forEach(form => { 
                
                let data = new FormData(form);
                let url = form.action;

                for (var pair of data.entries()) {
                    console.log(pair[0]+ ', ' + pair[1]); 
                }
    
                let sendPostRequest = async () => {
                        
                    let response = await fetch(url, {
                        headers: {
                            'Accept': 'application/json',
                            'X-CSRF-TOKEN': document.head.querySelector('meta[name="csrf-token"]').content
                        },
                        method: 'POST',
                        body: data
                    })

                    .then(response => {
                    
                        if (!response.ok) throw response;

                        return response.json();
                    })
                    .then(json => {

                        main.innerHTML = json.content;

                        document.dispatchEvent(new CustomEvent('cart'));

                    })
                    .catch ( error =>  {
    
                        if(error.status == '500'){
                            console.log(error);
                        };
                    });
                };
        
                sendPostRequest();
            });
        });
    }

    if(showProductButtons){

        showProductButtons.forEach(showProductButton => {

            showProductButton.addEventListener("click", () => {

                let url = showProductButton.dataset.url;

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

                        document.dispatchEvent(new CustomEvent('products'));
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