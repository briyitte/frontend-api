const  mostrarproducts = async ()=> {
    const response = await fetch(`http://localhost:5000/api/v1/products`);
    //const response = await fetch(`https://tranquil-earth-85922.herokuapp.com/api/v1/products`);
    const products = await response.json();
    console.log(products)
    // products.forEach(products, index => {
    // });
     allproducts = [ ]
     allproducts.push(products);
}
///card-text=texto nombre, card-text-price=precio, btn btn-sm btn-outline-secondary=añadir carrito

    // for (let i = 0; i < products.length; i++) {
    //     for (let j = 0; j < products[3].length; j++) {            
    //        console.log(products[3][j].data);
    //     }
       
    //  }


window.addEventListener("load", function(){
    mostrarproducts()
})