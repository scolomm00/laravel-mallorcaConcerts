export let renderModalDelete = () => {

    let deleteNotify = document.querySelector(".delete");
    let deleteConfirm = document.querySelector('.button-yes-delete');
    let deleteCancel = document.querySelector('.button-no-delete');

    document.addEventListener("openModalDelete",( event =>{
        
        deleteConfirm.dataset.url = event.detail.url;
        deleteNotify.classList.add('active');
    }));

    deleteCancel.addEventListener("click", () => {
        deleteNotify.classList.remove('active');
        document.dispatchEvent(new CustomEvent('stopWait'));
    });

    deleteConfirm.addEventListener("click", () => {

        let url = deleteConfirm.dataset.url;

        console.log(url);
    
        let sendDeleteRequest = async () => {

            let response = await fetch(url, {
                headers: {
                    'X-Requested-With': 'XMLHttpRequest',
                    'X-CSRF-TOKEN': document.head.querySelector('meta[name="csrf-token"]').content
                },
                method: 'DELETE', 
            })
            .then(response => {
                          
                if (!response.ok) throw response;

                return response.json();
            })
            .then(json => {

                if(json.table){
                    document.dispatchEvent(new CustomEvent('loadTable', {
                        detail: {
                            table: json.table,
                        }
                    }));
                }

                document.dispatchEvent(new CustomEvent('loadForm', {
                    detail: {
                        form: json.form,
                    }
                }));

                deleteNotify.classList.remove('active');

                document.dispatchEvent(new CustomEvent('renderFormModules'));
                document.dispatchEvent(new CustomEvent('renderTableModules'));

                document.dispatchEvent(new CustomEvent('stopWait'));
                // document.dispatchEvent(new CustomEvent('message', {
                //     detail: {
                //         message: json.message,
                //         type: 'success'
                //     }
                // }));
            })
            .catch(error =>  {

                document.dispatchEvent(new CustomEvent('stopWait'));

                if(error.status == '500'){
                    console.log(error);
                };
            });
        };

        sendDeleteRequest();
    });   
}