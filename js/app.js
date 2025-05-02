let bucar = document.getElementById("buscar");
let input =document.querySelector("#form input");

const expReg = {
    input: /^[a-zA-Z0-9]$/
}

let validar = (e) =>{
    if(e.target.name == "buscar"){
      
    }
}
input.addEventListener('keyup', validar);
input.addEventListener('blur', validar);

 /**==================================================================
 * filtrar por categoria los botones 
 ===================================================================*/
 /*document.querySelectorAll(".category-button").forEach(boton =>{
    boton.addEventListener("click", ()=> {
        let categoria = boton.getAttribute("data-categoria");
      // console.log("categoria seleccionada:", categoria);
 
       fetch('./admin/controladores/productos.controlador.php',{
          method: 'POST',
          headers:{
             'Content-Type': 'application/x-www-form-urlencoded'
          },
          body:`categoria=${categoria}`
          
       })
       .then(res=>res.text())
       .then(salida=>{
          console.log(salida);
       })
    });
 
 }
 );*/
 


