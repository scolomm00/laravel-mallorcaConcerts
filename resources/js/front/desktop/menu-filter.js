export let menuFilter = () => {

        let filterMenus = document.querySelectorAll('.menu-filter');
        let main = document.querySelector('main');

        document.addEventListener("renderProductModules", (event => {
                menuFilter();
        }), { once: true });

        if(filterMenus) {

                filterMenus.forEach(filterMenu => {

                        filterMenu.addEventListener("change", () => {

                                let url = filterMenu.value;

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
                        
                                                document.dispatchEvent(new CustomEvent('renderProductModules'));
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