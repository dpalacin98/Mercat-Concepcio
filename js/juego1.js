document.addEventListener('DOMContentLoaded', () => {

    const productArray =[
        {
            name: 'arandano',
            img: 'media/fruta/arandano.png',
            precio:'2.5'
        },
        {
            name: 'cereza',
            img: 'media/fruta/cereza.png',
            precio:'4.5'
        },
        {
            name: 'coco',
            img: 'media/fruta/coco.png',
            precio:'5.0'
        },
        {
            name: 'fresa',
            img: 'media/fruta/fresa.png',
            precio:'3.0'
        },
        {
            name: 'mango',
            img: 'media/fruta/mango.png',
            precio:'2.0'
        },
        {
            name: 'naranja',
            img: 'media/fruta/naranja.png',
            precio:'4.0'
        },
        {
            name: 'manzana',
            img: 'media/fruta/manzana.png',
            precio:'3.0'
        },
        {
            name: 'pera',
            img: 'media/fruta/pera.png',
            precio:'3.5'
        },
        {
            name: 'pina',
            img: 'media/fruta/pina.png',
            precio:'4.5'
        },
        {
            name: 'platanos',
            img: 'media/fruta/platanos.png',
            precio:'2.0'
        },
        {
            name: 'sandia',
            img: 'media/fruta/sandia.png',
            precio:'6.5'
        },
        {
            name: 'uvas',
            img: 'media/fruta/uvas.png',
            precio:'8.5'
        }
    ]
    const clienteArray = [
        {
            name: 'person1',
            img: 'media/personas/person1.png'
        },
        {
            name: 'person2',
            img: 'media/personas/person2.png'
        },
        {
            name: 'person3',
            img: 'media/personas/person3.png'
        },
        {
            name: 'person4',
            img: 'media/personas/person4.png'
        },
        {
            name:'person5',
            img:'media/personas/person2.png'
        }
    ]
    const productClienteArray =[
        {
            name: 'arandano',
            img: 'media/fruta/arandano-burbuja.png'
        },
        {
            name: 'cereza',
            img: 'media/fruta/cereza-burbuja.png'
        },
        {
            name: 'coco',
            img: 'media/fruta/coco-burbuja.png'
        },
        {
            name: 'fresa',
            img: 'media/fruta/fresa-burbuja.png'
        },
        {
            name: 'mango',
            img: 'media/fruta/mango-burbuja.png'
        },
        {
            name: 'naranja',
            img: 'media/fruta/naranja-burbuja.png'
        },
        {
            name: 'manzana',
            img: 'media/fruta/manzana-burbuja.png'
        },
        {
            name: 'pera',
            img: 'media/fruta/pera-burbuja.png'
        },
        {
            name: 'pina',
            img: 'media/fruta/pina-burbuja.png'
        },
        {
            name: 'platanos',
            img: 'media/fruta/platanos-burbuja.png'
        },
        {
            name: 'sandia',
            img: 'media/fruta/sandia-burbuja.png'
        },
        {
            name: 'uvas',
            img: 'media/fruta/uvas-burbuja.png'
        }
    ]

    productArray.sort(()   => 0.5 - Math.random())
    clienteArray.sort(()   => 0.5 - Math.random())
    productClienteArray.sort(()   => 0.5 - Math.random())
    const grid = document.querySelector('.grid')
    const grid_prodcutos = document.querySelector('.grid-productos')
    const grid_clientes = document.querySelector('.grid-clientes')

    var productChosen =   []
    var productChosenId = []
    var productScore =      []
    var ganancia = 0;
    const resultDisplay = document.querySelector('#result')
    const sumaDisplay = document.querySelector('#suma')

    //createboardProductos
    function createBoardProductos(){
        for(let i = 0; i < productArray.length; i++){
            var product = document.createElement('img')
            product.setAttribute('id', i)
            product.setAttribute('src', productArray[i].img)
            product.addEventListener('click', clickProductos)
            grid.appendChild(product)
        }
    }
    //createboardProductoCliente
    function createBoardProductoCliente(){
        for(let j = 0; j < clienteArray.length; j++){
            var producto_cliente = document.createElement('img')
            producto_cliente.setAttribute('id', j)
            producto_cliente.setAttribute('src', productArray[j].img)
            producto_cliente.addEventListener('click', clickProductos)
            grid_prodcutos.appendChild(producto_cliente)
        }
    }
    //createboardClientes
    function createBoardClientes(){
        for(let k = 0; k < clienteArray.length; k++){
            var cliente = document.createElement('img')
            cliente.setAttribute('id', k)
            cliente.setAttribute('src', clienteArray[k].img)
            grid_clientes.appendChild(cliente)
        }
    }

    //check matches
    function checkForMatch(){
        var acierto = false
        const optionOneId = productChosenId[0]
        const optionTwoId = productChosenId[1]
        if(productChosen[0] === productChosen[1]){
            alert('You found a match');            
            ganancia = ganancia + parseFloat(productArray[optionOneId].precio)
            acierto = true
            resultDisplay.textContent = ganancia + ' $ '
            sumaDisplay.textContent = ' +' + parseFloat(productArray[optionOneId].precio)
            document.getElementById("suma").style.visibility="visible"
            setTimeout(function(){document.getElementById("suma").style.visibility="hidden"}, 2000)

        } else{
            alert('Try again')  
            sumaDisplay.textContent = ' + 0'
            document.getElementById("suma").style.visibility="visible"
            setTimeout(function(){document.getElementById("suma").style.visibility="hidden"}, 2000)       
        }      

        productChosen = []
        productChosenId = []       
    }

    //click productos
    function clickProductos(){
        var productId = this.getAttribute('id')
        productChosen.push(productArray[productId].name)
        productChosenId.push(productId)
        if(productChosen.length === 2){
            setTimeout(checkForMatch, 100)
        }
    }

    createBoardProductos()
    createBoardProductoCliente()
    createBoardClientes()

})