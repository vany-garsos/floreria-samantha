
/**==================================================================
 * EDITAR PIE DE PAGINA
 ===================================================================*/

 $(document).on("click", ".btnEditarPie", function(){
    let idPie = $(this).attr("idPie");
    let datos = new FormData();
    //le estoy pasando un identificador y un valor
    datos.append("idPie", idPie);
    $.ajax({
      url:"ajax/pie.ajax.php", 
      method: "POST",
      data: datos,
      cache: false,
      contentType: false,
      processData: false,
      dataType: "json",
      success: function(respuesta){
        $("#editardireccion").val(respuesta['direccion']);
        $("#editartelefono").val(respuesta['telefono']);
        $("#editarcorreo").val(respuesta['correo']);
        $("#editarhorario").val(respuesta['horario']);
        $("#editarfacebook").val(respuesta['link_facebook']);
        $("#editarinstagram").val(respuesta['link_instagram']);
        $("#editarwhatsapp").val(respuesta['link_whatsapp']);
        $("#editarfrase").val(respuesta['frase']);
        $("#editarid").val(respuesta['id']);
      }
    });
 });


 