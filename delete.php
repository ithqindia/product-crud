<script>
       alert("Are you Delete this data");
    </script>

    <?php
    require_once 'connect1.php';
    $sql = $pdo->prepare("DELETE FROM product WHERE id = $_GET[id]");
    $sql->execute();
    ?>