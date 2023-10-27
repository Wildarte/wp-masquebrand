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

const btn_menu = document.querySelector('.btn_menu');
const nav_menu = document.querySelector('nav.menu');
const over_body = document.querySelector('.over_body');

if(btn_menu){

    btn_menu.addEventListener('click', () => {

        if(nav_menu.classList.contains('open_menu')){
            nav_menu.classList.remove('open_menu');
            over_body.classList.remove('open_over_body');
        }else{
            nav_menu.classList.add('open_menu');
            over_body.classList.add('open_over_body');
        }

    });

}

document.addEventListener('scroll',() => {

    let sc = window.scrollY;

    if(sc > 100){
        document.querySelector('header.header').classList.add('bg-dark');
    }else{
        document.querySelector('header.header').classList.remove('bg-dark');
    }

});