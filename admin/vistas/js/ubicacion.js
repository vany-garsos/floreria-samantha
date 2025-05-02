/**==================================================================
 * EDITAR UBICACION
 ===================================================================*/

 $(document).on("click", ".btnEditarUbicacion", function(){
    let idUbicacion = $(this).attr("idUbicacion");
    console.log(idUbicacion +'archivo Ubicacion');
    let datos = new FormData();
    //le estoy pasando un identificador y un valor
    datos.append("idUbicacion", idUbicacion);

    $.ajax({
      url:"ajax/ubicacion.ajax.php", 
      method: "POST",
      data: datos,
      cache: false,
      contentType: false,
      processData: false,
      dataType: "json",
      success: function(respuesta){
        $("#editarnombre_negocio").val(respuesta['nombre_negocio']);
        $("#editardireccion").val(respuesta['direccion']);
        $("#editartelefono").val(respuesta['telefono']);
        $("#editarhorario").val(respuesta['horario']);
        $("#editarurlmapa").val(respuesta['urlmapa']);
        $("#editarid").val(respuesta['id']);
      }
    });
 });
