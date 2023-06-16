<?php

function itemsDisplay(){

        include('connect.php');
        $select = "SELECT * FROM items";
        $qry = mysqli_query($conn,$select);
        $num = mysqli_num_rows($qry);
        
        if($num > 0){
            while($num-- && $fetch = mysqli_fetch_assoc($qry)){
               ?>
               <div class="col-lg-4 col-md-6 col-sm-12 pb-1">
                    <div class="card product-item border-0 mb-4">
                        <div class="card-header product-img position-relative overflow-hidden bg-transparent border p-0">
                            <img class="img-fluid w-100" src="uploads/<?php echo $fetch['Item_mockup'];?>" alt="">
                        </div>
                        <div class="card-body border-left border-right text-center p-0 pt-4 pb-3">
                            <h6 class="text-truncate mb-3"><?php echo $fetch['item_name'];?></h6>
                            <div class="d-flex justify-content-center">
                                <h6><?php echo $fetch['item_price'];?></h6><h6 class="text-muted ml-2"><del><?php echo $fetch['discount_price'];?></del></h6>
                            </div>
                        </div>
                        <div class="card-footer d-flex justify-content-between bg-light border">
                            <a href="detail.php?id=<?php echo $fetch['id'];?>" class="btn btn-sm text-dark p-0"><i class="fas fa-eye text-primary mr-1"></i>View Detail</a>
                            <a href="" class="btn btn-sm text-dark p-0"><i class="fas fa-shopping-cart text-primary mr-1"></i>Add To Cart</a>
                        </div>
                    </div>
                </div>
               <?php
            }
        }
    }
?>
