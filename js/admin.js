document.querySelector(".admin-button").addEventListener("click", () => {
    let showForm = document.querySelector(".admin-show-form")
    console.log(showForm.style.height)
    if(showForm.style.height === ""){
        showForm.style.height = "auto"
    }
    else{
        showForm.style.height = ""
    }
    
})

let showDayArr = ["Sunday", "Monday", "Tuesday", "Wednesday", "Thursday", "Friday", "Saturday"]
let selectTag = document.getElementById("shows-day-admin")
let optionClass = "bg-dark"
for(let i = 0; i < showDayArr.length; i++){
    let optionTag = document.createElement("option")
    optionTag.classList.add(optionClass)
    optionTag.innerHTML = showDayArr[i]
    optionTag.value = showDayArr[i]
    selectTag.appendChild(optionTag)
}