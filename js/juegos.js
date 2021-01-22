var game2           = document.getElementById("juego2")
var game3           = document.getElementById("juego3")
var game4           = document.getElementById("juego4")

game2.style.display = "none"
game4.style.display = "none"

document.getElementById('imgJuego2').addEventListener('click', showJuego2, true)
document.getElementById('imgJuego3').addEventListener('click', showJuego3, true)
document.getElementById('imgJuego4').addEventListener('click', showJuego4, true)
document.getElementById('BtnNext').addEventListener('click', nextGame, true)
document.getElementById('BtnTryAgain').addEventListener('click', tryAgain, true)

function showJuego2(){      
    game3.style.display = "none"
    game4.style.display = "none"
    game2.style.display = "block"
}
function showJuego3(){  
    game2.style.display = "none"    
    game4.style.display = "none"
    game3.style.display = "block"
}
function showJuego4(){
    game2.style.display = "none"
    game3.style.display = "none"
    game4.style.display = "block"
}
function nextGame(){
    if (game3.style.display = "block") {  
        game3.style.display = "none"
        game4.style.display = "block"
    }
    modal.style.display     = "none"
}
function tryAgain(){
    location.reload()
}
