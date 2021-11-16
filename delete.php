<script>
    alert('are you sure to delete');
</script>


<?php
require_once 'connection.php';
$sql = $pdo->prepare("DELETE FROM pro WHERE id = $_GET[id]");
$sql->execute();
?>