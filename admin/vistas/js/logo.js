$(".nuevafotologo").change(function(){
    let imagen = this.files[0];
    /**========================
     * validamos el formato en jpg, png
     ========================*/
     if(imagen["type"] != "image/jpeg" && imagen["type"] != "image/png"){
        $(".nuevafotologo").val("");
        swal({
            title: "Error al subir la imagen",
            text: "La imagen debe estar en formato JPG o PNG",
            type: "error",
            confirmButtonText: "Cerrar"
        })
     }else if(imagen["size"]>2000000){
        $(".nuevafotologo").val("");
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
 * EDITAR LOGO
 ===================================================================*/

 $(document).on("click", ".btnEditarLogo", function(){
    let idLogo = $(this).attr("idLogo");
    let datos = new FormData();
    //le estoy pasando un identificador y un valor
    datos.append("idLogo", idLogo);

    $.ajax({
      url:"ajax/logo.ajax.php", 
      method: "POST",
      data: datos,
      cache: false,
      contentType: false,
      processData: false,
      dataType: "json",
      success: function(respuesta){
        $('#fotoactual').val(respuesta['foto']);
        $('.previsualizar').attr('src', respuesta['foto']);
        $("#editarid").val(respuesta['id']);    
      }
    });
 });



 