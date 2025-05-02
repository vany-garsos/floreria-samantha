$(".nuevafotoproducto").change(function(){
    let imagen = this.files[0];
    /**========================
     * validamos el formato en jpg, png
     ========================*/
     if(imagen["type"] != "image/jpeg" && imagen["type"] != "image/png"){
        $(".nuevafotoproducto").val("");
        swal({
            title: "Error al subir la imagen",
            text: "La imagen debe estar en formato JPG o PNG",
            type: "error",
            confirmButtonText: "Cerrar"
        })
     }else if(imagen["size"]>2000000){
        $(".nuevafotoproducto").val("");
        swal({
            title: "Error al subir la imagen",
            text: "La imagen no debe pesar mas de 2MB",
            type: "error",
            confirmButtonText: "Cerrar"
        });
     }else{
        let datosImagen = new FileReader;
        datosImagen.readAsDataURL(imagen);

        $(datosImagen).on("load", function(event){
            let rutaImagen = event.target.result;
            $(".previsualizar").attr("src", rutaImagen);
        });
     }
});

/**==================================================================
 * EDITAR PRODUCTOS
 ===================================================================*/

 $(document).on("click", ".btnEditarProducto", function(){
    let idProducto = $(this).attr("idProducto");
    let datos = new FormData();
    //le estoy pasando un identificador y un valor
    datos.append("idProducto", idProducto);

    $.ajax({
      url:"ajax/productos.ajax.php", 
      method: "POST",
      data: datos,
      cache: false,
      contentType: false,
      processData: false,
      dataType: "json",
      success: function(respuesta){
        /// console.log(respuesta);
         //let tu= document.getElementById("editarusuario");
        // tu.textContent= respuesta['usuario'];
        $("#editartitulo").val(respuesta['titulo']);
        $("#editarprecio").val(respuesta['precio']);
        $("#editarcategoria").val(respuesta['categoria']);
        $("#editartipo").val(respuesta['tipo']);
        $("#editardescripcion").val(respuesta['descripcion']);
        $('#fotoactual').val(respuesta['foto']);
        $('.previsualizar').attr('src', respuesta['foto']);
        $("#editarid").val(respuesta['id']);
    
        
      }
    });
 });

 /**==================================================================
 * ELIMINAR PRODUCTO
 ===================================================================*/
 $(document).on("click", ".btnEliminarProducto", function(){
   let idProducto = $(this).attr("idProducto");
   swal({
      title: "¿Estas seguro de borrar el producto?",
      text: "Si no lo está, puede cancelar la acción",
      type: 'warning',
      showCancelButton: true,
      confirmButtonColor: '#3085d6', 
      cancelButtonColor: '#d33',
      cancelButtonText:'Cancelar',
      confirmButtonText: 'Si, borrar producto'
   }).then(function(result){
      if(result.value){
         let datos = new FormData();
         //le estoy pasando un identificador y un valor
         datos.append("eliminarProducto", idProducto);
     
         $.ajax({
           url:"ajax/productos.ajax.php", 
           method: "POST",
           data: datos,
           cache: false,
           contentType: false,
           processData: false,
           success: function(respuesta){
            window.location = 'productos'; 
           }
         });

      }
   })
 });




 