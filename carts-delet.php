<script>
    confirm("file deleted");
</script>
<?php

require_once 'connect.php';
 $sql = $pdo->prepare("DELETE FROM carts WHERE id = $_GET[id]");
 $sql->execute();
?>
