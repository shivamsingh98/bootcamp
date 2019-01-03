  <?php 
    include 'backend/getproducts.php';
    $products = getallproducts();
    // print_r($products);

    $product=getsingleproduct(4);
    print_r($product);
?>
