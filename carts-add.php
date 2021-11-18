<!doctype html>
<html lang="en">

<head>
    <?php
    $title = 'carts-insert page';
    include 'inc-head.php';
    ?>
</head>

<body>
    <?php include 'inc-nav.php' ?>
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h1>Add Carts</h1>
                <?php require_once 'connect.php';
                    $sql = "SELECT * FROM product";
                    $stmt = $pdo->prepare($sql);
                    $stmt->execute();
                    $products = $stmt->fetchAll();
                    // var_dump($results);
                ?>
                <!-- form start -->
                <form id='cartsForm'>
                    <!-- product-id -->
                    <div class="mb-3">
                        <label for="formGroupExampleInput" class="form-label">Product-id :</label>
                        <select name='product_id'>
                        <?php foreach($products as $product) { ?> 
                        <option value="<?php echo $product['id'] ?>"> <?php echo $product['name'] ?></option>
                        <?php } ?>
                        </select>
                    </div>
                    <!-- price -->
                    <div class="mb-3">
                        <label for="formGroupExampleInput2" class="form-label">Price:</label>
                        <input type="number" name="price" class="form-control" id="formGroupExampleInput2" placeholder="price">
                    </div>
                    <!-- quantity -->
                    <div class="mb-3">
                        <label for="formGroupExampleInput2" class="form-label">Quantity:</label><br>
                        <input type="number" name="quantity" class="form-control" id="formGroupExampleInput2" placeholder="quentity">
                    </div>
                    <!-- store-id -->
                    <div class="mb-3">
                        <label for="formGroupExampleInput" class="form-label">Store-id :</label>
                        <input type="number" name="store_id" class="form-control" id="formGroupExampleInput" placeholder="store-id">
                    </div>
                    <!-- delivery -->
                        <fieldset class="row mb-3">
                        <legend class="col-form-label col-sm-2 pt-0">Delivery:</legend>
                        <div class="col-sm-10">
                            <div class="form-check">
                            <input class="form-check-input" type="radio" name="delivery" id="1" value="Home" checked>
                            <label class="form-check-label" for="gridRadios1">
                            home
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="delivery" id="2" value="Office" checked>
                            <label class="form-check-label" for="gridRadios2">
                            Office
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="delivery" id="3" value="Warehouse" checked>
                            <label class="form-check-label" for="gridRadios3">
                            Warehouse
                        </label>
                        </div>
                        </div>
                        </fieldset>
                    <!-- submit -->
                    <button type="submit" id="submitBtn" class="btn btn-primary">Submit</button>
                </form>
            </div>
        </div>
    </div>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    <script src="https://unpkg.com/axios/dist/axios.min.js"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    -->

    <script>
        var queryString = window.location.search;
        var urlParams = new URLSearchParams(queryString);
        var id = urlParams.get('id');
        console.log(id)
        var isInsert = true;
        if (id) {
            axios.get('carts-get.php', {
                params: {
                    id: id
                }
            }).then(function(response) {
                console.log(response.data);
                document.getElementsByName('product_id')[0].value = response.data.product_id;
                document.getElementsByName('price')[0].value = response.data.price;
                document.getElementsByName('quantity')[0].value = response.data.quantity;
                document.getElementsByName('store_id')[0].value = response.data.store_id;
                document.getElementsByName('delivery')[0].value = response.data.delivery;
            }).catch(function(error) {
                console.log(error);
                alert(error);
            });
            isInsert = false;
        }

        document.getElementById("submitBtn").addEventListener("click", function(event) {
            event.preventDefault();
            if (isInsert) {
                axios.post('carts-insert.php', {
                        product_id: document.getElementsByName('product_id')[0].value,
                        price: document.getElementsByName('price')[0].value,
                        quantity: document.getElementsByName('quantity')[0].value,
                        store_id: document.getElementsByName('store_id')[0].value, 
                        delivery:document.querySelector('input[name="delivery"]:checked').value,
                    })
                    .then(function(response) {
                        console.log(response);
                        alert('data inserted - ' + response.data);
                    })
                    .catch(function(error) {
                        console.log(error);
                        alert('error');
                    });
            } else {
                axios.post('carts-update.php', {
                        product_id: document.getElementsByName('product_id')[0].value,
                        price: document.getElementsByName('price')[0].value,
                        quantity: document.getElementsByName('quantity')[0].value,
                        store_id: document.getElementsByName('store_id')[0].value, 
                        delivery:document.querySelector('input[name="delivery"]:checked').value,
                        id: id
                    })
                    .then(function(response) {
                        console.log(response.data);
                        alert('data updated - ' + response.data);
                    })
                    .catch(function(error) {
                        console.log(error);
                        alert('error');
                    });
            }

        });
    </script>
</body>

</html>