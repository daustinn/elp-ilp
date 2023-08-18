$(document).ready(function () {
  $(".eliminarUsuario").click(function () {
    var userId = $(this).data("id");

    $.ajax({
      url: "controller/user.controller.php?id=" + userId, // Enviamos el ID en la URL
      method: "DELETE", // Utilizamos el método DELETE
      success: function (response) {
        $("#mensaje").html(response);
        // Puedes también remover la fila eliminada de la tabla si lo deseas
        $(this).closest("tr").remove();
      },
    });
  });
});
