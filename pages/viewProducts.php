<?php include 'pages/include/header.php';?>

<section class="py-5 ">
    <div class="container">
        <div class="row">
            <?php foreach ($products as $product) { ?>
                <div class="col-md-4 mt-4">
                    <div class="card h-100">
                        <img src="<?php echo $product['image']; ?>" alt="Product Picture" class="card-img-top" style="height: 250px">
                        <div class="card-body">
                            <h2 class="card-title"><?php echo $product['productName']; ?></h2>
                            <p class="text-justify"><?php echo $product['description']; ?></p>
                            <p> Product Price: <?php echo $product['price'];?></p>
                            <a href="action.php?pages=order-products&&productId= <?php echo $product['productId']; ?>" class="btn btn-outline-success float-right">View</a>

                        </div>
                    </div>
                </div>
            <?php } ?>
        </div>
    </div>

</section>

<?php include 'pages/include/footer.php';?>

