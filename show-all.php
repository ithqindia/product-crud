<!doctype html>
<html lang="en">

<head>
    <?php
    $title = 'Home page';
    include 'inc-head.php';
    ?>

    
<style>
      table
      {
        border: 3px solid blue;
        background-color:yellow;
        box-shadow: 10px 10px 10px  black;
      }
      table, th, td 
      {
          border:2px solid blue;
          padding:10px;
      }
    </style>
</head>

<body>
    <?php include 'inc-nav.php' ?>
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h1>Show all!</h1>

                <?php 
                    require_once 'connect1.php';

                    $sql = "SELECT * FROM product";
                    $stmt = $pdo->prepare($sql);
                    $stmt->execute();
                    $results = $stmt->fetchAll();
                    //var_dump($results);

                ?>
                <!-- Table Start -->
                <?php
                echo "<table>
                <tr>
                <th>Name</th>
                <th>Price</th>
                <th>Discount</th>
                <th>Category</th>
                <th>Image</th>
                <th>Description</th>
                <th>Update</th>
                <th>Delete</th>
                </tr>";

                foreach($results as $product)
                {
                echo "<tr>
                
                <td>$product[name] </td>
                <td>$product[price] </td> 
                <td>$product[discount] </td> 
                <td>$product[category] </td>
                <td>$product[image] </td> 
                <td>$product[description] </td>
                <td><a href='update.php?id=$product[id]'>update</td>
                <td><a href='delete.php?id=$product[id]'>delete</tb>
                </tr>";
                }
                echo "</table>";
                //​echo "</table>";
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