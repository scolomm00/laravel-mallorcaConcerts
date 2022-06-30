export let form = () => {

    let main = document.querySelector('main');
    let storeButton = document.querySelector('.form-button-send');
    let forms = document.querySelectorAll('.front-form');

    document.addEventListener("contact",( event =>{
        
        form();
        
    }), {once: true});

    if(storeButton){

        storeButton.addEventListener("click", (event) => {

            event.preventDefault();
    
            forms.forEach(form => { 
                
                let data = new FormData(form);
                let url = form.action;


                for (var pair of data.entries()) {
                    console.log(pair[0]+ ', ' + pair[1]); 
                }
    
                if( ckeditors != 'null'){
    
                    Object.entries(ckeditors).forEach(([key, value]) => {
                        data.append(key, value.getData());
                    });
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

                        document.dispatchEvent(new CustomEvent('loadSection', {
                            detail: {
                                section: 'contact'
                            }
                        }));

                        document.dispatchEvent(new CustomEvent('message', {
                            detail: {
                                text: 'Formulario enviado correctamente',
                                type: 'success'
                            }
                        }));
                    })
                    .catch ( error =>  {
        
                        if(error.status == '422'){
        
                            error.json().then(jsonError => {

                                let errors = jsonError.errors;      
                                let errorMessage = '';
            
                                Object.keys(errors).forEach(function(key) {
                                    errorMessage += '<li>' + errors[key] + '</li>';
                                })
                
                                document.dispatchEvent(new CustomEvent('message', {
                                    detail: {
                                        message: errorMessage,
                                        type: 'error'
                                    }
                                }));
                            })   
                        }
    
                        if(error.status == '500'){
                            console.log(error);
                        };
                    });
                };
        
                sendPostRequest();
            });
        });
    }
}