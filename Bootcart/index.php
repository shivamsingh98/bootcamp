<?php include'templates/header.php'; ?>
<?php include'backend/getproducts.php'; ?>
<?php 
    
    //print_r($products);
    //session_start();
   // echo $_SESSION['username'];
  //echo  $_GET['category'];  //category is used in db hence

    if(isset($_GET['category'])){
      $category = $_GET['category'];
      $products=getproductsbycategory($category);
    }else{
      $category = 'Our Products'; 
      $products=getallproducts();  
    }
    if(isset($_SESSION['username'])){
      $username = $_SESSION['username'];
      $id=$_SESSION['id'];
    }else{
      $username='user';

    }
    

?>


<div class="jumbotron">
  <h1 class="display-4">Hello,
    <?php echo $username; ?> !</h1>
  <p class="lead">Find the best products. Right Now!</p>
  <hr class="my-4">
  <?php if(!isset($_SESSION['username'])){?>
  <p>Sign Up,start ordering now.</p>
  <p class="lead">
    <a class="btn btn-primary btn-lg" href="signup.php" role="button">Sign Up</a>
  </p>
  <?php } ?>
</div>

<h1 class="text-center">
  <?=$category?>
</h1>

<div class="container">
  <div class="row">
  <?php foreach($products as $product){?>
    <div class="col-sm-4">
      <div class="card" style="width: 18rem; margin-top:20px;">
        <img class="card-img-top" src="<?=$product['img'] ?>" alt="Card image cap">
        <div class="card-body">
          <h5 class="card-title"> <?=$product['name'] ?>-<?=$product['price'] ?></h5>
          <p class="card-text"><?=$product['description'] ?></p>
          <a href="detail.php?id=<?=$product['id'] ?>" class="btn btn-primary btn-info">View Product</a>

          <?php if(isset($_SESSION['username'])){ ?>

          <a onclick="addtocart('<?=$id?>','<?=$product['id']?>')" class="btn btn-primary btn-success">Add To Cart</a>

          <?php } ?>
        </div>
      </div>
    </div>
  <?php } ?>
  </div>
</div>

<?php include'templates/footer.php'; ?>