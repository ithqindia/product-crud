<?php 
    require_once 'connect.php';
    $sql = "SELECT * FROM product";
    $stmt = $pdo->prepare($sql);
    $stmt->execute();
    $results = $stmt->fetchAll();
    // var_dump($results);

?>
<!-- Table Start -->
<?php
echo "<table border=5px solid green; cellspacing=0>
<tr>
<th>Sr.No.</th>
<th>Name</th>
<th>Price</th>
<th>Discount</th>
<th>Category</th>
<th>Image</th>
<th>Description</th>
</tr>";

foreach($results as $product)
{
 echo "<tr>
   <td></td>
   <td>$product[name] </td>
   <td>$product[price] </td> 
   <td>$product[discount] </td> 
   <td>$product[category] </td>
   <td>$product[image]</td>
   <td>$product[description]</td>
   <td><a href='update.php?id=$product[id]'>update</td>
   <td><a href='delete.php?id=$product[id]'>delete</tb>
   </tr>";
}
echo "</table>";
//​echo "</table>";
?>