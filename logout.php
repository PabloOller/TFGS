<?php
session_start();
session_destroy();
?>
<script>
    alert("Cerrando sesión...")
    window.location.href = "index.php";
</script>