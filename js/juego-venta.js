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

    //productArray.sort(()   => 0.5 - Math.random())
    clienteArray.sort(()            => 0.5 - Math.random())
    productClienteArray.sort(()     => 0.5 - Math.random())

    const grid              = document.querySelector('.grid')
    const grid_prodcutos    = document.querySelector('.grid-productos')
    const grid_clientes     = document.querySelector('.grid-clientes')

    var productChosen   = []
    var productChosenId = []
    var productScore    = []
    var ganancia        = 0;

    const resultDisplay = document.querySelector('#result')
    const sumaDisplay   = document.querySelector('#suma')

    //createboardProductos
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
    //createboardProductoCliente
    function createBoardProductoCliente(){
        for(let j = 0; j < clienteArray.length; j++){
            var producto_cliente = document.createElement('img')
            producto_cliente.setAttribute('id', j)
            producto_cliente.setAttribute('src', productClienteArray[j].img)
            producto_cliente.setAttribute('tipo', productClienteArray[j].tipo)
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
        const optionOneId = productChosen[0]
        const optionTwoId = productChosen[1]
        if(optionOneId === optionTwoId){
            //alert('You found a match')  
            ganancia    = ganancia + parseFloat(productArray[productChosenId[1]].precio)
            acierto     = true
            resultDisplay.textContent   = ganancia + ' $ '
            sumaDisplay.textContent     = ' +' + parseFloat(productArray[productChosenId[1]].precio)
            document.getElementById("suma").style.visibility="visible"
            setTimeout(function(){document.getElementById("suma").style.visibility="hidden"}, 2000)

        } else{
            //alert('Try again')  
            sumaDisplay.textContent = ' + 0'
            document.getElementById("suma").style.visibility="visible"
            setTimeout(function(){document.getElementById("suma").style.visibility="hidden"}, 2000)       
        }      

        productChosen   = []
        productChosenId = []       
    }

    //click productos
    function clickProductos(){
        var productId   = this.getAttribute('id')
        var productType = this.getAttribute('tipo')

        if (productType === 'demanda') {       
            productChosen.push(productClienteArray[productId].name)
        }
        else{
            productChosen.push(productArray[productId].name)           
        }

        productChosenId.push(productId)
        if(productChosen.length === 2){
            setTimeout(checkForMatch, 100)
        }
    }

    createBoardProductos()
    createBoardProductoCliente()
    createBoardClientes()

})