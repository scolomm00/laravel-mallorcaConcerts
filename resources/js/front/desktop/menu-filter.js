export let menuFilter = () => {

	let filterMenu = document.querySelector('.menu-filter');
	let main = document.querySelector('main');

	document.addEventListener("products",( event =>{
        
        menuFilter();

    }), {once: true});

	if(filterMenu) {

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

						document.dispatchEvent(new CustomEvent('products'));
				})
				.catch(error => {

						if (error.status == '500') {
								console.log(error);
						};
				});

			};

			sendShowRequest();

		});
	};
}