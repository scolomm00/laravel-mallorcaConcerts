export let renderSelects = () => {
    
    let selectsRelated = document.querySelectorAll('.select-related');
    let messages = document.querySelectorAll('.message');

    selectsRelated.forEach(selectRelated => {
    
        selectRelated.addEventListener("change", () => {
                    
            messages.forEach(message => {
            
                if(selectRelated.value == message.dataset.num){
                    message.classList.add('active');
                }else{
                    message.classList.remove('active');
                }
            });
        });
    });
}
