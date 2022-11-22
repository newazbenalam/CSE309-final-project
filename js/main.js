let sidebarWidth = "23rem"
window.addEventListener("resize", () => {
    if(screen.width < 650){
        sidebarWidth = "17rem"
    }
})

let ticketBtns = $(".detailsBtn")
for (let i = 0; i < ticketBtns.length; i++) {
    ticketBtns[i].addEventListener('click', (e) => {
        let element = ticketBtns[i]
        let showbox = element.parentElement.parentElement

        let showImageLink = showbox.querySelector(".image").src
        let showName = showbox.querySelector("p").innerHTML
        console.log(showName)
        console.log(showImageLink)

        let sidebar = document.querySelector(".sidebar")
        sidebar.querySelector(".side-image").src = showImageLink
        sidebar.querySelector(".showName").innerHTML = showName

        if (sidebar.style.width === sidebarWidth) {
            sidebar.style.width = "0rem"
        }
        else{
            sidebar.style.width = sidebarWidth
        }
    })
}


document.querySelector('.sidebar-close').addEventListener("click", () => {
    let sidebar = document.querySelector(".sidebar")
    sidebar.style.width = "0rem"
})