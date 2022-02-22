<?php
session_start();
if(!isset($_SESSION['id']))
{
    header('Location: action.php?pages=login');
}
?>
<?php include 'pages/include/header.php';?>
<section class="py-5">
    <div class="container">
        <div class="row">
            <div class="col-md-8 mx-auto">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">Product Entry</h3>
                    </div>
                    <div class="card-body">
                        <?php
                        $_SESSION['id'];
                        ?>
                        <?php if(isset($message)){ ?>
                            <h6 class="text-success text-center"> <?php echo $message; ?></h6>
                        <?php } ?>
                        <div>
                            <form action="action.php" method="post" enctype="multipart/form-data">
                                <div class="form-group row">
                                    <label for=""class="col-md-4 col-form-label"> Product ID </label>
                                    <div class="col-md-8">
                                        <input type="number" name="pid" class="form-control">
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="" class="col-md-4 col-form-label">Product Name</label>
                                    <div class="col-md-8">
                                        <select id="products" name="products" class="form-control">
                                            <option value="Sharee">Sharee</option>
                                            <option value="Kamiz">Kamiz</option>
                                            <option value="Tops">Tops</option>
                                            <option value="Jewellery">Jewellery</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="" class="col-md-4 col-form-label"> Product details</label>
                                    <div class="col-md-8">
                                        <textarea name="description" class="form-control" cols="10">Enter Product Description</textarea>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for=""class="col-md-4 col-form-label"> Price </label>
                                    <div class="col-md-8">
                                        <input type="number" name="price" class="form-control">
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for=""class="col-md-4 col-form-label"> Image </label>
                                    <div class="col-md-8">
                                        <input type="file" name="img" accept="image/*">
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for=""class="col-md-4 col-form-label"></label>
                                    <div class="col-md-8">
                                        <input type="submit" name="btn" class="btn btn-outline-success btn-block" value="Save Product Info">
                                    </div>
                                </div>

                            </form>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
</section>


<?php include 'pages/include/footer.php';?>
