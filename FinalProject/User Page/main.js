//change navbar style on scroll bar

window.addEventListener('scroll', () => {
    document.querySelector('nav').classList.toggle('window-scroll', window.scrollY > 0)
})


//show/hide faq answers

const faqs = document.querySelectorAll('.faq');

faqs.forEach(faq => {
    faq.addEventListener('click', () => {
        faq.classList.toggle('open')

        // change icon

        const icon = faq.querySelector('.faq_icon i');
        if (icon.className == 'uil uil-plus') {
            icon.className = "uil uil-minus";
        } else {
            icon.className = "uil uil-plus";
        }
    })
})

//Show Hide Nav Bar

const menu = document.querySelector(".nav_menu");
const menuBtn = document.querySelector("#open-menu-btn");
const colseBtn = document.querySelector("#close-menu-btn");

menuBtn.addEventListener('click', () => {
    menu.style.display = "flex";
    colseBtn.style.display = "inline-block";
    menuBtn.style.display = "none";
})

//close nav bar

const closeNav = () => {
    menu.style.display = "none";
    colseBtn.style.display = "none";
    menuBtn.style.display = "inline-block";
}

colseBtn.addEventListener('click', closeNav)

function popup1(){
    document.getElementById("popup").classList.toggle("active");
}

