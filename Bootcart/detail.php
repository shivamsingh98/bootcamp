<?php include 'templates/header.php'; ?>    
<?php include 'backend/getproducts.php'; ?>
<?php $product=getsingleproduct($_GET['id']);
$id=$_SESSION['id'];
?>

<div class="container text-center ">
    <h1><?=$product['name'] ?></h1>
    <img src="<?=$product['img'] ?>" alt="">
    <h1>Price-Rs. <?=$product['price'] ?></h1>
    <p><?=$product['description'] ?></p>

    <?php if(isset($_SESSION['username'])){ ?>
    <button onclick="addtocart('<?=$id?>','<?=$product['id']?>')" class="btn btn-success">Add To Cart</button>
    <?php } ?>
</div>

<?php include 'templates/footer.php'; ?>