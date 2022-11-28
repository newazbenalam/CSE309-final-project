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
    })
})

document.getElementById("modalClosebtn").addEventListener("click", () => {
    document.querySelector(".modal").style.display = "none"
})

document.getElementById("goToPaymentBtn").addEventListener("click", () => {
    location.href = "ticket.html"
})