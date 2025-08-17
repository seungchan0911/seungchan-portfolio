window.addEventListener("DOMContentLoaded", () => {
    scrollHeaderEvent()
    dropMenuControl()
    menuControl()
})

function scrollHeaderEvent() {
    const header = document.querySelector("header")
    
    window.addEventListener("scroll", () => {
        if (scrollY >= 12) {
            header.setAttribute("class", "border-bottom")
        } else {
            header.setAttribute("class", "")
        }
    })
}

function dropMenuControl() {
    const dropMenus = document.querySelectorAll(".drop-menu")

    dropMenus.forEach(dropMenu => {
        dropMenu.parentNode.addEventListener("click", () => {
            dropMenu.classList.toggle("show")
        })

        dropMenu.querySelectorAll(".menu").forEach(menu => {
            menu.addEventListener("click", (e) => {
                console.log(e.target.textContent)
            })
        })
    })
}

function menuControl() {
    const menuBtn = document.querySelector(".menu-control")
    const mobileNav = document.querySelector(".mobile-nav")

    menuBtn.addEventListener("click", (e) => {
        menuBtn.classList.toggle("changed")

        if (menuBtn.classList.contains("changed")) mobileNav.classList.add("show-menu")
        else mobileNav.classList.remove("show-menu")
    })
}