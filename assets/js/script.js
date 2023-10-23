const item_faq = document.querySelectorAll('.item_faq');
const item_list = document.querySelectorAll('.list_faq li p');

item_faq.forEach((item, index) => {

    item.addEventListener('click', () => {

        if(item.querySelector('span').classList.contains('open_item_faq')){
            item.querySelector('span').classList.remove('open_item_faq');
            item_list[index].classList.remove('open_list_text');
        }else{
            item.querySelector('span').classList.add('open_item_faq');
            setTimeout(function(){
                item_list[index].classList.add('open_list_text');
            }, 100);
        }

    });

});