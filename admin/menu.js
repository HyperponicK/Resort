
let page = document.getElementById('page');

page = page.value;
setBack(page);

function setBack(page) {

    let menu1 = document.getElementById('menu1');
    let menu2 = document.getElementById('menu2');
    let menu3 = document.getElementById('menu3');
    let menu4 = document.getElementById('menu4');
    let menu5 = document.getElementById('menu5');
    let menu6 = document.getElementById('menu6');


    console.log(page);

    if (page == 'news') {
        menu1.classList.add("bg-primary");
        menu1.classList.add("rounded");
    }
    if (page == 'reserve') {
        menu2.classList.add("bg-primary");
        menu2.classList.add("rounded");
    }
    if (page == 'rooms') {
        menu3.classList.add("bg-primary");
        menu3.classList.add("rounded");
    }
    if (page == 'customer') {
        menu4.classList.add("bg-primary");
        menu4.classList.add("rounded");
    }
    if (page == 'pay') {
        menu5.classList.add("bg-primary");
        menu5.classList.add("rounded");
    }
    if (page == 'report') {
        menu6.classList.add("bg-primary");
        menu6.classList.add("rounded");
    }
}