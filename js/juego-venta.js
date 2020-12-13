document.addEventListener('DOMContentLoaded', () => {

    document.querySelector('footer').hidden = true

    const productArray          = [
        {
            name: 'arandano',
            tipo: 'producto',
            img: '../media/fruta/arandano.png',
            precio:'2.5'
        },
        {
            name: 'cereza',
            tipo: 'producto',
            img: '../media/fruta/cereza.png',
            precio:'4.5'
        },
        {
            name: 'coco',
            tipo: 'producto',
            img: '../media/fruta/coco.png',
            precio:'5.0'
        },
        {
            name: 'fresa',
            tipo: 'producto',
            img: '../media/fruta/fresa.png',
            precio:'3.0'
        },
        {
            name: 'mango',
            tipo: 'producto',
            img: '../media/fruta/mango.png',
            precio:'2.0'
        },
        {
            name: 'naranja',
            tipo: 'producto',
            img: '../media/fruta/naranja.png',
            precio:'4.0'
        },
        {
            name: 'manzana',
            tipo: 'producto',
            img: '../media/fruta/manzana.png',
            precio:'3.0'
        },
        {
            name: 'pera',
            tipo: 'producto',
            img: '../media/fruta/pera.png',
            precio:'3.5'
        },
        {
            name: 'pina',
            tipo: 'producto',
            img: '../media/fruta/pina.png',
            precio:'4.5'
        },
        {
            name: 'platanos',
            tipo: 'producto',
            img: '../media/fruta/platanos.png',
            precio:'2.0'
        },
        {
            name: 'sandia',
            tipo: 'producto',
            img: '../media/fruta/sandia.png',
            precio:'6.5'
        },
        {
            name: 'uvas',
            tipo: 'producto',
            img: '../media/fruta/uvas.png',
            precio:'8.5'
        }
    ]
    const clienteArray          = [
        {
            name: 'person1',
            img: '../media/personas/person1.png'
        },
        {
            name: 'person2',
            img: '../media/personas/person4.png'
        },
        {
            name: 'person3',
            img: '../media/personas/person3.png'
        },
        {
            name: 'person4',
            img: '../media/personas/person4.png'
        },
        {
            name:'person5',
            img:'../media/personas/person1.png'
        }
    ]
    const productClienteArray   = [
        {
            name: 'arandano',
            tipo: 'demanda',
            img: '../media/fruta/arandano-cliente.png'
        },
        {
            name: 'cereza',
            tipo: 'demanda',
            img: '../media/fruta/cereza-cliente.png'
        },
        {
            name: 'coco',
            tipo: 'demanda',
            img: '../media/fruta/coco-cliente.png'
        },
        {
            name: 'fresa',
            tipo: 'demanda',
            img: '../media/fruta/fresa-cliente.png'
        },
        {
            name: 'mango',
            tipo: 'demanda',
            img: '../media/fruta/mango-cliente.png'
        },
        {
            name: 'naranja',
            tipo: 'demanda',
            img: '../media/fruta/naranja-cliente.png'
        },
        {
            name: 'manzana',
            tipo: 'demanda',
            img: '../media/fruta/manzana-cliente.png'
        },
        {
            name: 'pera',
            tipo: 'demanda',
            img: '../media/fruta/pera-cliente.png'
        },
        {
            name: 'pina',
            tipo: 'demanda',
            img: '../media/fruta/pina-cliente.png'
        },
        {
            name: 'platanos',
            tipo: 'demanda',
            img: '../media/fruta/platanos-cliente.png'
        },
        {
            name: 'sandia',
            tipo: 'demanda',
            img: '../media/fruta/sandia-cliente.png'
        },
        {
            name: 'uvas',
            tipo: 'demanda',
            img: '../media/fruta/uvas-cliente.png'
        }
    ]

    productClienteArray.sort(()     => 0.5 - Math.random())
    const grid              = document.querySelector('.grid')
    const grid_productos    = document.querySelector('.grid-productos')
    const grid_clientes     = document.querySelector('.grid-clientes')
    const timeLeft          = document.querySelector('#time-left');
    const resultDisplay     = document.querySelector('#result')
    const sumaDisplay       = document.querySelector('#suma')

    let currentTime         = timeLeft.textContent;
    var productChosen       = []
    var productDemandaId    = []
    var productIdVenta      = []
    var ganancia            = 0
    var contador            = 1
    var id_cliente          = 0
    var id_producto         = 0

    //creamos la grid con los productos
    function createBoardProductos(){
        for(let i = 0; i < productArray.length; i++){
            var product = document.createElement('img')
            product.setAttribute('id', i)
            product.setAttribute('src', productArray[i].img)
            product.setAttribute('tpo', productArray[i].tipo)
            product.addEventListener('click', clickProductos)
            grid.appendChild(product)
        }
    }

    //CREATE CLIENTE
    function timerClientes(){
        //console.log(id_cliente)
        //console.log(id_producto)
        if (contador == 4) {
            if (id_cliente == 5) {
                //para que solo muestre 5 DE MOMENTO
                contador = 30
            }
            if(id_producto == 12){
                id_producto = 0
            }
            //creamos nuestro cliente 
            var cliente = document.createElement('img')
            cliente.setAttribute('id', id_cliente)
            cliente.setAttribute('src', clienteArray[id_cliente].img)
            grid_clientes.appendChild(cliente)

            //creamos el producto cliente junto al cliente
            var producto_cliente = document.createElement('img')
            producto_cliente.setAttribute('id', id_cliente)
            producto_cliente.setAttribute('src', productClienteArray[id_producto].img)
            producto_cliente.setAttribute('tipo', productClienteArray[id_producto].tipo)
            producto_cliente.addEventListener('click', clickProductos)
            grid_productos.appendChild(producto_cliente)

            //incrementamos el contador de cliente
            id_cliente++
            //incrementamos el contador de productoCliente
            id_producto++
            //reseteamos el contador
            contador = 1
        }
        else{
            //incrementamos nuestro contador de tiempo
            contador++  
        }
    }
    setInterval(timerClientes, 1000)

    //Cronometro para anunciar el final del juego
    function cuentaAtras(){
        currentTime--
        timeLeft.textContent = currentTime
        if (currentTime === 0) {
            clearInterval(timerId)
            alert('GAME OVER')
        };
    };
    let timerId = setInterval(cuentaAtras, 1000)
    

    //comprobamos si los productos son los correctos y hacen match
    function checkForMatch(){
        //guardamos los nombres por separados para poder compararlos
        const optionOneId = productChosen[0]
        const optionTwoId = productChosen[1]
        if(optionOneId === optionTwoId){
            //si hemos hecho match sumamos el precio del producto a nuestra ganancia
            ganancia    = ganancia + parseFloat(productArray[productIdVenta[0]].precio)
            resultDisplay.textContent   = ganancia + ' $ '
            sumaDisplay.textContent     = ' +' + parseFloat(productArray[productIdVenta[0]].precio)
            document.getElementById("suma").style.visibility="visible"
            setTimeout(function(){document.getElementById("suma").style.visibility="hidden"}, 2000)


            //grid_clientes.removeChild(grid_clientes.childNodes[productDemandaId[0]])
            //grid_productos.removeChild(grid_productos.childNodes[productDemandaId[0]])
            

        } else{ 
            sumaDisplay.textContent = ' + 0'
            document.getElementById("suma").style.visibility="visible"
            setTimeout(function(){document.getElementById("suma").style.visibility="hidden"}, 2000)       
        }      

        productChosen   = []
        productDemandaId = []
        productIdVenta    = []      
    }

    //click productos
    function clickProductos(){
        //aqui guardamos el id del producto
        var productId   = this.getAttribute('id')
        //aqui guardamos su tipo
        var productType = this.getAttribute('tipo')

        //si es una demanda (pedido por el cliente) guardamos su nombre en el array productChosen
        if (productType === 'demanda') {       
            productChosen.push(productClienteArray[productId].name)
            //guardamos sus id para poder trabajar con ella mas tarde
            productDemandaId.push(productId)
        }
        //si no es demanda es que es tipo producto y guardamos su nombre en el array productChosen
        else{
            productChosen.push(productArray[productId].name)        
            productIdVenta.push(productId)   
        }
        //si hay dos elementos los comprobamos
        if(productChosen.length === 2){
            //console.log(productDemandaId[0])
            //console.log(productIdVenta[0])
            setTimeout(checkForMatch, 100)
        }
    }

    createBoardProductos()
})