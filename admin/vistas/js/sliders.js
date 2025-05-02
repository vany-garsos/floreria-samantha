/**==================================
 * FUNCION PARA PREVISUALIZAR LAS IMAGENES
 =================================*/

let previsualizarImagen = (numFotoSlider, numPrevisualizar) =>{

   $(`.fotoSlider${numFotoSlider}`).change(function(){
      let imagen = this.files[0];
      /**========================
       * validamos el formato en jpg, png
       ========================*/
       if(imagen["type"] != "image/jpeg" && imagen["type"] != "image/png" && imagen["type"] != "image/svg+xml" ){
          $(`.fotoSlider${numFotoSlider}`).val("");
          swal({
              title: "Error al subir la imagen",
              text: "La imagen debe estar en formato SVG, JPG o PNG",
              type: "error",
              confirmButtonText: "Cerrar"
          })
       }else if(imagen["size"]>4000000){
          $(`.fotoSlider${numFotoSlider}`).val("");
          swal({
              title: "Error al subir la imagen",
              text: "La imagen no debe pesar mas de 4MB",
              type: "error",
              confirmButtonText: "Cerrar"
          });
       }else{
          let datosImagen = new FileReader;
          datosImagen.readAsDataURL(imagen);
  
          $(datosImagen).on("load", function(event){
              let rutaImagen = event.target.result;
              $(`.previsualizar${numPrevisualizar}`).attr("src", rutaImagen);
          });
       }
  });
}
for(let i=1; i<=4; i++){
   previsualizarImagen(i, i);
}


/**=============================================
 * TERMINA CARGAR FOTO EN PREVISUALIZAR 
 ===============================================*/





/**==================================================================
 * EDITAR SLIDERS
 ===================================================================*/

 $(document).on("click", ".btnEditarSlider", function(){
    let idSlider = $(this).attr("idSlider");
   // console.log(idSlider +'archivo slider');
    let datos = new FormData();
    //le estoy pasando un identificador y un valor
    datos.append("idSlider", idSlider);

    $.ajax({
      url:"ajax/sliders.ajax.php", 
      method: "POST",
      data: datos,
      cache: false,
      contentType: false,
      processData: false,
      dataType: "json",
      success: function(respuesta){
        $("#editarid").val(respuesta['id']);
        $('#slider1').val(respuesta['slider1']);
        $('.previsualizar1').attr('src', respuesta['slider1']);

        
      }
    });
 });

 /**==================================================================
 * ELIMINAR SLIDER
 ===================================================================*/
 $(document).on("click", ".btnEliminarSlider", function(){
   let idSlider = $(this).attr("idSlider");
   swal({
      title: "¿Estas seguro de borrar el Slider?",
      text: "Si no lo está, puede cancelar la acción",
      type: 'warning',
      showCancelButton: true,
      confirmButtonColor: '#3085d6', 
      cancelButtonColor: '#d33',
      cancelButtonText:'Cancelar',
      confirmButtonText: 'Si, borrar Slider'
   }).then(function(result){
      if(result.value){
         let datos = new FormData();
         //le estoy pasando un identificador y un valor
         datos.append("eliminarSlider", idSlider);
     
         $.ajax({
           url:"ajax/sliders.ajax.php", 
           method: "POST",
           data: datos,
           cache: false,
           contentType: false,
           processData: false,
           success: function(respuesta){
            window.location = 'sliders'; 
           }
         });

      }
   })
 });


 