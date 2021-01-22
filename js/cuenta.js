var option1           = document.getElementById("informacion")
var option2          = document.getElementById("whislist")
var option3           = document.getElementById("codePromociones")

option2.style.display = "none"
option3.style.display = "none"

document.getElementById('navInfo').addEventListener('click', showInfo, true)
document.getElementById('navWhishlist').addEventListener('click', showWhishlist, true)
document.getElementById('navCodigos').addEventListener('click', showCodigos, true)

function showInfo(){      
    option2.style.display = "none"
    option3.style.display = "none"
    option1.style.display = "block"
}
function showWhishlist(){  
    option1.style.display = "none"    
    option3.style.display = "none"
    option2.style.display = "block"
}
function showCodigos(){
    option1.style.display = "none"
    option2.style.display = "none"
    option3.style.display = "block"
}