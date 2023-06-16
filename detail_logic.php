<?php
    function detailsDisplay(){

        include('connect.php');
        if(isset($_GET['id'])){
            $item_id = $_GET['id'];

            $select = "SELECT * FROM items WHERE id='$item_id'";
            $qry = mysqli_query($conn,$select);
            $num = mysqli_num_rows($qry);
            
            if($num > 0){
                while($num-- && $fetch = mysqli_fetch_assoc($qry)){
                    $select_image = "SELECT * FROM item_images WHERE item_id='$item_id'";
                    $qry_image = mysqli_query($conn,$select_image);
                    $num_image = mysqli_num_rows($qry_image);
                    
                    
                    ?>
                    <div class="row px-xl-5">
                        <div class="col-lg-5 pb-5">
                            <div id="product-carousel" class="carousel slide" data-ride="carousel">
                                <div class="carousel-inner border">
                                    <?php
                                $active = true; // variable to track the active item
                                
                                while ($fetch_image = mysqli_fetch_assoc($qry_image)) {
                                    if ($active) {
                                        $active_class = 'active';
                                    } else {
                                        $active_class = null;
                                    }
                                    ?>
                                    <div class="carousel-item <?php echo $active_class; ?>">
                                        <img class="w-100 h-100" src="uploads/<?php echo $fetch_image['image_']; ?>" alt="Image">
                                    </div>
                                    <?php
                                    $active = false;
                                }
                                ?>
                            </div>
                            <a class="carousel-control-prev" href="#product-carousel" data-slide="prev">
                                <i class="fa fa-2x fa-angle-left text-dark"></i>
                            </a>
                            <a class="carousel-control-next" href="#product-carousel" data-slide="next">
                                <i class="fa fa-2x fa-angle-right text-dark"></i>
                            </a>
                        </div>
                    </div>
                    
                    <div class="col-lg-7 pb-5">
                            <h3 class="font-weight-semi-bold"><?php echo $fetch['item_name'] ?></h3>
                            <div class="d-flex mb-3">
                                <div class="text-primary mr-2">
                                    <small class="fas fa-star"></small>
                                    <small class="fas fa-star"></small>
                                    <small class="fas fa-star"></small>
                                    <small class="fas fa-star-half-alt"></small>
                                    <small class="far fa-star"></small>
                                </div>
                                <small class="pt-1">(50 Reviews)</small>
                            </div>
                            <h3 class="font-weight-semi-bold mb-4"><?php echo $fetch['item_price'] ?></h3>
                            <p class="mb-4"><?php echo $fetch['item_description'] ?></p>
                            <div class="d-flex mb-3">
                                <p class="text-dark font-weight-medium mb-0 mr-3">Sizes:</p>
                                <form>
                                    <div class="custom-control custom-radio custom-control-inline">
                                        <input type="radio" class="custom-control-input" id="size-1" name="size">
                                        <label class="custom-control-label" for="size-1">XL</label>
                                    </div>
                                    <div class="custom-control custom-radio custom-control-inline">
                                        <input type="radio" class="custom-control-input" id="size-2" name="size">
                                        <label class="custom-control-label" for="size-2">S</label>
                                    </div>
                                    <div class="custom-control custom-radio custom-control-inline">
                                        <input type="radio" class="custom-control-input" id="size-3" name="size">
                                        <label class="custom-control-label" for="size-3">M</label>
                                    </div>
                                    <div class="custom-control custom-radio custom-control-inline">
                                        <input type="radio" class="custom-control-input" id="size-4" name="size">
                                        <label class="custom-control-label" for="size-4">L</label>
                                    </div>
                                    <div class="custom-control custom-radio custom-control-inline">
                                        <input type="radio" class="custom-control-input" id="size-5" name="size">
                                        <label class="custom-control-label" for="size-5">XL</label>
                                    </div>
                                </form>
                            </div>
                            <div class="d-flex mb-4">
                                <p class="text-dark font-weight-medium mb-0 mr-3">Colors:</p>
                                <form>
                                    <div class="custom-control custom-radio custom-control-inline">
                                        <input type="radio" class="custom-control-input" id="color-1" name="color">
                                        <label class="custom-control-label" for="color-1">Black</label>
                                    </div>
                                    <div class="custom-control custom-radio custom-control-inline">
                                        <input type="radio" class="custom-control-input" id="color-2" name="color">
                                        <label class="custom-control-label" for="color-2">White</label>
                                    </div>
                                    <div class="custom-control custom-radio custom-control-inline">
                                        <input type="radio" class="custom-control-input" id="color-3" name="color">
                                        <label class="custom-control-label" for="color-3">Red</label>
                                    </div>
                                    <div class="custom-control custom-radio custom-control-inline">
                                        <input type="radio" class="custom-control-input" id="color-4" name="color">
                                        <label class="custom-control-label" for="color-4">Blue</label>
                                    </div>
                                    <div class="custom-control custom-radio custom-control-inline">
                                        <input type="radio" class="custom-control-input" id="color-5" name="color">
                                        <label class="custom-control-label" for="color-5">Green</label>
                                    </div>
                                </form>
                            </div>
                            <div class="d-flex align-items-center mb-4 pt-2">
                                <div class="input-group quantity mr-3" style="width: 130px;">
                                    <div class="input-group-btn">
                                        <button class="btn btn-primary btn-minus" >
                                            <i class="fa fa-minus"></i>
                                        </button>
                                    </div>
                                    <input type="text" class="form-control bg-secondary text-center" value="1">
                                    <div class="input-group-btn">
                                        <button class="btn btn-primary btn-plus">
                                            <i class="fa fa-plus"></i>
                                        </button>
                                    </div>
                                </div>
                                <button class="btn btn-primary px-3"><i class="fa fa-shopping-cart mr-1"></i> Add To Cart</button>
                            </div>
                            <div class="d-flex pt-2">
                                <p class="text-dark font-weight-medium mb-0 mr-2">Share on:</p>
                                <div class="d-inline-flex">
                                    <a class="text-dark px-2" href="">
                                        <i class="fab fa-facebook-f"></i>
                                    </a>
                                    <a class="text-dark px-2" href="">
                                        <i class="fab fa-twitter"></i>
                                    </a>
                                    <a class="text-dark px-2" href="">
                                        <i class="fab fa-linkedin-in"></i>
                                    </a>
                                    <a class="text-dark px-2" href="">
                                        <i class="fab fa-pinterest"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                </div>
                <?php
            }
        }
    }
}
    function moreLike(){
        
        include('connect.php');
        $select = "SELECT * FROM items";
        $qry = mysqli_query($conn,$select);
        $num = mysqli_num_rows($qry);
        if($num > 0){
            ?>

            <div class="owl-carousel related-carousel">
                <?php
                    while($num-- && $fetch = mysqli_fetch_assoc($qry)  ){
                        ?>

                    <div class="card product-item border-0">
                        <div class="card-header product-img position-relative overflow-hidden bg-transparent border p-0">
                            <img class="img-fluid w-100" src="uploads/<?php echo $fetch['Item_mockup']  ?>" alt="">
                        </div>
                        <div class="card-body border-left border-right text-center p-0 pt-4 pb-3">
                            <h6 class="text-truncate mb-3"><?php echo $fetch['item_name'] ?></h6>
                            <div class="d-flex justify-content-center">
                                <h6><?php echo $fetch['item_price'] ?></h6><h6 class="text-muted ml-2"><del><?php echo $fetch['discount_price'] ?></del></h6>
                            </div>
                        </div>
                        <div class="card-footer d-flex justify-content-between bg-light border">
                            <a href="" class="btn btn-sm text-dark p-0"><i class="fas fa-eye text-primary mr-1"></i>View Detail</a>
                            <a href="" class="btn btn-sm text-dark p-0"><i class="fas fa-shopping-cart text-primary mr-1"></i>Add To Cart</a>
                        </div>
                    </div>
                    <?php    
                }        
                ?>
                <div class="card product-item border-0">
                        <div class="card-header product-img position-relative overflow-hidden bg-transparent border p-0">
                            <img class="img-fluid w-100" src="img/product-1.jpg" alt="">
                        </div>
                        <div class="card-body border-left border-right text-center p-0 pt-4 pb-3">
                            <h6 class="text-truncate mb-3">Colorful Stylish Shirt</h6>
                            <div class="d-flex justify-content-center">
                                <h6>$123.00</h6><h6 class="text-muted ml-2"><del>$123.00</del></h6>
                            </div>
                        </div>
                        <div class="card-footer d-flex justify-content-between bg-light border">
                            <a href="" class="btn btn-sm text-dark p-0"><i class="fas fa-eye text-primary mr-1"></i>View Detail</a>
                            <a href="" class="btn btn-sm text-dark p-0"><i class="fas fa-shopping-cart text-primary mr-1"></i>Add To Cart</a>
                        </div>
                    </div>
                    <div class="card product-item border-0">
                        <div class="card-header product-img position-relative overflow-hidden bg-transparent border p-0">
                            <img class="img-fluid w-100" src="img/product-2.jpg" alt="">
                        </div>
                        <div class="card-body border-left border-right text-center p-0 pt-4 pb-3">
                            <h6 class="text-truncate mb-3">Colorful Stylish Shirt</h6>
                            <div class="d-flex justify-content-center">
                                <h6>$123.00</h6><h6 class="text-muted ml-2"><del>$123.00</del></h6>
                            </div>
                        </div>
                        <div class="card-footer d-flex justify-content-between bg-light border">
                            <a href="" class="btn btn-sm text-dark p-0"><i class="fas fa-eye text-primary mr-1"></i>View Detail</a>
                            <a href="" class="btn btn-sm text-dark p-0"><i class="fas fa-shopping-cart text-primary mr-1"></i>Add To Cart</a>
                        </div>
                    </div>
                    <div class="card product-item border-0">
                        <div class="card-header product-img position-relative overflow-hidden bg-transparent border p-0">
                            <img class="img-fluid w-100" src="img/product-3.jpg" alt="">
                        </div>
                        <div class="card-body border-left border-right text-center p-0 pt-4 pb-3">
                            <h6 class="text-truncate mb-3">Colorful Stylish Shirt</h6>
                            <div class="d-flex justify-content-center">
                                <h6>$123.00</h6><h6 class="text-muted ml-2"><del>$123.00</del></h6>
                            </div>
                        </div>
                        <div class="card-footer d-flex justify-content-between bg-light border">
                            <a href="" class="btn btn-sm text-dark p-0"><i class="fas fa-eye text-primary mr-1"></i>View Detail</a>
                            <a href="" class="btn btn-sm text-dark p-0"><i class="fas fa-shopping-cart text-primary mr-1"></i>Add To Cart</a>
                        </div>
                    </div>
                    <div class="card product-item border-0">
                        <div class="card-header product-img position-relative overflow-hidden bg-transparent border p-0">
                            <img class="img-fluid w-100" src="img/product-4.jpg" alt="">
                        </div>
                        <div class="card-body border-left border-right text-center p-0 pt-4 pb-3">
                            <h6 class="text-truncate mb-3">Colorful Stylish Shirt</h6>
                            <div class="d-flex justify-content-center">
                                <h6>$123.00</h6><h6 class="text-muted ml-2"><del>$123.00</del></h6>
                            </div>
                        </div>
                        <div class="card-footer d-flex justify-content-between bg-light border">
                            <a href="" class="btn btn-sm text-dark p-0"><i class="fas fa-eye text-primary mr-1"></i>View Detail</a>
                            <a href="" class="btn btn-sm text-dark p-0"><i class="fas fa-shopping-cart text-primary mr-1"></i>Add To Cart</a>
                        </div>
                    </div>
                    <div class="card product-item border-0">
                        <div class="card-header product-img position-relative overflow-hidden bg-transparent border p-0">
                            <img class="img-fluid w-100" src="img/product-5.jpg" alt="">
                        </div>
                        <div class="card-body border-left border-right text-center p-0 pt-4 pb-3">
                            <h6 class="text-truncate mb-3">Colorful Stylish Shirt</h6>
                            <div class="d-flex justify-content-center">
                                <h6>$123.00</h6><h6 class="text-muted ml-2"><del>$123.00</del></h6>
                            </div>
                        </div>
                        <div class="card-footer d-flex justify-content-between bg-light border">
                            <a href="" class="btn btn-sm text-dark p-0"><i class="fas fa-eye text-primary mr-1"></i>View Detail</a>
                            <a href="" class="btn btn-sm text-dark p-0"><i class="fas fa-shopping-cart text-primary mr-1"></i>Add To Cart</a>
                        </div>
                    </div>
            </div>

            <?php
        }
    }
?>