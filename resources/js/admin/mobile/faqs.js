export let renderFaqs = () => {

    let faqs = document.querySelectorAll('.faq');
    let faqsContent = document.querySelectorAll('.faq-content');

    if (faqs && faqsContent) {

        faqs.forEach(faq => {

            faq.addEventListener('click', () => {

                faqsContent.forEach(faqContent => {

                    faqContent.classList.remove('active');

                    if (faqContent.dataset.num == faq.dataset.num) {
                        faqContent.classList.add('active');
                    }
                });


                faqs.forEach(faq => {

                    faq.classList.remove('active');
                });

                faq.classList.add('active');
            });  
        });
    }
}
