<!doctype html>
<html lang="en">

<head>
    <?php
    $title = 'carts-show page';
    include 'inc-head.php';
    ?>
<style>
    table
    {   
    border:3px solid black;
    background-color:#faaccf;
    margin-top: 80px;
    box-shadow:8px 8px 5px gray;      
    }
    th,td
    {
    border:1px solid black;
    padding: 10px 15px;
    text-align:center;
    }
    td:hover
    {
    background-color:#fa7db5;
    font-weight: bold;
    }
    th
    {
    background-color: #fa7db5;
    }
    th:hover
    {
    background-color: black;
    color:white;
    font-weight:bolder;
    }
</style>

</head>

<body>
<?php 
    require_once 'connect.php';
     $sql = "SELECT * FROM carts";
     $stmt = $pdo->prepare($sql);
     $stmt->execute();
     $results = $stmt->fetchAll();
    // var_dump($results);
?>
    <?php include 'inc-nav.php' ?>
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h1>Cart table</h1>
                <!-- Table Start -->

                 <?php
                   echo "<table>
                    <tr>
                    <th> No. </th>
                    <th> Product_id</th>
                    <th> Price</th>
                    <th> Quantity </th>
                    <th> Store_id</th>
                    <th> Delivery </th>
                    <th> Edit/Update </th>
                    <th> Delet </th>
                    </tr>" ;
                    $count=1;
                    foreach( $results as $carts){
                 
                    echo "
                    <tr>
                    <td> $count</td>
                    <td> $carts[product_id] </td>
                    <td> $carts[price] </td> 
                    <td> $carts[quantity] </td>
                    <td> $carts[store_id] </td>
                    <td> $carts[delivery] </td>
                    <td> <a href='carts-add.php?id=$carts[id]'> Edit </a> </td>
                    <td> <a href='carts-delet.php?id=$carts[id]'> Delet </a> </td>
                    </tr> ";
                    $count++;
                    }
                    

                    echo"</table>"
                    ?>

            </div>
        </div>
    </div>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    -->
</body>

</html>