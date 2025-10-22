let logIn = function () {
    let user = document.getElementById("username").value
    let password = document.getElementById("password").value
    let message = document.getElementById("message")

    // correct credentials.
    let correctUser = "Sandra"
    let correctPassword = "123456"

    if (user=== correctUser &&password=== correctPassword){

        message.textContent= "Login successful"
        message.style.color= "green"
    
    } else {
        message.textContent= "Invalid user name or password"
        message.style.color= "red"
    }


}

document.getElementById("btn").addEventListener("click" , logIn)