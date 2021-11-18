<!doctype html>
<html lang="en">

<head>
    <?php
    $title = 'category-show page';
    include 'inc-head.php';
    ?>
<style>
    table
    {   
    border:3px solid black;
    background-color:#ccecf0;
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
    background-color:#99e8f2;
    font-weight: bold;
    }
    th
    {
    background-color: #99e8f2;
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
    $sql = "SELECT * FROM category";
    $stmt = $pdo->prepare($sql);
    $stmt->execute();
    $results = $stmt->fetchAll();
    // var_dump($results);
?>
    <?php include 'inc-nav.php' ?>
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h1>Show catagories !</h1>
                <!-- Table Start -->

                 <?php
                   echo "<table>
                    <tr>
                    <th> No. </th>
                    <th> Name </th>
                    <th> Image </th>
                    <th> Description </th>
                    <th> Edit/Update </th>
                    <th> Delet </th>
                    </tr>" ;
                    $count=1;
                    foreach( $results as $category){
                  
                    echo "
                    <tr>
                    <td> $count </td>
                    <td> $category[name] </td>
                    <td> $category[image] </td>
                    <td> $category[description] </td>
                    <td> <a href='category-add.php?id=$category[id]'> Edit </a> </td>
                    <td> <a href='category-delet.php?id=$category[id]'> Delet </a> </td>
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