export let tabBar = () => {

    let tabs = document.querySelectorAll('.tab');
    let tabsContent = document.querySelectorAll('.tab-content');

    document.addEventListener("renderProductModules",( event =>{
        tabBar();
    }), {once: true});

    tabs.forEach(tab => {

        tab.addEventListener('click', () => {

            tabsContent.forEach(tabContent => {

                tabContent.classList.remove('active');

                if (tabContent.dataset.num == tab.dataset.num) {
                    tabContent.classList.add('active');
                }
            });

            tabs.forEach(tab => {

                tab.classList.remove('active');
            });

            tab.classList.add('active');
        });

    });
}
