<?php require_once('includes/header.php');
require_once('includes/db_connect.php');?>

<section class="breadcrumb-area" style="background-image:url(images/background/2.jpg);">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="breadcrumbs text-center">
                    <h1>Common Parasites to Livestocks</h1>
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
                        <li><a href="index.php">Home</a></li>
                        <li><a href=""><i class="fa fa-angle-right"></i></a></li>
                        <li><a href="#">Crops Farming</a></li>
                        <li><a href=""><i class="fa fa-angle-right"></i></a></li>
                        <li>Hoticultural Crops</li>
                    </ul>
                </div>
                <div class="col-lg-4 col-md-7 col-sm-7">
                    <p>We provide <span>100% organic</span> products</p>
                </div>
            </div>
        </div>
    </div>

</section>

<section class="featured-product" >
    <div class="container" style="margin-top: -70px">

        <div class="row filter-list clearfix" id="MixItUp717B05">
            <?php
            $sql="SELECT * FROM `tbl_parasites`";
            $query=mysqli_query($conn,$sql);
            while($row=mysqli_fetch_assoc($query)) {
                ?>
                <div class="col-md-4 col-sm-6 col-xs-12 mix mix_all default-item all beauty others"
                     style="display: inline-block;">
                    <div class="inner-box">
                        <div class="single-item center">
                            <figure style="margin-top: -20px; margin-bottom: -30px" class="image-box"><img
                                    src="images/parasites/<?php echo $row['image'];?>" style="width: 100%; height=200px;" alt=" ">

                            </figure>
                            <div class="content">
                                <h4><?php echo $row['pname']?></h4>
                                <p><?php echo $row['description']?><a href="animal_details.php" style="color: blue">. Read More</a></p>
                            </div>

                        </div>
                    </div>
                </div>
                <?php
            }?>
        </div>
    </div>
</section>

<?php require_once('includes/footer.php');?>
