<?php 

echo "Tu pago ha sido creado con éxito."

?>
<a href="#" onclick="close_window();return false;">Cerrar</a>
<script>
function close_window() {
  if (confirm("Close Window?")) {
    close();
  }
}
</script>