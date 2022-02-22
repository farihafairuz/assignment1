<?php include 'pages/include/header.php'?>
    <section class="py-5">
        <div class="container">
            <div class="row">
                <?php foreach ($orderProducts as $products) { ?>
                    <div class="col-md-6">
                        <div>
                            <img src="<?php echo $products['image']; ?>" alt="" class="img-fluid" style="height: 250px; width: 350px">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="card card-body" style="min-height: 300px">
                            <h2 class="font-weight-bold"><?php echo $products['productName']; ?></h2>
                            <p>Price: BDT <?php echo $products['description']; ?> </p>
                            <p><?php echo $products['price']; ?></p>
                            <a href="javascript:void(0)" class="btn btn-outline-success">Order Now</a>
                        </div>

                    </div>
                <?php } ?>
            </div>
        </div>
    </section>

<?php include 'pages/include/footer.php'?>