aux = 0;
time = -1;
points = 0;
const plantas = document.getElementById('plantas');
const tablero = document.getElementById('tablero');

plantas.addEventListener('dragstart', (e) => {
    e.dataTransfer.setData('text/plain', e.target.id)
    console.log(e.dataTransfer.getData('text'));
} )

plantas.addEventListener('drag', (e)=>{
    e.target.classList.add('active')
})

//cuando terminamos de arrastrar la planta
plantas.addEventListener('dragend', (e)=>{
    e.target.classList.remove('active')
})
//este evento es obligatorio
tablero.addEventListener('dragover', (e) =>{
    e.preventDefault()
})

tablero.addEventListener('drop', (e)=>{
    e.preventDefault()
    const element = document.getElementById(e.dataTransfer.getData('text'))
    element.classList.remove('active')
    //tablero.appendChild(plantas(element))
    tablero.appendChild(plantas.removeChild(element))//pon esta planta quí y eliminala
})


//ocultamos el footer de momento
document.querySelector('footer').hidden = true;
function timer(){
    time = 50;
    var timer = document.getElementById("timer")
    var intervalTime = setInterval(function(){
        if(time>=0){
            timer.innerHTML = time
            time--; 
            if(time<=10){
                timer.style.color = "red"
            }
        }
        else{clearInterval(intervalTime);
        puntosDisplay.textContent   = "HAS GANADO UN TOTAL DE " + points + " PUNTOS";
        modal.style.display         = "block";}
    checkDivFood()
    },1000)
}

timer();


// dropZone.addEventListener('dragover', (e) => {
//     e.preventDefault()
//     console.log("Drag Over")
// })
// dropZone.addEventListener('drop', (e) => {
//     e.preventDefault()
//     console.log('Drop')
// }) 

// dropZone.addEventListener('dragLeave', (e) =>{
//     e.preventDefault()
//     console.log('Drag Leave')    
// })
//function colisionar(){
    

//}


