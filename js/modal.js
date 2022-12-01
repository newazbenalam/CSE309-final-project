let ticketBtns = document.querySelectorAll('.ticketsBtn')
ticketBtns.forEach(each => {
    each.addEventListener("click", () => {
        let element = each
        let showbox = element.parentElement.parentElement

        let showImageLink = showbox.querySelector(".image").src
        let showName = showbox.querySelector("p").innerHTML
        console.log(showName)
        console.log(showImageLink) 
        let modal = document.querySelector(".modal")
        modal.style.display = "flex"


        modal.querySelector(".modal-image").src = showImageLink
        modal.querySelector(".modal-show-heading").innerHTML = showName

        let sidebar = document.querySelector(".sidebar")
        if(sidebar.style.width !== 0){
            sidebar.style.width = 0
        }

    })
})

document.getElementById("modalClosebtn").addEventListener("click", () => {
    document.querySelector(".modal").style.display = "none"
})

document.getElementById("goToPaymentBtn").addEventListener("click", () => {
    let showName = document.querySelector(".modal-show-heading").innerHTML
    location.href = `ticket.html?name=${showName}`
})


document.addEventListener("click", (e) => {
    console.log(e.target.classList)
    e.target.classList.forEach(element => {
        if(element === "modal"){
            document.querySelector(".modal").style.display = "none"
        }
    })
})