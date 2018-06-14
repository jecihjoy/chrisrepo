<?php require_once('includes/header.php');
require_once('includes/db_connect.php');?>

<section class="breadcrumb-area" style="background-image:url(images/background/2.jpg);">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="breadcrumbs text-center">
                    <h1>Cash Crops</h1>
                    <h4>Welcome to certified online organic products suppliersr</h4>
                </div>
            </div>
        </div>
    </div>
    <div class="breadcrumb-bottom-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-md-5 col-sm-5">
                    <ul>
                        <li><a href="#">Home</a></li>
                        <li><a href=""><i class="fa fa-angle-right"></i></a></li>
                        <li><a href="#">Crop Farming</a></li>
                        <li><a href=""><i class="fa fa-angle-right"></i></a></li>
                        <li>Cash Crops</li>
                    </ul>
                </div>
                <div class="col-lg-4 col-md-7 col-sm-7">
                    <p>We provide <span>100% organic</span> products</p>
                </div>
            </div>
        </div>
    </div>

</section>

<section class="news" >
    <div class="container" style="margin-top: -70px">

        <div class="row">
            <?php
            $sql="SELECT *
            FROM
                agriculture_database.tbl_crops
                INNER JOIN agriculture_database.tbl_crop_category
                    ON (tbl_crops.category_id = tbl_crop_category.cat_id)
                    WHERE tbl_crop_category.cat_id = 4";
            $query=mysqli_query($conn,$sql);
            while($row=mysqli_fetch_assoc($query)) {
                ?>
                <div class="col-md-4 col-sm-6 col-xs-12">
                    <div class="blogList_single_post clear_fix wow fadeInUp" style="visibility: visible; ">
                        <div class="img-holder">
                            <img src="images\cash\<?php echo $row['image']?>" style="height: 150px; width:380px ;" alt="News" class="img-responsive">
                        </div>
                        <!-- End of .img_holder -->
                        <div class="post">
                            <ul>
                                <li><a href="blog-details.html" class="tran3s"><i class="fa fa-tag"
                                                                                  aria-hidden="true"></i> Healthy</a>
                                </li>
                                <li><a href="blog-details.html" class="tran3s"><i class="fa fa-clock-o"
                                                                                  aria-hidden="true"></i> J21st Aug,
                                        2015</a></li>
                                <li><a href="blog-details.html" class="tran3s"><i class="fa fa-comments"
                                                                                  aria-hidden="true"></i> 26</a></li>
                            </ul>
                            <div class="text">
                                <h4><a href="blog-details.html"><?php echo $row['crop_name']?></a></h4>

                                <p><?php echo $row['about']?></p>

                                <div class="link"><a href="crops_details.php?action = transview&user_id=<?php echo $row['crop_id']?>" class="tran3s">READ MORE<span
                                            class="fa fa-sort-desc"></span></a></div>

                            </div>

                        </div>
                        <!-- End of .post -->
                    </div>
                </div>
                <?php
            }?>

        </div>
    </div>
</section>

<?php require_once('includes/footer.php');?>
