window.onload = initsite

function initsite(){
    viewH()
}

document.getElementById("saveBtn").addEventListener("click", async function addH(){

    let userInput = document.getElementById("userInput").value
    let month = userInput[5]+userInput[6]
    let day = userInput[8]+userInput[9]

    if(!userInput.length) {
        return
    }

    const body = new FormData()
    body.set("day", day)
    body.set("month", month)

    const collectedName = await makeRequest("./server/addHoroscope.php", "POST", body)
    console.log(collectedName)

    document.getElementById("saveBtn").style.display = "none"

    viewH()
})

document.getElementById("updateBtn").addEventListener("click", async function uppdateHoroscope() {

    let userInput = document.getElementById("userInput").value
    let month = userInput[5]+userInput[6]
    let day = userInput[8]+userInput[9]



    if(!userInput.length) {
        
        document.getElementById("saveBtn").style.display = "inline-block"
        console.log(false)
        return
    
    }

    const body = new FormData()
    body.set("day", day)
    body.set("month", month)
    const collectedName = await makeRequest("./server/updateHoroscope.php", "POST", body)
    console.log(collectedName)


    viewH()

})

document.getElementById("deleteBtn").addEventListener("click", async function deleteH(){
    const collectedName = await makeRequest("./server/deleteHoroscope.php", "DELETE")
    console.log(collectedName)

    document.getElementById("saveBtn").style.display = "inline-block"
    viewH()
})


async function viewH(){
    const nameText = document.getElementById("nameText")
    const collectedName = await makeRequest("./server/viewHoroscope.php", "GET")
    if(collectedName){
        nameText.innerText = collectedName
        document.getElementById("deleteBtn").style.display = "inline-block"
    }else{
        
        document.getElementById("deleteBtn").style.display = "none"
        nameText.innerText = "Spara ett horoskop"
    }
}


async function makeRequest(path, method, body) {

    const response = await fetch(path, {
        method,
        body
    })
    return await response.json()
    

}