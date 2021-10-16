
document.addEventListener('DOMContentLoaded',()=>{
    fetchData();
})

const fetchData=async ()=>{
    try {
        const rest =await fetch('../Vistas/Prueba.php')
        const data= await rest.json()

        console.log(data)
    } catch (error) {
        console.log(error)
    }
}

const detectarBotones=()=>{
    const botones=document.querySelector('.card button')
    console.log(botones)
}
function agregar() {
    console.log("soy una funcion")
}
let boton=document.getElementById("btnAgregar")
boton.addEventListener('click',()=>{
    console.log("ay no ahi no mas abajo")
    const botones=document.querySelector('.card button')
console.log(botones)
})


let allContainerCart = document.querySelector('.container');


loadEventListenrs();
function loadEventListenrs(){
    allContainerCart.addEventListener('click', addProduct);

}

function addProduct(e){
    e.preventDefault();
    if (e.target.classList.contains('btn-add-cart')) {
        dato=document.querySelector('btn-add-cart').getAttribute('data-id')
        console.log(dato)

    }
}
