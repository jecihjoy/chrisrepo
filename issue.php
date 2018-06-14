<?php require_once('includes/header.php');
require_once('includes/db_connect.php');?>


<section class="breadcrumb-area" style="background-image:url(images/background/2.jpg);">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="breadcrumbs text-center">
                    <h1>send an inquiry</h1>
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
                        <li>Need Help?</li>
                    </ul>
                </div>
                <div class="col-lg-4 col-md-7 col-sm-7">
                    <p>We provide <span>100% organic</span> products</p>
                </div>
            </div>
        </div>
    </div>

</section>

<section class="single-contact_us">
    <div class="container">
        <div class="row">
            <div class="col-md-4 col-sm-6 col-xs-12">
                <div class="left_contact">
                    <h5>Get In Touch</h5>
                    <ul class="list catagories">
                        <li><a href="#"><i class="fa fa-home color1"></i>No 271, Red Cross Building, Modern Street, Newyork City, USA.</a></li>
                        <li><a href="#"><i class="fa fa-envelope color1"></i><span>Organicstore@gmail.com</span><br>customersupport@organic.com</a></li>
                        <li><a href="#"><i class="fa fa-phone color1"></i>+91 (321) 758 142 5698 <br>1800-8692-258-1547</a></li>
                    </ul>

                    <div class="border-area">
                        <h6>Woriking Hours</h6>
                        <div class="list Business">
                            <p>Monday - Friday: 09.00am to 07.00pm <br>Saturday: 10.00am to 05.00pm <br>Sunday: <span>Closed</span></p>
                        </div>

                    </div>


                </div>
            </div>
            <div class="col-md-8 col-sm-6 col-xs-12">
                <div class="contact_in-box">
                    <div class="theme-title ">
                        <h2>fill to specify your problem</h2>
                    </div>
                    <form action="post">
                        <div class="row">
                            <div class="col-md-6 form-group">
                                <label for="exampleInputSomeInfo">Select Category</label>
                                <select name="cat" id="cat" class="form-control">
                                    <option>~~category~~</option>
                                    <?php
                                    $s="SELECT * FROM tbl_main_category";
                                    $q=mysqli_query($conn,$s);

                                    while($r=mysqli_fetch_assoc($q)){
                                        ?>
                                        <option value ="<?php echo $r['id']?>" > <?php echo $r['name']?></option>
                                        <?php
                                    }
                                    ?>
                                </select>
                            </div>
                            <!-- /.col-md-6 -->
                            <div class="col-md-6 form-group">
                                <label for="exampleInputSomeInfo">Select Sub_Category</label>
                                <select name="subcat" id="subcat" class="form-control">
                                    <option >~~select value~~</option>
                                </select>
                            </div>
                            </div>
                        <div class="row">
                            <div class="col-md-6 form-group">
                                <label for="exampleInputSomeInfo">Select Animal Type</label>
                                <select name="cattype" id="cattype" class="form-control">
                                    <option>~~category~~</option>
                                </select>
                            </div>
                            <!-- /.col-md-6 -->
                            <div class="col-md-6 form-group">
                                <label for="exampleInputSomeInfo">Select Category</label>
                                <select name="cat2" id="cat2" class="form-control">
                                    <option >~~select value~~</option>
                                    <?php
                                    $s="SELECT * FROM `tbl_crop_category` ";
                                    $q=mysqli_query($conn,$s);


                                    while($r=mysqli_fetch_assoc($q)){
                                        ?>
                                        <option value ="<?php echo $r['cat_id']?>" > <?php echo $r['cat_name']?></option>
                                        <?php
                                    }
                                    ?>
                                </select>
                            </div>
                        </div>
                        <div class="row">
                            <?php
                            $s="SELECT * FROM  `tbl_crops_signs`";
                            $q=mysqli_query($conn,$s);

                            while($r=mysqli_fetch_assoc($q)){
                                ?>
                            <!-- /.col-md-6 -->
                            <div class="col-md-4 form-group">
                                <div class="row">
                                    <div class="col-md-4 form-group">
                                        <input value="<?php echo $r['signs_id'] ?>" type="checkbox" class="" id="">
                                    </div>
                                    <div class="col-md-8 form-group">
                                        <label class="form-check-label"
                                               for="exampleCheck1"> <?php echo $r['description'] ?></label>
                                    </div>

                                </div>
                            </div>
                                <?php
                            }
                            ?>
                            <!-- /.col-md-6 -->
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <button type="submit" class="color1_bg">Post Comment</button>
                            </div>

                        </div>
                        <!-- /.row -->
                    </form>

                </div>
            </div>
        </div>
    </div>
</section>

<?php require_once('includes/footer.php');?>
