


    
const navbarNav = document.querySelector(".navbar-nav")
const hamburgar = document.querySelector(".hamburgar")
hamburgar.addEventListener('click', () => {
    navbarNav.classList.toggle('active')
    let data = hamburgar.querySelector('i')
    data.classList.toggle("fa-remove")

})
        
