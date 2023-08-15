const chev = document.getElementById("chevron")
chev.addEventListener("click", ()=>{
    location.href = "#values"
})

const navItems = document.querySelectorAll(".history-nav .item")


navItems.forEach( (item)=>{
    item.addEventListener("click", ()=>{
        let activeLinks = document.querySelectorAll(".active")
        activeLinks.forEach((activeLink)=>{
            activeLink.classList.remove('active')
        })
        item.classList.add("active")
    })
})