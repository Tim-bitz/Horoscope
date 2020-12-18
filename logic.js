
document.getElementById("saveBtn").addEventListener("click", async function addH(){

    let userInput = document.getElementById("userInput").value
    
    let month = userInput[5]+userInput[6]
    let day = userInput[8]+userInput[9]



    if (!userInput.length) {
        document.getElementById("answerContainer").innerHTML = "<h1>Skriv in födelsedatum</h1>"
        return
    }

    

    const body = new FormData()
    body.set("day", day)
    body.set("month", month)
    

    const responseStatus = await makeRequest("./server/addHoroscope.php", "POST", body)
    console.log(responseStatus)

    
})

document.getElementById("updateBtn").addEventListener("click", async function viewH() {

    const ViewH = await makeRequest("./server/viewHoroscope.php", "GET")
    document.getElementById("answerContainer").innerHTML = getHoroscope

})

async function makeRequest(path, method, body) {

    const response = await fetch(path, {
        method,
        body
    })
    console.log(response)
    return await response.json()

}

document.getElementById("deleteBtn").addEventListener("click", async function deleteH(){
    const responseStatus = await makeRequest("./server/deleteHoroscope.php", "DELETE")
})
